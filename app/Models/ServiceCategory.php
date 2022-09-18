<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id','created_at','updated_at'
    ];

    public function serviceType(){
        return $this->hasMany(ServiceType::class,'category_id')->with('name');
    }


}
