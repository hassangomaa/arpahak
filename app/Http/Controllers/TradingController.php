<?php

namespace App\Http\Controllers;

use App\Models\Metal;
use Illuminate\Http\Request;

class TradingController extends Controller
{
    public function index(){

        $gold = Metal::where('name','ذهب')->get();
        $silver = Metal::where('name','فضه')->get();
        $alm = Metal::where('name','الالمونيوم')->get();
        return view('trading1',compact('gold','silver','alm'));
    }
}
