<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'renter_id',
        'rent_at',
        'rental_days',
        'type',
        'shelf_id',
    ];

    protected $dates = [
        'rent_at',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}