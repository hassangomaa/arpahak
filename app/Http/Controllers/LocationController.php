<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{

    public function getCities($id)
    {
//        dd($id);
        $cities = DB::table('cities')->where('country_id', $id)->get();
        return response()->json($cities);
    }

}
