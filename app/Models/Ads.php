<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $table = 'ads';
    protected $fillable = 
    [
        'id',
        'user_id',
        'title',
        'description',
        'city_id',
        'country_id',
        'image',
        'category_id',
        'created_at',
        'views',
        'price',
        'confirmed',
        'used',
        'delivery',
    ];
    public $timestamps = false;

    public function getcity()
    {
        return $this->hasOne(city::class);
//        return $this->hasOne(city::class,'name_ar','city_id');
    }
    public function getcountry()
    {
        return $this->hasOne(Country::class,'name_ar','country_id');
    }
    public function getcategory()
    {
        return $this->hasOne(ads_category::class,'id','category_id');
    }
    public function getimages()
    {
        return $this->hasMany(ads_images::class,'ad_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


}
