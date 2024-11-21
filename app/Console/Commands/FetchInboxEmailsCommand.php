<?php

namespace App\Console\Commands;

use App\Models\Email;
use Illuminate\Console\Command;
use Webklex\IMAP\Facades\Client;

class FetchInboxEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch unseen emails from the inbox and store them in the database.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = Client::account('default');
        $client->connect();

        // Get the inbox folder
        $folder = $client->getFolder('INBOX');
        $messages = $folder->messages()->all()->get();

        foreach ($messages as $message) {
            $messageId = $message->getMessageId();  // Get the Message-ID

            // If no Message-ID, you can generate a unique hash as a fallback
            if (!$messageId) {
                $messageId = md5($message->getSubject() . $message->getDate() . $message->getFrom()[0]->mail);
            }

            // Save email in the database
            Email::updateOrCreate(
                ['message_id' => $messageId], // Store the IMAP unique identifier
                [
                    'uid' => $message->getUid(),
                    'from' => $message->getFrom()[0]->mail,
                    'to' => $message->getTo()[0]->mail,
                    'subject' => $message->getSubject(),
                    'body' => $message->getHTMLBody(),
                    'received_at' => $message->getDate(),
                    'status' => 'inbox',
                ]
            );
        }
        $client->disconnect();
        $this->info('Fetched and stored unseen emails successfully!');
    }
}
