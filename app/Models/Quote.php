<?php
// app/Models/Quote.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'deal_id',
        'contact_id',
        'quote_date',
        'expiry_date',
        'total',
        'status',
    ];

    // Relationships
    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
