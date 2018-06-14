<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class News extends Authenticatable
{
    protected $table = 'News';

    protected $primaryKey = 'id_news';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'text',
        'datetime',
        'image_url',
    ];

    protected $dates = [
        'datetime',
    ];
}