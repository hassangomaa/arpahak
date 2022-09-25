<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Link;

class SocialApiController extends Controller
{
    public function youtube_video($id){
        $link_url = Link::select('link_url')->where('link_id','=',$id)->get();
        $video_id = explode("v=", $link_url[0]->link_url);
        return view('users.social_api.youtube_video',compact('video_id'));
    }

    public function facebook($id){
        $link_url = Link::select('link_url')->where('link_id','=',$id)->get();
        return view('users.social_api.facebook',compact('link_url'));
    }

    public function tiktok($id){
        $link_url = Link::select('link_url')->where('link_id','=',$id)->get();
        $url_id = explode("/", $link_url[0]->link_url);
        return view('users.social_api.tiktok',compact('link_url','url_id'));
    }
}
