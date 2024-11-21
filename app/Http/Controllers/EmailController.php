<?php

namespace App\Http\Controllers;

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
        $folder = $client->getFolder('Trash');
        $messages = $folder->messages()->all()->get();
        dd($messages);
        $message = $folder->query()->whereMessageId('CALz5dvQJ69vN+Ckzwebs87tTeRcm5ZwpWcKFGWQDFhweE0ofuw@mail.gmail.com')->get()->first();
        $message->move('INBOX.Trash');
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
