<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use voku\helper\ASCII;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competition = Competition::all();

        return view('admin.pages.competitions.index',compact('competition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.competitions.create');
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
            'title' => 'string|required',
            'description' => 'string|required',
            'price' => 'regex:/^\d+(\.\d{1,2})?$/|required',
            'time' => 'string|required',

            ]);
        $competition = new Competition;
        $competition->title = $request->title;
        $competition->description = $request->description;
        $competition->price = $request->price;
        $competition->time = $request->time;
        $competition->finished = 0;
        $competition->save();

        if($competition->save()){
            return redirect()->back()->with('success','تم اضافة المسابقة.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $competitions = Competition::all();
        return view('competitions',compact('competitions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competition = Competition::where('id',$id)->get();
        return view('admin.pages.competitions.edit',compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'time' => 'string|required',

        ]);
        DB::table('competitions')
            ->where('id', (int)$id)
            ->update([
                'title'=>$request->title,
                'description' =>$request->description,
                'price'=>$request->price,
                'time' => $request->time,
            ]);


//        session() -> flash('success', trans('تم تعديل المسابقة'));
        return redirect()->back()->with('success','تم تعديل المسابقة') ;
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $competition = Competition::where('id',$id)->delete();
        session() -> flash('success', trans('تم حذف المسابقة'));
        return redirect()->back();

    }


}
