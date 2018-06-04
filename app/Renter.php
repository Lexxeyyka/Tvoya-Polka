<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Renter extends Authenticatable
{
    protected $table = 'Renters';

    protected $primaryKey = 'number_contract';

    protected $fillable = [
        'second_name',
        'first_name',
        'patronimyc',
        'login',
        'password',
        'address',
        'phone_number',
    ];

    protected $hidden = [
        'password',
    ];

    public function rents()
    {
        return $this->hasMany('App\Rent', 'number_contract', 'number_contract');
    }

    public function getFullNameAttribute()
    {
        return $this->second_name . ' ' . $this->first_name . ' ' . $this->patronimyc;
    }

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute) {
            parent::setAttribute($key, $value);
        }
    }
}