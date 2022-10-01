<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Response;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::where('confirmed','=',1)->get();
        return view('gallery',compact('images'));
    }

    public function acceptedImages(){
        $images = Image::where('confirmed','=',1)->get();
        return view('admin.pages.images.accepted',compact('images'));
    }

    public function getImages()
    {
        $images = Image::where('user_id', Auth::id())->get();
        return view('users.pages.images.index',compact('images'));
    }

    public function pendingImages()
    {
        $images = Image::where('confirmed',0)->get();
        return view('admin.pages.images.index',compact('images'));
    }
    public function acceptImage($id)
    {
        $image = Image::find($id);
        $image->confirmed = 1 ; 
        $image->save();
        return redirect()->back();
    }
    public function declineImage($id)
    {
        $image = Image::find($id);
        $image->confirmed = 2 ; 
        $image->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.pages.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'image'=>'required',
            'price'=>'nullable|numeric|min:0',
        ]);
        $data = new Image();
        $data->title = $request->title;
        $data->user_id = auth()->user()->id;
        $data->price = $request->price ;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();

        if($data->save()){
            return redirect()->back()->with('success','تم إرسال الصورة للمختصين للمراجعة.');

        }
        else
        {
            return redirect()->back()->with('error','نأسف, حدث خطأ ما اثناء اضافه الصوره.');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
//       $images = Image::find($image);
//                dd($image);
          $userinfo = Image::find($image->id)->user;
          $related_ads = Image::all();
          return view('gallery_show',compact('image','userinfo','related_ads'));
    }

    public function download (Request $request, Image $image)
    {
//        dd($request);
        $price = $image->price;
        $proc_id = Str::uuid()->toString();
        $this->validate($request,[
            'email'=>'required',
            'balance'=>'required',
        ]);

        if($request->balance < $price )
            return redirect()->back()->with('error','عفوا رصيدك ﻻ يكفي, برجاء شحن المحفظه اوﻻ!!');
        else {
//        dd($trade);
            //Decrement user balance
            User::find(Auth::id())->decrement('balance',$price);
            Payment::create(
                [
                    'payment_id' =>  $proc_id ,
                    'payer_id' => Auth::id(),
                    'payer_email' => $request->email,
                    'amount' => $price,
                    'currency' => 'EGP',
                    'payment_status' => "bag",

                ]
            );
            Session::put('proc_id', $proc_id);
//            return redirect()->back()->with('success', 'تم اضافه طلبكم بنجاح, سيقوم احد ممثلينا بالتواصل معكم. شكرا ﻻستخدامكم ارباحك');
            return redirect()->back()->with('success', 'تم اضافه طلبكم الي حقيبة المشتريات, قم بتأكيد الشراء اوﻻ ');
        }


//        $filepath =asset('public/Image/'.$image->image);
//        return Response::download($filepath);
        return Storage::download(storage_path('app/public/Image/Payment/'.$image->image),'Download');
//        return $media ;

//        return Storage::disk('local')->get('public') ;
//        ->download($filepath);

//        return Storage::download($filepath);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::find($id)->delete();
        session() -> flash('success', trans('تم حذف الصورة'));
        return redirect()->back();
    }
}
