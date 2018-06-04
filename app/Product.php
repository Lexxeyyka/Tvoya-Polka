<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'Products';

    /**
     * @var string
     */
    protected $primaryKey = 'id_product';

    /**
     * @var array
     */
    protected $fillable = [
        'product_name',
        'price',
        'amount',
        'amount_of_sold',
        'id_rent',
    ];
}