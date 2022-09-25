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
        $categories_names = ServiceCategory::select('category_id','name')->get();
        return view('users.pages.orders.create',compact('categories_names'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'service_id'=>'integer|required',
            'attachment'=>'integer|required',
        ]);
        $newService = new UserService();
        $newService->service_id = $request->service_id;
        $newService->user_id = Auth::id();
        $newService->attachment = $request->attachment;
        $newService->paid_money = 50;
        $newService->remain_money = 0;
        $newService->status = "قيد التنفيذ";
        $newService->save();
        return redirect()->back()->with('success','تم أضافة الطلب بنجاح.');

        


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
