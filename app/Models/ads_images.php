<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ads_images extends Model
{
    use HasFactory;
    protected $table = 'ads_images';
    protected $fillable = 
    [
        'id',
        'image1',
        'image2',
        'image3',
        'ad_id',
    ];
    public $timestamps = false;
}
