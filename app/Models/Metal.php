<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metal extends Model
{
    use HasFactory;
    protected $table = 'metals';
    protected $fillable =[
        'id',
        'name',
        'sell_price',
        'buy_price',
    ];

    public $timestamps = false;

//    protected $fillable =[
//
//    ];

}