<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['title', 'description',  'priority_id', 'status_id', 'assigned_by', 'assigned_to', 'category_id', 'project_id', 'category_id ', 'due_date', 'attachemnts', 'open_date', 'due_date_org' ,'current_user_id', 'current_user_role', 'open_date', 'notification', 'notification_user_id','updated_assigned_by ', 'effort', 'testing' ];
}
