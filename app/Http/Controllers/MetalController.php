<?php

namespace App\Http\Controllers;

use App\Models\Metal;
use Illuminate\Http\Request;

class MetalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metals = Metal::all();
        return view('admin.pages.deals.metals.index',compact('metals'));
    }

////User ONLY!
    public function addMetal()
    {
        return view('admin.pages.deals.metals.create');
    }
    public function storeMetal(Request $request)
    {
        $this->validate($request,[
            'metal_name'=>'required',
            'sell_price'=>'required',
            'buy_price'=>'required',
        ]);
        Metal::create(
            [
                'name' => $request->metal_name,
                'sell_price' => $request->sell_price,
                'buy_price' => $request->buy_price,
            ]
            );
        return redirect()->back();
    }
    
    public function editmetalpage($id)
    {
        $metal = Metal::find($id);
        return view('admin.pages.deals.metals.edit',compact('metal'));
    }
    public function editMetal($id,Request $request)
    {
        $this->validate($request,[
            'metal_name'=>'required',
            'sell_price'=>'required',
            'buy_price'=>'required',
        ]);
        $metal = Metal::find($id);
        $metal->name = $request->metal_name;
        $metal->sell_price = $request->sell_price;
        $metal->buy_price = $request->buy_price;
        $metal->save();
        return redirect()->route('show.metal');
    }
    
    public function destroy($id)
    {
        $metal = Metal::find($id)->delete();
        return redirect()->back();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function show(Metal $metal)
    {
        //
        $metals = ServiceCategoryController::all();
        return view('deals',compact('metals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function edit(Metal $metal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metal $metal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    
}