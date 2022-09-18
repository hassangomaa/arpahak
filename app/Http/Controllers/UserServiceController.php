<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\UserService;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{

    public function index()
    {
         // التداول هو عنصر من   السيرفس كاتيجوري
        // السيرفس تايب  دهب نحاس المنيوم
        //السيرفس نفسها بيع / شراء سعر و كميه و ....

//        $user_deals =  DB::table('service_types')->where('category_id',6);
//        $user_deals =  ServiceType::where('category_id','=',6)->get();
        ///NOTE :
        ///     get the metal  from service_types where category_id = 6 from Services to connect price/quantitiy...
//        $user_deals =  Service::where('service_type_id','=',7)->get();
        $user_deals =  Service::all();
        return view('users.pages.deals.index',compact('user_deals'));
     }


    public function create()
    {
        return view('users.pages.orders.create');
    }


    public function BuyForm($id)
    {

         $data =  Service::find($id);
//         dd($data);
        return view('users.pages.deals.BuyForm',compact('data'));

    }

    public function SellForm($id)
    {

        $user_deals =  Service::where('service_type_id','=',$id)->get();

        return view('users.pages.deals.SellForm',compact('user_deals'));
    }


    public function BuyStore(Request $request)
    {

        return "HOLAA!";


        dd($request);


        $this->validate($request,[
//            'first_name'=>'string|required',
//            'last_name'=>'string|required',
//            'phone'=>'required',
//            'email'=>'string|required',
//            'id'=>'required',
//            'message'=>'string|required',
        ]);

        $message = new UserService  ();
        $message->id = $request->id;
        $message->service_id = $request->service_id;
//        $message->attachment= $request->attachment;//image
        $message->paid_money = $request->paid_money;
        $message->remain_money = $request->remain_money;
        $message->status = $request->status;
        $message->save();

        if($message->save()){
            return redirect()->back()->with('success','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');
        }
    }



    public function SellStore(Request $request)
    {

//        return "HOLAA!";


//        dd($request);


        $this->validate($request,[
//            'first_name'=>'string|required',
//            'last_name'=>'string|required',
//            'phone'=>'required',
//            'email'=>'string|required',
//            'id'=>'required',
//            'message'=>'string|required',
        ]);

        $message = new UserService();
        $message->id = $request->id;
        $message->service_id = $request->service_id;
//        $message->attachment= $request->attachment;//image
        $message->paid_money = $request->paid_money;
        $message->remain_money = $request->remain_money;
        $message->status = $request->status;
        $message->save();

        if($message->save()){
            return redirect()->back()->with('success','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');
        }    }


    public function store(Request $request)
    {

//        return "HOLAA!";
//
//
//        dd($request);


        $this->validate($request,[
//            'first_name'=>'string|required',
//            'last_name'=>'string|required',
//            'phone'=>'required',
//            'email'=>'string|required',
//            'id'=>'required',
//            'message'=>'string|required',
        ]);

        $message = new UserService();
        $message->id = $request->id;
        $message->service_id = $request->service_id;
//        $message->attachment= $request->attachment;//image
        $message->paid_money = $request->paid_money;
        $message->remain_money = $request->remain_money;
        $message->status = $request->status;
        $message->save();

        if($message->save()){
            return redirect()->back()->with('success','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');
        }
    }

    public function show(UserService $userService)
    {

    }


    public function edit(UserService $userService)
    {

    }


    public function update(Request $request, UserService $userService)
    {

    }


    public function destroy(UserService $userService)
    {

    }
}
