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
        //
    }

////User ONLY!
    public function addMetal($id)
    {
        //
        $metal = Metal::find($id);
//        $metal->std()->sync(auth()->user()->id);///Store The Enroll process

        return redirect('users.pages.deals');
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
    public function destroy(Metal $metal)
    {
        //
    }
}
