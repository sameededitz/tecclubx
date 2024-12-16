<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Webklex\IMAP\Facades\Client;

class EmailController extends Controller
{
    public function test()
    {
        $client = Client::account('default');
        $client->connect();

        // $folders = $client->getFolders();
        // foreach ($folders as $folder) {
        //     dd($folder->children);
        // }
        // dd($folders->has_children());
        $folder = $client->getFolder('INBOX');
        $messages = $folder->messages()->all()->get();
        // dd($messages);

        // foreach ($messages as $message) {
        //     $messageId = $message->getMessageId();  // Get the Message-ID
        //     dd($message->getMessageId());

        //     // If no Message-ID, you can generate a unique hash as a fallback
        //     if (!$messageId) {
        //         $messageId = md5($message->getSubject() . $message->getDate() . $message->getFrom()[0]->mail);
        //     }

        //     // Save email in the database
        //     Email::updateOrCreate(
        //         ['message_id' => $messageId], // Store the IMAP unique identifier
        //         [
        //             'uid' => $message->getUid(),
        //             'from' => $message->getFrom()[0]->mail,
        //             'to' => $message->getTo()[0]->mail,
        //             'subject' => $message->getSubject(),
        //             'body' => $message->getHTMLBody(),
        //             'received_at' => $message->getDate(),
        //             'status' => 'inbox',
        //         ]
        //     );
        // }

        $message = $folder->query()->whereMessageId('CALz5dvS7NUndh3DUcQGqd2XV22A0moW0X6JZCWF-+odnhBYrNw@mail.gmail.com')->get()->first();
        // $message->move('INBOX.Trash');
        dd($message);
        // dd($messages);
        foreach ($messages as $message) {
            dd($message->getTo());
        }
        // $message = $folder->query()->getMessageByUid($email->message_id);
        // $message->moveToFolder('INBOX'); // Move back to Inbox

        $client->disconnect();
    }
}
