<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
      'id','service_type_id','url','description','name','net_price','quantity','commission','currency'
    ];

    public function serviceType(){
        return $this->belongsTo(ServiceType::class,'service_type_id');
    }

    public function userService(){
        return $this->belongsTo(UserService::class);
    }
}
