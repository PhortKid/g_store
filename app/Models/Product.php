<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_type_id', 'quantity', 'purchase_price', 'sale_price', 'description'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
