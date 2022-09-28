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

    public function pay_page_charge()
    {

        return view('users.pages.payment.vodafone');
    }

    public function uploadFile(Request $request)
    {
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('uploads/vodafone/'), $filename);
            $data['image']= $filename;
            $data['created_by']= $request->email ;
            $data['path']= public_path('uploads/vodafone/').$filename ;
            $data['status']= 'في اﻻنتظار' ;
            $data['type']= 'فودافون كاش' ;
        }

        $data->save();

        return redirect()->back();

    }
}
