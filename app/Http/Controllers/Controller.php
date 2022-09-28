<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Metal;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $wordlist = User::count() + 1000;
        return view('index',compact('wordlist'));
    }
    public function home(){
        $wordlist = User::count() + 1000;
        return view('home',compact('wordlist'));
    }
    public function services(){
        return view('services');
    }
    public function trading(){
        $metal = Metal::all();
        return view('trading1',compact('metal'));
    }
}
