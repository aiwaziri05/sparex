<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    //
    protected $fillable = [
        'email',
        'email_description',
        'phone',
        'phone_description',
        'address',
        'address_description',
    ];
}
