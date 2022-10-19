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
        'stok',
    ];

    public function category()
    {
        return $this->oneToMany(Category::class);
    }
}
