<?php

namespace App\Livewire;

use App\Models\Email;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Webklex\IMAP\Facades\Client;

class EmailCategories extends Component
{
    public $selectedCategory = 'inbox'; // Default to 'inbox'
    public $messages = [];
    public $categoryCounts = [];
    public $selectedEmails = [];

    public function mount()
    {
        // Fetch initial data (inbox by default)
        $this->fetchMessages();
        $this->fetchCategoryCounts();
    }

    public function fetchMessages()
    {
        if ($this->selectedCategory == 'trash') {
            // Fetch soft-deleted emails
            $this->messages = Email::onlyTrashed()->orderBy('received_at', 'desc')->get();
        } elseif ($this->selectedCategory == 'starred') {
            // Fetch starred emails
            $this->messages = Email::where('is_starred', true)->orderBy('received_at', 'desc')->get();
        } elseif ($this->selectedCategory == 'sent') {
            // Fetch starred emails
            $this->messages = Email::where('status', $this->selectedCategory)->orderBy('sent_at', 'desc')->get();
        } else {
            // Fetch regular emails
            $this->messages = Email::where('status', $this->selectedCategory)->orderBy('received_at', 'desc')->get();
        }
    }

    public function fetchCategoryCounts()
    {
        $this->categoryCounts = [
            'inbox' => Email::where('status', 'inbox')->count(),
            'draft' => Email::where('status', 'draft')->count(),
            'sent' => Email::where('status', 'sent')->count(),
            'trash' => Email::onlyTrashed()->count(),
            'starred' => Email::where('is_starred', true)->count(),
        ];
    }

    public function setCategory($category)
    {
        $this->selectedCategory = $category;
        $this->fetchMessages(); // Fetch messages for the selected category
    }

    public function toggleStar($emailId)
    {
        $email = Email::find($emailId);

        if ($email) {
            $email->is_starred = !$email->is_starred;
            $email->save();

            // Fetch messages again to update the list
            $this->fetchMessages();
        }
    }

    public function deleteSelected()
    {
        foreach ($this->selectedEmails as $emailId) {
            $this->moveToTrash($emailId);
        }

        $this->selectedEmails = [];
        $this->fetchMessages();
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
        }
    }

    public function restoreSelected()
    {
        foreach ($this->selectedEmails as $emailId) {
            $this->restoreEmail($emailId);
        }

        $this->selectedEmails = [];
        $this->fetchMessages();
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
        }
    }

    public function permanentlyDeleteSelected()
    {
        foreach ($this->selectedEmails as $emailId) {
            $this->permanentlyDelete($emailId);
        }

        $this->selectedEmails = [];
        $this->fetchMessages();
    }

    public function permanentlyDelete($emailId)
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
        }
    }

    public function markAsRead()
    {
        // Fetch and mark all selected emails as read
        Email::whereIn('id', $this->selectedEmails)->each(function ($email) {
            $email->markAsRead();
        });

        // Clear the selected emails and refresh the message list
        $this->selectedEmails = [];
        $this->fetchMessages();
    }

    public function fetchEmails()
    {
        // Call the artisan command to fetch emails
        $exitCode = Artisan::call('emails:fetch');

        if ($exitCode === 0) {
            // Command executed successfully, now refresh the messages and counts
            $this->fetchMessages();          // Fetch new messages
            $this->fetchCategoryCounts();    // Update the counts for categories
        } else {
            // Handle the case when the command fails (exit code is not 0)
            session()->flash('message', 'Failed to fetch emails.');
            session()->flash('status', 'error');
        }
    }

    public function toggleSelectAll()
    {
        // Select or deselect all emails
        if (count($this->selectedEmails) === count($this->messages)) {
            $this->selectedEmails = [];
        } else {
            $this->selectedEmails = collect($this->messages)->pluck('id')->toArray();
        }
    }

    public function render()
    {
        return view('livewire.email-categories');
    }
}
