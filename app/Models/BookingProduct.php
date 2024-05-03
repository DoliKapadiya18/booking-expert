<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'product_id',
        'price',
        'discount'
    ];


    public function product(){
        return $this->belongsTo(Product::class); 
    }

}
