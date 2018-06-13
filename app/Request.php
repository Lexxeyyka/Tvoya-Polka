<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Request extends Authenticatable
{
    protected $table = 'Requests';

    protected $primaryKey = 'id_request';

    public $timestamps = false;

    protected $fillable = [
        'number_contract',
        'amount',
        'datetime',
        'status',
        'card_number',
    ];

    protected $dates = [
        'datetime',
    ];
}