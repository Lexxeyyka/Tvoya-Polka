<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Rent extends Model
{
    /**
     * @var string
     */
    protected $table = 'Rent';

    /**
     * @var string
     */
    protected $primaryKey = 'id_rent';

    /**
     * @var array
     */
    protected $fillable = [
        'date_of_rent',
        'count_of_days',
        'number_contract',
        'type_of_place',
        'cost_of_rent',
        'number_of_shelf',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'date_of_rent',
    ];

    /**
     * Выборка продуктов текущей аренды
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'id_rent', 'id_rent');
    }

    public function getProfitAttribute()
    {
        $requests_sum = Request::where('number_contract', '=',  \Auth::user()->number_contract)->sum('amount');

        return $this->products()->sum(DB::raw('price * amount_of_sold')) - $requests_sum;
    }
}