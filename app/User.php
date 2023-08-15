<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    protected $fillable = [
		'name', 'email', 'password','confirm-password', 'employee_id', 'firstname', 'lastname','customer_id','vendor_id','allowed_ips','online_vendor','supervisor_id','qc_sampling','percentage_audit','productcategory','capacity','percentage_index_marking','ip_restrictions','logginforday','loggindate','hourly_wage','check_user_login','emp_accept_terms','emp_accept_date
		','manager_id','emp_process_type','check_spec_user','role_id','image'
	];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
