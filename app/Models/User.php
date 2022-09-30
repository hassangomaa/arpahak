<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use InteractsWithMedia;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_phone','email_verified_at','role_id','gender','city','country','facebook_link'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class,'user_id');
    }

    public function draws(){
        return $this->hasMany(Draw::class,'user_id');
    }

    public function clicks(){
        return $this->hasMany(Count_Click::class,'user_id');
    }

    public function services(){
        return $this->hasMany(UserService::class,'user_id');
    }


}
