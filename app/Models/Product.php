<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function bookingproducts(){
        return $this->hasMany(BookingProduct::class,'id', 'product_id'); 
    }
}
