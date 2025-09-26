<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function offers(){
        return $this->belongsToMany(Offer::class, 'productsoffers', 'product_id', 'offer_id');
    }
}
