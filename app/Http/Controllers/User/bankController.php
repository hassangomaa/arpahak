<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Postimage;

use Illuminate\Http\Request;

class bankController extends Controller
{
    public function pay_page($id)
    {
        session(['prod_id' => $id]);
        return view('users.pages.payment.bank');
    }

    public function uploadFile(Request $request)
    {
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image/bank/'), $filename);
            $data['image']= $filename;
            $data['created_by']= $request->email ;
            $data['path']= public_path('public/Image/bank/').$filename ;
            $data['status']= 'pending' ;
            $data['type']= 'Bank-Alahly' ;        }
        $data->save();

        if($data->save()){
            return redirect()->back()->with('success','تم إرسال الصورة للمختصين للمراجعة.');

        }

        return redirect()->back();

    }
}
