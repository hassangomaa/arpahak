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
    {//        $url= "https://www.kitco.com/texten/texten.html";
////        $id = substr($url, strpos($url, '-ID')+3, (strpos($url, '.htm')-strpos($url, '-ID')-3));
//        $html = file_get_html($url);
//        dd($html);
//        die();
//
//        $result=[];
//        $result['title'] = trim($html->find('h1.brkword')[0]->plaintext);
//        $result['user'] = trim($html->find('span.color-5')[0]->plaintext);
//        $result['location'] = trim($html->find('strong.c2b')[0]->plaintext);
//        try{
//            $content = file_get_contents(OLXscraper::$ajaxPhone.$id);
//            $result['phone'] = preg_replace('/[^0-9,]|,[0-9]*$/','', json_decode($content, true)['value']);
//        }
//        catch(Exception $e){
//            $result['phone'] = null;
//        }
//

        $images = Image::where('user_id', Auth::id())->get()->count();
        $trades = trade::where('user_id', Auth::id())->get()->count();
        $payments = Payment::where('payment_status','bag')->get();
        $bag =0;
        return view('users.dashboard',compact('images','trades','payments','bag'));
    }

    public function dashboard()
    {
        $images = Image::where('user_id',Auth::id()) ->count();
        $payments = Payment::all();
        $bag = 0;
        return view('users.dashboard',compact('images','payments','bag'));
    }
  public function bag()
    {

        $payments = Payment::where('payment_status','bag')->get();
        return view('users.bag',compact(  'payments'));    }



    public function logout(Request $request)
    {
//        dd($request);
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
