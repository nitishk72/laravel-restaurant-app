<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // protected $casts = [
    //     'cart' => 'array'
    // ];
    protected $fillable = [
        'name', 'type', 'price'
    ];
}
