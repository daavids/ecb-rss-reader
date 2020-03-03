<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'cdata' => 'array'
    ];

    public function getBaseCurrencyAttribute()
    {
        return 'EUR';
    }
}
