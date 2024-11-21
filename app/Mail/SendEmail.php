<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $message;
    public $cc;
    public $bcc;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $message, $cc = null, $bcc = null)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->cc = is_array($cc) ? $cc : (is_null($cc) ? [] : [$cc]);
        $this->bcc = is_array($bcc) ? $bcc : (is_null($bcc) ? [] : [$bcc]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->view('email.custom-message')
            ->subject($this->subject)
            ->with([
                'content' => $this->message,  // Pass HTML content
            ]);

        if (!empty($this->cc)) {
            $email->cc($this->cc);
        }

        if (!empty($this->bcc)) {
            $email->bcc($this->bcc);
        }

        return $email;
    }
}
