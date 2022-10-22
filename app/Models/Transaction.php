<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'total_price',
        'status',
        'id_cart',
    ];

    public function product()
    {
        $this->belongsTo(Product::class, 'id_product');
    }
}
