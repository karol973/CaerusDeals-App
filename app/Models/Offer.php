<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /** @use HasFactory<\Database\Factories\OfferFactory> */
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'productsoffers', 'offer_id','product_id');
    }
}
