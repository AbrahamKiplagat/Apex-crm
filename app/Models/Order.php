<?php

// Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name', 'status', 'total_price', 'shipping_cost', 'order_date'];

    // Define relationship with Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_name', 'name');
    }
}
