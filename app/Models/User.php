<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Traits\GeneralTrait;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
#####
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Mews\Purifier\Casts\CleanHtmlInput;
use Mews\Purifier\Casts\CleanHtmlOutput;


class User extends Authenticatable implements MustVerifyEmail, JWTSubject
{
     use GeneralTrait;
    use HasApiTokens, HasFactory, Notifiable;
//    use InteractsWithMedia;
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
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
//    protected $casts = [
//        'uuid'=> CleanHtml::class,
//        'name'=> CleanHtml::class,
//        'email'=> CleanHtml::class,
//        'password'=> CleanHtml::class,
//        'google_id'=> CleanHtml::class,
//        'image'=> CleanHtml::class,
//        'gender'=> CleanHtml::class,
//        'notify'=> CleanHtml::class,
//        'phone'=> CleanHtml::class,
//        'birthdate'=> CleanHtml::class,
//        'email_verified_at'=> CleanHtml::class,
//        'email_verified_at' => 'datetime',
//        'remember_token'=> CleanHtml::class,
//    ];

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
################33
    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }

}
