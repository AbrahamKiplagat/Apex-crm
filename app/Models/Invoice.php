<?php

// app/Models/Invoice.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'deal_id',
        'contact_id',
        'quote_id', // Add this line to include the quote_id field
        'invoice_number',
        'invoice_date',
        'due_date',
        'total',
        'status',
    ];

    // Add relationships
    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}





