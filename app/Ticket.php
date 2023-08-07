<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = [
        'title', 'description','status','project_id','user_id','due_date','attachments','notifications'
    ];
}
