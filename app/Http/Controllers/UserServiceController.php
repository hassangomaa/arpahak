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
        $data =  UserService::all();
        return view('users.pages.deals.index',compact('user_deals','data'));
     }


    public function create()
    {
        return view('users.pages.orders.create');
    }


    public function BuyForm(Request $request)
    {

//        dd($request);

//         $data =  Service::find($request->id);
         $data =  Service::find($request->id);


        return view('users.pages.deals.BuyForm',compact('data'));

    }

    public function SellForm()
    {
//            $data =  Service::where('service_type_id','=',$id)->get();
//        return view('users.pages.deals.SellForm',compact('data'));
        $data = Service::all();
        $service =  ServiceType::select('type','status')->where('category_id','=', 6)->get();
/*ADD IMAGE
 * $data= new Service();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
*/
        return view('users.pages.deals.SellForm',compact('service','data'));
    }


    public function BuyStore(Request $request)
    {

//        return "HOLAA!";


//        dd($request);

        UserService::create($request->validate([
            'user_id'=>'string|required',
            'service_id'=>'numeric|required',
            'attachment'=>'string|required',
            'paid_money'=>'string|required',
            'remain_money'=>'numeric|required',
        ]));
        return redirect()->back()->with('success_message','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');

    }



    public function SellStore(Request $request)
    {
        UserService::create($request->validate([
            'user_id'=>'string|required',
            'service_id'=>'numeric|required',
            'attachment'=>'string|required',
            'paid_money'=>'string|required',
            'remain_money'=>'numeric|required',
        ]));
        return redirect()->back()->with('success_message','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');
    }


    public function store(Request $request)
    {

            return redirect()->back()->with('success','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');

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
