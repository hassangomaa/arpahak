<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Image extends Model
{
    use InteractsWithMedia;

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
