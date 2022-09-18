<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthenticationController extends Controller
{
    public function adminLogin(){
        return view('admin.auth.adminLogin');
    }



    public function checkAdminLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.dashboard');
        }
        return back()->withInput($request->only('email','password'));
    }
}
