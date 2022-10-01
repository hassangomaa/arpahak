<?php

namespace App\Http\Controllers;

use App\Models\UserService;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Metal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserServiceController extends Controller
{

    public function index()
    {
        $orders = UserService::where('user_id', Auth::id())->get();
        $services = Service::all();
        return view('users.pages.orders.index',compact('orders','services'));
    }


    public function create()
    {
        $categories_names = ServiceCategory::all() ;
        $services_type = ServiceType::all();
        $services = Service::all();
        return view('users.pages.orders.create',compact('services','categories_names','services_type'));
    }
    public function order_type($id)
    {
//        dd($id);
        $cities = DB::table('service_types')->where('category_id', $id)->get();
        return response()->json($cities);
    }
    public function order_service($id)
    {
//        dd($id);
        $cities = DB::table('services')->where('service_type_id', $id)->get();
        return response()->json($cities);
    }


    public function store(Request $request)
    {
//        dd($request);
//        $this->validate($request,[
//            'service_id'=>'integer|required',
//            'attachment'=>'integer|required',
//        ]);
        $total_price =Service::find($request->services_id)->net_price;
        $remain =$request->user_balance - $total_price ;

        if ($remain < 0)//no enough
            return redirect()->back()->with('error', 'برجاء شحن مزيد من الرصيد, ثم اعد المحاوله!');

        else {
                User::find(Auth::id())->decrement('balance',$total_price);
                $newService = new UserService();
                $newService->service_id = $request->services_id;
                $newService->user_id = Auth::id();
                $newService->attachment = $request->quantity;
                $newService->paid_money = $total_price;
                $newService->remain_money = $remain;
                $newService->status = "pending";
                $newService->save();
                return redirect()->back()->with('success', 'تم أضافة الطلب الي قائمه اﻻنتظار, سيقوم احد ممثلينا بالتواصل معكم.');
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

    public function addTrade()
    {
        $metals = Metal::all();
        return view('users.pages.deals.create',compact('metals'));
    }
    public function GetServices($TypeId)
    {
        $services = Service::where('service_type_id','=',$TypeId)->get();
        return response()->json([
            'services' => $services,
        ]);
    }
}
