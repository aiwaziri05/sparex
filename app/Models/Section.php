<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'content',
        'type',
        'is_active',
        'sort_order',
    ];
}
