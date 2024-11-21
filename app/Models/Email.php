<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uid',
        'message_id',
        'subject',
        'body',
        'from',
        'to',
        'cc',
        'bcc',
        'status',
        'is_starred',
        'sent_at',
        'received_at',
        'read_at',
        'thread_id',
    ];

    protected function casts(): array
    {
        return [
            'sent_at' => 'datetime',
            'received_at' => 'datetime',
            'read_at' => 'datetime',
        ];
    }

    /**
     * The original email that started the thread.
     */
    public function originalEmail()
    {
        return $this->belongsTo(Email::class, 'thread_id');
    }

    /**
     * Replies to the email.
     */
    public function replies()
    {
        return $this->hasMany(Email::class, 'thread_id');
    }

    /**
     * Scope a query to only include inbox emails.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInbox($query)
    {
        return $query->where('status', 'inbox');
    }

    /**
     * Scope a query to only include sent emails.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSent($query)
    {
        return $query->where('status', 'sent');
    }

    /**
     * Scope a query to only include starred emails.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStared($query)
    {
        return $query->where('is_starred', true);
    }

    /**
     * Scope a query to only include starred emails.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDraft($query)
    {
        return $query->where('is_starred', true);
    }

    /**
     * Mark the email as read.
     */
    public function markAsRead()
    {
        $this->update(['read_at' => now()]);
    }
}
