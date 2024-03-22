<?php
// Customer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'country', 'phone'];

    // Define relationship with Order model
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_name', 'name');
    }
}
