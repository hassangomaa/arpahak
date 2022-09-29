<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\trade;
use Illuminate\Http\Request;
use App\Models\Metal;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TradeController extends Controller
{
    public function index()
    {
        $trades = trade::where('user_id', Auth::id())->get();
        $metals = Metal::all();
        return view('users.pages.deals.index',compact('trades','metals'));
    }

    public function pendingTrades()
    {
        $trades = trade::all();
        $metals = Metal::all();
        return view('admin.pages.deals.index',compact('trades','metals'));
    }

    public function availableTrades()
    {
        $trades = trade::all();
        $metals = Metal::all();
        return view('users.pages.deals.avilable',compact('trades','metals'));
    }

    public function addPayment(Request $request,$id)
    {

        $this->validate($request,[
            'email'=>'required',
                ]);
        $trade = trade::find($id);
//        dd($trade);
//
                    Payment::create(
                       [
                            'payment_id' =>  Str::uuid()->toString(),
                            'payer_id'   => Auth::id(),
                            'payer_email'  => $request->email,
                            'amount'    => (int) $trade->commission * $trade->quantity ,
                            'currency'  => $trade->currency,
                            'payment_status'  =>    "في اﻻنتظار",

                        ]
                    );
        return redirect()->back()->with('success','تم اضافه طلبكم بنجاح, سيقوم احد ممثلينا بالتواصل معكم. شكرا ﻻستخدامكم ارباحك');
    }

    public function acceptTrades($id)
    {
        $trade = trade::find($id);
        $trade->status = 1 ;
        $trade->save();
        return redirect()->back();
    }
    public function declineTrades($id)
    {
        $trade = trade::find($id);
        $trade->delete();
        return redirect()->back();
    }



    public function create()
    {
        $metals = Metal::all();
        return view('users.pages.deals.create',compact('metals'));
    }

    public function store(Request $request)
    {
//        $re = "re";
//        dd($re);
        $this->validate($request,[
            'trade_type'=>'required',
            'description'=>'string|required',
            'url'=>'string|required',
            'quantity'=>'required',
            'commission'=>'required',
            'currency'=>'string|required',
            'metal_id'=>'numeric|required',
        ]);
        
        trade::create(
            [
                'description' => $request->description,
                'link'   => $request->url,
                'quantity'  => $request->quantity,
                'commission'    => $request->commission,
                'currency'  => $request->currency,
                'metal_type'  =>    $request->metal_id,
                'trade_type' => $request->trade_type,
                'user_id'   => Auth::id(),
                'status'    => 1,
            ]
            );
        return redirect()->back();
    }


}