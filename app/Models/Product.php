<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey ='id_prod';
    public function products()
    {
        return $this->belongsTo(Product::class, 'products');
    }

    protected $fillable = [
        'id_prod',
        'name_prod',
        'detail_prod',
        'price',
        'stock_prod'
    ];
}
