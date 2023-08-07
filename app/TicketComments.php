<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketComments extends Model
{
    	protected $table = 'ticket_comments';
    protected $fillable = ['ticket_id', 'user_id', 'comments', 'attachments','updated_due_date','updated_status_id' ];
 
 
}
