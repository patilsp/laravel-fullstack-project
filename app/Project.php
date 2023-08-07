<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $fillable = [
        'project_name',
        'project_type',
        'description',
        'start_date',
        'end_date',
        'customer_id',        
        'due_date',
        'user_id',
        'status_id',
        'project_budget_price',
        'project_budget_usage',
        'project_allow_changes',
        'project_notifications',
    ];
}
