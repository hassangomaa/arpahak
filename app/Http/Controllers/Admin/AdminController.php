<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Link;
use App\Models\ShareUS;
use App\Models\User;
use App\Models\trade;
use App\Models\UserService;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index(){
        $count_users= User::count() + 1000;
        ;
        $images = Image::all()->count();
        $orders = UserService::all()->count();
        $trades = trade::all()->count();
        return view('admin.dashboard',compact('count_users','images','orders','trades'));
    }



    public function users(){
        $users = User::where('role_id','=',2)->get();
        return view('admin.pages.users.users',compact('users'));
    }

    public function users_charge(){
        $users = User::where('role_id','=',2)->get();
        return view('admin.pages.users.charge',compact('users'));
    }
  public function users_charge_update(Request $request){
//        dd($request);

//        $user = User::find($id);
        $Views = User::find($request->id)->increment('balance',$request->balance);

//      $user->id=$request->id ;
//        $user->balance->inc=$request->balance ;
//        $user->save();

        return redirect()->back()->with('success','تم اﻻيداع بنجاح, شكرا لكم.');
    }



    public function addTasks(){
        return view('admin.pages.task.addTasks');
    }



    public function addNewTask(Request $request){

        $this->validate($request,[
           'link_name' => 'required|string',
            'link_url' => 'required|string',
            'link_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        $task = new Link;
        $task->link_name = $request->link_name;
        $task->link_url = $request->link_url;
        $task->link_price = $request->link_price;
        $task->link_type = $request->link_type;
        $task->save();



        return redirect()->back()->with('success','تم اضافة المهمة');
    }



    public function showMessages(){
        $messages = ShareUS::select('id','guest_first_name','guest_last_name','guest_phone','guest_email','message')->get();
        return view('admin.pages.message.showMessages',compact('messages'));
    }


    public function filterMessagesByDate(Request $request)
    {
        $this->validate($request,[
            'from' => 'required|date',
            'to' => 'required|date',
        ]);

        $from = $request->from;

        $to = $request->to;

        $messages = ShareUS::whereBetween('created_at',[$from,$to])
                            ->get();


        return view('admin.pages.message.showMessages', compact('messages'));

    }



    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }


    public function confirmImages(){
        $all_images = Image::where('confirmed','=',0)->get();
        return view('admin.pages.images.index',compact('all_images'));
    }

    public function approvedImage($id){

            DB::table('images')
            ->where('id',$id)
            ->update([
                'confirmed' => 1
            ]);

        session() -> flash('success', trans('تم السماح للصورة بالعرض.'));
        return redirect() -> route('confirm.images');
    }
}
