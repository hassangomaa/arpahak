<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $table = 'links';

    protected $fillable =[
        'link_id','link_url','link_price','link_name',
    ];

    public function click(){
        return $this->belongsTo(Count_Click::class,'link_id');
    }
}
