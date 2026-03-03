<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $fillable = [
        'name',
        'email',
        'category',
        'priority',
        'subject',
        'message',
        'status',
    ];

    /**
     * Get a formatted ticket number.
     */
    public function getTicketNumberAttribute(): string
    {
        return '#SUP-' . str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }
}
