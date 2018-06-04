<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'rent_id',
        'title',
        'price',
        'total_amount',
        'sold_amount',
    ];
}