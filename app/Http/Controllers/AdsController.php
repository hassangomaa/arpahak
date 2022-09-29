<?php

namespace App\Http\Controllers;

use App\Models\Ads;
 use App\Models\Country;
 use App\Models\city;
use App\Models\User;
use App\Models\ads_category;
use App\Models\ads_images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdsController extends Controller
{
    public function index()
    {
        $ads = Ads::where('confirmed',1)->get();
        $cities = city::all();
        $country = Country::all();
        $category = ads_category::all();
        return view ('ads',compact('ads','cities','country','category'));
    }
    public function create()
    {
        $countries = Country::all();
        $cities = city::all();
        $category = ads_category::all();
        $user_role = User::find(Auth::id())->role_id;
//        dd($user_role);
        if($user_role == 1)
        {
            return view ('admin.pages.ads.create',compact('countries','cities','category'));
        }
        return view ('users.pages.ads.create',compact('countries','cities','category'));
    }
    public function store(Request $request)
    {
        $user_role = User::find(Auth::id())->role_id;
        $confirmed = 0;
        if($user_role == 1)
        {
            $confirmed = 1;
        }
        $this->validate($request,[
            'title'     =>  'required|string',
            'price'     =>  'required',
            'description'   =>  'required',
            'image'     =>  'required',
//            'image[1]'     =>  'required',
//            'image[2]'     =>  'required',
//            'image[3]'     =>  'required',
//            'image[4]'     =>  'required',
            'city_id'      =>  'required',
            'country_id'      =>  'required',
            'category'  =>  'required',
            'used'      =>  'required',
            'delivery' ,

        ]);
//        dd($request);
        if($request->delivery == 'on')
        {
            $request->delivery = 1;
        };
        if($request->delivery == null)
        {
            $request->delivery = 0;
        };
        $images = $request->file('image');

        $image = $request->file('image')[0];
        $image_name = $this->UploadAdPic($image);
        $image1 = $request->file('image')[1];
        $image_name1 = $this->UploadAdPic($image1);
        $image2 = $request->file('image')[2];
        $image_name2 = $this->UploadAdPic($image2);
        $image3 = $request->file('image')[3];
        $image_name3 = $this->UploadAdPic($image3);
        $post_ad = Ads::create(
            [
                'user_id'   =>  Auth::id(),
                'title'     =>  $request->title,
                'price'     =>  $request->price,
                'description'   => $request->description,
                'image'     =>  $image_name,
                'city_id'      =>  $request->city_id,
                'country_id'      =>  $request->country_id,
                'category_id'  =>  $request->category,
                'views'     =>  0, 
                'created_at'    =>  date('Y-m-d'),
                'used'      => $request->used,
                'delivery'  =>  $request->delivery,
                'confirmed' => $confirmed,
            ]
            );
        $ads_images = ads_images::create([
            'image1'    => $image_name1,
            'image2'    => $image_name2,
            'image3'    => $image_name3,
            'ad_id'    => $post_ad->id,
        ]);
        
        return redirect()->back()->with('success','تم اضافة الاعلان بنجاح');
    }
    public function UploadAdPic($image)
    {
        $image_name = time().$image->getClientOriginalName();
        $image->move(public_path('uploads'), $image_name);
        return $image_name;
    }

    public function pendingAds()
    {
        $ads = Ads::where('confirmed',0)->get();
        return view('admin.pages.ads.pendingAds',compact('ads'));
    }
    public function acceptAd($id)
    {
        $ad = Ads::find($id);
        $ad->confirmed = 1;
        $ad->save();
        return redirect()->back()->with('success','تم الموافقه علي الاعلان بنجاح');
    }
    public function declineAd($id)
    {
        $ad = Ads::find($id);
        $ad->delete();
        return redirect()->back()->with('success','تم حذف  الاعلان بنجاح');
    }
    public function getAd($id)
    {
        $Views = ads::find($id)->increment('views',1);
//        $city = Ads::find($id)->getcity;
        $cities = city::all();
        $userinfo = Ads::find($id)->user;
        $category = Ads::find($id)->getcategory;
        $images = Ads::find($id)->getimages->first();
        $ad = Ads::find($id);
        $related_ads = Ads::where('category_id',$ad->category_id)->get();
//        dd($city);
        return view('ad',compact('ad','cities','userinfo','category','images','related_ads'));
    }
}   
