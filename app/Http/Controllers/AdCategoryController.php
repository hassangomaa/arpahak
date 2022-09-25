<?php

namespace App\Http\Controllers;

use App\Models\ads_category;
use Illuminate\Http\Request;

class AdCategoryController extends Controller
{
    public function create()
    {
        return view ('admin.pages.ads.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'string|required',
        ]);
        $category = ads_category::create([
            'name'  => $request->name,
        ]);
        return redirect()->back()->with('success','تم أضافة القسم بنجاح.');
    }
}
