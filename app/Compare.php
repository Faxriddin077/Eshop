<?php

namespace App;

use AvoRed\Framework\Database\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Compare extends Model
{
    protected $fillable = ['product_id', 'user_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
