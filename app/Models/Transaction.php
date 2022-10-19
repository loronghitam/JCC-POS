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

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
