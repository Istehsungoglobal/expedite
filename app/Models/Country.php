<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'code',
        'phone_code',
        'currency',
        'currency_code',
        'currency_symbol',
        'flag',
    ];

    public $timestamps = false;
}
