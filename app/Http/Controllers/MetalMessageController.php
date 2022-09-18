<?php

namespace App\Http\Controllers;

use App\Models\MetalMessage;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetalMessageController extends Controller
{

    public function index()
    {
        $messages =UserService::all();
        return view('admin.pages.deals.messages.index',compact('messages'));
    }


    public function create()
    {
        //
        $data = Service::all();
        $service = ServiceType::all();
        return view('admin.pages.deals.create',compact('data','service'));

    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'string|required',
            'description'=>'string|required',
            'url'=>'string|required',
            'quantity'=>'numeric|required',
            'net_price'=>'numeric|required',
            'commission'=>'numeric|required',
            'currency'=>'string|required',
            'service_type_id'=>'numeric|required',
        ]);
//        dd($request);

//        $message = [];
//        $message->name = $request->name;
//        $message->description = $request->description;
//        $message->url = $request->url;
//        $message->quantity = $request->quantity;
//        $message->net_price = $request->net_price;
//        $message->commission = $request->commission;
//        $message->currency = $request->currency;
//        $message->service_type_id = $request->service_type_id;
            Service::create($request->all());
             return redirect()->route('show.metal.messages')->with('success','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');

    }


    public function show()
    {

    }


    public function edit()
    {
        //
    }


    public function update(Request $request, $id)
    {
//        dd($id);

        //go to user service and update status to
        //
        $request -> validate([
//            'category_id' => 'required',
//            'type' => 'required|string',
//            'status' => 'required',
        ]);
        DB::table('user_services')
            ->where('id', (int) $id )
            ->update([
                  'status' =>  'تم القبول' ,
            ]);
        return redirect()->back()->with('success_message','تم قبول طلب المستخدم');
    }


    public function destroy($id)
    {
//        dd($id);
        UserService::where('id',$id)->delete();
        return redirect()->back()->with('success','تم حذف الرسالة.');

    }
}
