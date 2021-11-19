<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //fn to get product details per order
    // public function products() {
    //     $this->hasMany(Product::class);
    // }
    
    //fn to get parent details
    public function user() {
        $this->belongsTo(User::class);
    }

    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'price'
    ];
}
