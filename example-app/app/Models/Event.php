<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Defining the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

    // Making the columns mass assignable
    protected $fillable = [
        'user_id',       // Foreign key to the 'users' table
        'event_name',    // Event name
        'event_date',    // Event date
        'description',   // Event description
        'location',      // Event location
        'ticket_price',  // Ticket price
        'total_tickets', // Total number of tickets
        'event_image',   // Event image
    ];
}
