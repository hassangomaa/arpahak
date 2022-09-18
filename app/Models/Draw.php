<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
    use HasFactory;

    protected $table = 'draws';

    protected $fillable = [
        'draw_id','draw_contact','draw_way','draw_amount','user_id','user_name','confirmed'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
