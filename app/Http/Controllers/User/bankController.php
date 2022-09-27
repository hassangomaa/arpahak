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
            $file-> move(public_path('uploads/bank/'), $filename);
            $data['image']= $filename;
        }
        $data->save();

        return redirect()->back();

    }
}
