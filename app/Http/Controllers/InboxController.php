<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InboxController extends Controller
{
    public function inbox()
    {
        $emails = Email::inbox()->orderBy('received_at', 'desc')->get();
        return view('admin.mail-blade', compact('emails'));
    }

    public function compose($sender = null)
    {
        return view('admin.compose', compact('sender'));
    }

    public function send(Request $request, Email $email)
    {
        // Validate the request
        // dd($request->all());
        $request->validate([
            'to' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'cc' => 'nullable|string',
            'bcc' => 'nullable|string',
        ]);

        $action = $request->input('action');

        try {
            $toEmails = collect(explode(',', $request->input('to', '')))
                ->map(fn($email) => trim($email))
                ->filter(fn($email) => filter_var($email, FILTER_VALIDATE_EMAIL))
                ->toArray();
            // dd($toEmails);
            // Store email in the database
            foreach ($toEmails as $email) {
                Email::create([
                    'to' => $email,
                    'from' => config('mail.from.address'),
                    'subject' => $request->subject,
                    'body' => $request->message,
                    'cc' => $request->input('cc'),
                    'bcc' => $request->input('bcc'),
                    'status' => $action === 'send' ? 'sent' : 'draft',
                    'sent_at' => $action === 'send' ? now() : null,
                    'read_at' => $action === 'send' ? now() : null,
                ]);
            }

            // Send the email
            if ($action === 'send') {
                if (is_array($toEmails)) {
                    foreach ($toEmails as $email) {
                        Mail::to($email)->send(new SendEmail(
                            $request->input('subject'),
                            $request->input('message'),
                            $request->input('cc'),
                            $request->input('bcc')
                        ));
                    }
                }
            }

            return redirect()->route('inbox')->with([
                'status' => 'success',
                'message' => 'Email sent successfully',
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Failed to send email: ' . $e->getMessage()]);
        }
    }

    public function view($emailId)
    {
        $email = Email::withTrashed()->findOrFail($emailId);
        return view('admin.view-email', compact('email'));
    }
}
