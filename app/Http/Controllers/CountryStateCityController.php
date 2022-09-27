<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\{Country,State,City};

class CountryStateCityController extends Controller
{

    public function index()
    {
        $data['countries'] = Country::get(["name","id"]);
        return view('country-state-city',$data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = \App\Models\city::where("country_id",$request->country_id)
            ->get(["name","id"]);
        return response()->json($data);
    }
//    public function getCity(Request $request)
//    {
//        $data['cities'] = City::where("state_id",$request->state_id)
//            ->get(["name","id"]);
//        return response()->json($data);
//    }

}
