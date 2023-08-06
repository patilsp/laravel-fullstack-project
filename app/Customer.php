<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'address_line1',
        'address_line2',
        'city',
        'country',
        'pin_code',
        'billing_address',
    ];
}
