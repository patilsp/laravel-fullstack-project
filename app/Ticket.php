<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    // protected $fillable = [
    //     'title', 'description','status','project_id','user_id','due_date','attachments','notifications'
    // ];
    protected $fillable = ['title', 'description', 'priority_id', 'status_id', 'assigned_by', 'assigned_to', 'category_id', 'due_date', 'attachemnts', 'open_date', 'due_date_org' ];
}
