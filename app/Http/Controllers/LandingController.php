<?php

namespace App\Http\Controllers;

use App\Models\CompetitionMessage;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function team(){
        return view('pages.team');
    }

    public function privacyAndPolicy(){
        return view('pages.privacy_policy');
    }
}
