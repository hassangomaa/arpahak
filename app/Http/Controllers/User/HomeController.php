<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ServiceCategoryController;
use App\Models\Count_Click;
use App\Models\Link;
use App\Models\Metal;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\DB;


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

        return view('users.home');
    }



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


//public function myDeals(){
//        // التداول هو عنصر من   السيرفس كاتيجوري
//    // السيرفس تايب بيع / شراء دهب نحاس المنيوم 6 عنصر ك ادمن
////        $user_deals =  DB::table('service_types')->where('category_id',6);
////        $user_deals =  ServiceType::where('category_id','=',6)->get();
//
//
//
//    ///NOTE :
//    ///     get the metal  from service_types where category_id = 6 from Services to connect price/quantitiy...
//    $user_deals =  Service::where('service_type_id','=',7)->get();
//
//
//
//
//
//        return view('users.pages.deals.index',compact('user_deals'));
//    }






}
