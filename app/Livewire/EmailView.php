<?php

namespace App\Livewire;

use App\Mail\SendEmail;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Webklex\IMAP\Facades\Client;

class EmailView extends Component
{
    public $email;

    public $content;

    protected function rules()
    {
        return [
            'content' => 'required|string',
        ];
    }

    public function mount(Email $email)
    {
        $this->email = Email::withTrashed()->find($email->id);
        if ($email && is_null($email->read_at)) {
            $email->read_at = now();
            $email->save();
        }
    }

    public function sendMessage()
    {
        $this->validate();

        Email::create([
            'to' => $this->email->status == 'sent' ? $this->email->to : $this->email->from,
            'from' => config('mail.from.address'),
            'subject' => 'Re: ' . $this->email->subject,
            'body' => $this->content,
            'thread_id' => $this->email->id,
            'status' => 'sent',
            'sent_at' => now(),
        ]);

        Mail::to($this->email->status == 'sent' ? $this->email->to : $this->email->from)->send(new SendEmail(
            'Re: ' . $this->email->subject,
            $this->content,
            $this->email->cc,
            $this->email->bcc
        ));

        return redirect()->route('read-email', $this->email->id)->with([
            'type' => 'success',
            'message' => 'Email Replied successfully',
        ]);
    }

    public function toggleStar($emailId)
    {
        $email = Email::find($emailId);

        if ($email) {
            $email->is_starred = !$email->is_starred;
            $email->save();

            $this->mount($this->email);
        }
    }

    public function sendDraft($emailId)
    {
        $email = Email::find($emailId);

        if ($email) {
            // dd($email);

            Mail::to($email->to)->send(new SendEmail(
                $email->subject,
                $email->body,
                $email->cc,
                $email->bcc
            ));

            $email->status = 'sent';
            $email->sent_at = now();
            $email->save();

            return redirect()->route('read-email', $email->id)->with([
                'type' => 'success',
                'message' => 'Email Sent successfully',
            ]);
        }
    }

    public function moveToTrash($emailId)
    {
        $email = Email::find($emailId);

        if ($email) {
            if ($email->status === 'sent' || $email->status === 'draft') {
                // If email is sent, just update its status to 'trash' in the database
                $email->status = 'trash';
                $email->delete();
                $email->save();
            } else {
                $client = Client::account('default');
                $client->connect();

                $folder = $client->getFolder('INBOX');
                $message = $folder->query()->whereMessageId($email->message_id)->get()->first();
                if ($message) {
                    // Move the message to Trash
                    $message->move('INBOX.Trash');
                    // Soft delete the email in the database
                    $email->delete();
                }

                $client->disconnect();
            }

            return redirect()->route('inbox')->with([
                'status' => 'success',
                'message' => 'Email moved to trash successfully',
            ]);
        }
    }

    public function restoreEmail($emailId)
    {
        $email = Email::withTrashed()->find($emailId);

        if ($email) {
            if ($email->status === 'trash') {
                $email->status = $email->sent_at ? 'sent' : 'draft';
                $email->restore();
                $email->save();
            } else {
                $client = Client::account('default');
                $client->connect();

                $trashFolder = $client->getFolder('Trash');
                $message = $trashFolder->query()->whereMessageId($email->message_id)->get()->first();
                if ($message) {
                    // Move the message back to the INBOX folder
                    $message->move('INBOX');

                    // Update the email uid in the database
                    $email->update(['uid' => $message->getUid()]);

                    // Restore the email if it was soft-deleted
                    $email->restore();
                }
                $client->disconnect();
            }

            return redirect()->route('read-email', $email->id)->with([
                'status' => 'success',
                'message' => 'Email restored successfully',
            ]);
        }
    }

    public function deleteEmail($emailId)
    {
        $email = Email::withTrashed()->find($emailId);

        if ($email) {
            if ($email->status === 'trash') {
                // Permanently delete the email from the database
                $email->forceDelete();
            } else {
                $client = Client::account('default');
                $client->connect();

                $folder = $client->getFolder('Trash');
                $message = $folder->query()->whereMessageId($email->message_id)->get()->first();

                if ($message) {
                    // Permanently delete the message from the IMAP server
                    $message->delete();

                    // Permanently delete the email record from the database
                    $email->forceDelete();
                }
                $client->disconnect();
            }

            return redirect()->route('inbox')->with([
                'status' => 'success',
                'message' => 'Email deleted successfully',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.email-view');
    }
}
