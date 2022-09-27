<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Postimage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class vodafoneController extends Controller
{
    public function pay_page($id)
    {
        session(['prod_id' => $id]);
        return view('users.pages.payment.vodafone');
    }

    public function uploadFile(Request $request)
    {
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image/vodafone/'), $filename);
            $data['image']= $filename;
            $data['created_by']= $request->email ;
            $data['path']= public_path('public/Image/vodafone/').$filename ;
            $data['status']= 'pending' ;
            $data['type']= 'vodafone' ;
        }
        $data->save();

        if($data->save()){
            return redirect()->back()->with('success','تم إرسال الصورة للمختصين للمراجعة.');

        }

        return redirect()->back();

    }
}
