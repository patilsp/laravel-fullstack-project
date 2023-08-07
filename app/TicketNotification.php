<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketNotification extends Model
{
    protected $table = 'ticket_notifications';
    protected $fillable = ['ticket_id', 'notification_by', 'notification_to', 'status_id','display'  ];
}
