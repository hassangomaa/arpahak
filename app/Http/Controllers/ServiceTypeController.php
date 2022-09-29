<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceTypeController extends Controller
{

    public function index()
    {
        $types = ServiceType::all();
//        $categories_names = ServiceCategory::select('category_id','name')->get();
        $categories_names = ServiceCategory::all();
//        select('category_id','name')->get();
        return view('admin.pages.services.types.index',compact('types','categories_names'));
    }


    public function create()
    {
        $categories = ServiceCategory::select('category_id','name')->get();
        return view('admin.pages.services.types.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'type'=>'string|required',
            'category_id'=>'integer|required',
        ]);

        $service_type = new ServiceType();
        $service_type->type = $request->type;
        $service_type->category_id = $request->category_id;

        if($request->status){
            $service_type->status = $request->status;
        }
        elseif($request->home_page){
            $service_type->home_page = $request->home_page;
        }
        $service_type->save();

        return redirect()->back()->with('success','تم أضافة النوع بنجاح.');
    }


    public function show(ServiceType $serviceType)
    {
        //
    }


    public function edit($id)
    {
        $sub_categories = ServiceType::where('id',$id)->get();
        $category = ServiceCategory::all();
//        where('category_id',$id)->get();
        return view('admin.pages.services.types.edit',compact('sub_categories','category'));
    }


    public function update(Request $request, ServiceType $serviceType,$id)
    {
        //
//        dd($request);
                if ($request->status == null)
                    $request->status =0;

                if ($request->home_page == null)
                    $request->home_page =0;

                $request -> validate([
//            'category_id' => 'required',
//            'type' => 'required|string',
//            'status' => 'required',
        ]);
        DB::table('service_types')
            ->where('id', (int) $id )
            ->update([
                'category_id' =>  $request->category_id ,
                'type' =>  $request->type ,
                'status' =>  $request->status ,
                'home_page' =>  $request->home_page ,
            ]);
        return redirect()->back()->with('success_message','تم قبول طلب المستخدم');
     }


    public function destroy($id)
    {
        ServiceType::where('id',$id)->delete();
        session() -> flash('success', trans('تم حذف النوع بنجاح'));
        return redirect()->back();
    }
}
