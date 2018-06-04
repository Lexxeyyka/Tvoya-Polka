<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    protected $fillable = [
        'contract_number',
        'lastname',
        'firstname',
        'middlename',
        'login',
        'password',
        'address',
        'phone_number',
    ];

    protected $hidden = [
        'password',
    ];

    protected $primaryKey = 'contract_number';

    public function rents()
{
    return $this->hasMany('App\Rent');
}

    public function getFullNameAttribute() {
        return $this->lastname . ' ' . $this->firstname . ' ' . $this->middlename;
    }
}