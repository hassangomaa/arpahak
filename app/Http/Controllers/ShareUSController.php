<?php

namespace App\Http\Controllers;

use App\Models\ShareUS;
use Illuminate\Http\Request;

class ShareUSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shareUs');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
           'first_name'=>'string|required',
            'last_name'=>'string|required',
            'phone'=>'string|min:11|required',
            'email'=>'string|required',
            'message'=>'string|required',

        ]);

        $message = new ShareUS();
        $message->guest_first_name = $request->first_name;
        $message->guest_last_name  = $request->last_name;
        $message->guest_email = $request->email;
        $message->guest_phone = $request->phone;
        $message->message = $request->message;
        $message->save();

//        if(){
//            return redirect()->back()->with('danger_message','تم إرسال فكرتك لكبار المتخصصين سيقوم احد ممثلي خدمة العملاء بالتواصل معك في اقرب وقت.');
//        }

        return redirect()->back()->with('success_message','تم إرسال فكرتك لكبار المتخصصين سيقوم احد ممثلي خدمة العملاء بالتواصل معك في اقرب وقت.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShareUS  $shareUS
     * @return \Illuminate\Http\Response
     */
    public function show(ShareUS $shareUS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShareUS  $shareUS
     * @return \Illuminate\Http\Response
     */
    public function edit(ShareUS $shareUS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShareUS  $shareUS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShareUS $shareUS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShareUS  $shareUS
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShareUS::where('id','=',$id)->delete();
        return redirect()->back()->with('success','تم حذف الرسالة.');

    }
}
