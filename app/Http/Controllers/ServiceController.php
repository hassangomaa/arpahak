<?php

namespace App\Http\Controllers;

use App\Models\UserService;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $types = ServiceType::all();
        return view('admin.pages.services.service.index',compact('services','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories_names = ServiceCategory::select('category_id','name')->get();
        
        return view('admin.pages.services.service.create',compact('categories_names'));
    }

    public function GetCategoryTypes($CatId)
    {
        $types = ServiceType::where('category_id','=',$CatId)->get();
        return response()->json([
            'types' => $types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'string|required',
            'type_id'=>'integer|required',
            'descrption'=>'string|required',
            'url'=>'string|required',
            'quantity'=>'integer|required',
            'net_price'=>'integer|required',
            'commission'=>'integer|required',
            'currency'=>'string|required',
        ]);
        #dd($service);
        $newService = new Service();
        $newService->name = $request->name;
        $newService->service_type_id = $request->type_id;
        $newService->description = $request->descrption;
        $newService->url = $request->url;
        $newService->quantity = $request->quantity;
        $newService->net_price = $request->net_price;
        $newService->commission = $request->commission;
        $newService->currency = $request->currency;
        $newService->save();
        return redirect()->back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        //show all services
        $data = Service::all();
        return view('admin.pages.deals.index',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service =  Service::find($id);
        return view('admin.pages.services.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Service =  Service::find($id);
        #dd($Service);
        $this->validate($request,[
            'name'=>'required',
            'descrption'=>'required',
            'quantity'=>'required',
            'url' => 'required',
            'net_price'=>'required',
            'commission'=>'required',
            'currency'=>'required',
        ]);
        $Service->name = $request->name;
        $Service->description = $request->descrption;
        $Service->url = $request->url;
        $Service->quantity = $request->quantity;
        $Service->net_price = $request->net_price;
        $Service->commission = $request->commission;
        $Service->currency = $request->currency;
        $Service->save();
        return redirect()->back()->with('success','تم تعديل الخدمه بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        session() -> flash('success', trans('تم حذف الخدمه بنجاح'));
        return redirect()->back();
    }

    public function ShowOrders()
    {
        $orders = UserService::where('status','pending')->get();
        $services = Service::all();
        return view('admin.pages.services.service.orders',compact('orders','services'));
    }

    public function ShowAcceptedOrders()
    {
        $orders = UserService::where('status','Accepted')->get();
        $services = Service::all();
        return view('admin.pages.services.service.done-orders',compact('orders','services'));
    }

    public function ShowDeclinedOrders()
    {
        $orders = UserService::where('status','Declined')->get();
        $services = Service::all();
        return view('admin.pages.services.service.done-orders',compact('orders','services'));
    }

    public function AcceptOrder($id)
    {
        $order = UserService::find($id);
        $order->status = 'Accepted';
        $order->save();
        return redirect()->back()->with('success','تم الموافقه  بنجاح.');

    }
    public function DeclineOrder($id)
    {
        $order = UserService::find($id);
        $order->status = 'Declined';
        $order->save();
        return redirect()->back()->with('success','تم الرفض  بنجاح.');

    }
    

}
