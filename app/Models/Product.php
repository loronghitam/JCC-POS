<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_category',
        'detail',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'id_product', 'id');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'product_id', 'id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'id_product', 'id');
    }
}
