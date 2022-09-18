<?php

namespace App\Http\Controllers;

use App\Models\CompetitionMessage;
use Illuminate\Http\Request;

class CompetitionMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = CompetitionMessage::all();
        return view('admin.pages.competitions.messages.index',compact('messages'));
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
            'phone'=>'required',
            'email'=>'string|required',
            'id'=>'required',
            'message'=>'string|required',
        ]);

        $message = new CompetitionMessage();
        $message->first_name = $request->first_name;
        $message->last_name = $request->last_name;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->competition_id = $request->id;
        $message->details = $request->message;
        $message->save();

        if($message->save()){
            return redirect()->route('show.competitions')->with('success','تم ارسال الحل للمختصين لمراجعته وسيقوم أحد ممثلي خدمة العملاء بالتواصل معك.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompetitionMessage  $competitionMessage
     * @return \Illuminate\Http\Response
     */
    public function show(CompetitionMessage $competitionMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompetitionMessage  $competitionMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(CompetitionMessage $competitionMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompetitionMessage  $competitionMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompetitionMessage $competitionMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompetitionMessage  $competitionMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompetitionMessage::where('id',$id)->delete();
        session() -> flash('success', trans('تم حذف الرسالة.'));
        return redirect() ->back();

    }
}
