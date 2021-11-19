<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //add fillable
    protected $fillable = [
        'product_name',
        'product_description',
        'quantity',
        'price',
        'status'
    ];
}
