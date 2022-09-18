<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','category_id','type','status','home_page'
    ];

    public function serviceCateoory(){
        return $this->belongsTo(ServiceCategory::class,'category_id');
    }

    public function services(){
        return $this->hasMany(Service::class,'id');
    }

}
