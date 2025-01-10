<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Trainer extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'status',
        'profile_picture',
    ];
}
