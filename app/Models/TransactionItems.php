<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItems extends Model
{
    protected $fillable = [
        'transaction_id',
        'foods_id',
        'quantity',
        'price',
        'subtotal',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    public function food()
    {
        return $this->belongsTo(Foods::class, 'foods_id');
    }
}
