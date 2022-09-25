<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trade extends Model
{
    use HasFactory;
    protected $table = 'trade';
    public $timestamps = false ; 
    protected $fillable = 
    [
        'id',
        'description',
        'link',
        'quantity',
        'commission',
        'currency',
        'metal_type',
        'trade_type',
        'status',
        'user_id',
    ];
}
