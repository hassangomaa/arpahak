<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class vodafoneController extends Controller
{
    public function pay_page($id)
    {
        session(['prod_id' => $id]);
        return view('users.pages.payment.vodafone');
    }
}
