<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primaryKey = 'id';

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

    protected $hidden = [
        'created_at', 
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getFullAddressAttribute()
    {
        return $this->address . ', ' . $this->city . ', ' . $this->state;
    }

    // You can define relationships with other models here if needed (e.g., orders, user, etc.)
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
}
