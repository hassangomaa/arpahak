<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Count_Click;
use App\Models\Link;
use App\Models\Payment;
use App\Models\User;
use App\Models\trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = Image::where('user_id', Auth::id())->get()->count();
        $trades = trade::where('user_id', Auth::id())->get()->count();
        $payments = Payment::where('payment_status','bag')->get();
        $bag =0;
        return view('users.dashboard',compact('images','trades','payments','bag'));
    }

    public function dashboard()
    {

        return view('users.dashboard');
    }
  public function bag()
    {

        $payments = Payment::where('payment_status','bag')->get();
        return view('users.bag',compact(  'payments'));    }



    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('index');
    }



    public function edit_password(){
        return view('users.pages.password.edit_password');
    }



    public function update_password(Request $request)
    {

        //Validation for request
        if(strlen($request['password']) < 8)
        {
            return redirect()->back()->with('danger_message','كلمة السر يجب ان لا تقل عن 8 احرف او ارقام');

        }elseif($request['password'] != $request['password_confirmation'])
        {
            return redirect()->back()->with('danger_message','حقل كلمةالسر و حقل التأكيد غير متطابقين');

        }else{
            $user = Auth::user();
            $user->password = Hash::make($request['password']);
            $user->save();

            if($user->save())
            {
                return redirect()->back()->with('success_message','تم تحديث البيانات');
            }

        }

    }



    public function balance(){
        return view('users.balance');
    }

    public function myTasks(){
        $user_tasks =  Link::all();
//        foreach ($user_tasks as $t)
//
//            $count_click = new Count_Click();
//            $count_click->link_id = $t->link_id;
//            $count_click->user_id = Auth::id();
//            $count_click->save();
//        if(->isEmpty()){
//            $isEmpty = true;
//        }

        return view('users.pages.tasks.index',compact('user_tasks'));
    }

    public function services()
    {
        return view('services');
    }
}
