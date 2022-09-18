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
        $types = ServiceType::where('category_id',6)->get();
        $categories_names = ServiceCategory::select('category_id','name')->get();
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

//        dd("HELLO!");
        return redirect()->back()->with('success','تم أضافة النوع بنجاح.');
    }


    public function show(ServiceType $serviceType)
    {
        //
    }


    public function edit($id)
    {
//        $types = ServiceType::all();
        $categories_names = ServiceCategory::select('category_id','name')->get();
//        $sub_categories = ServiceType::where('id',$id)->get();
        $sub_categories = ServiceType::where('id',$id)->get();
        $category = ServiceCategory::where('category_id',$id)->get();
//        dd($categories_names); social/ tdaol
        return view('admin.pages.services.types.edit',compact('categories_names','sub_categories','category'));

    }


    public function update(Request $request, $id)
    {
        //
//            dd($request);
        $request -> validate([
            'category_id' => 'required',
            'type' => 'required|string',
            'status' => 'required',
        ]);
        DB::table('service_types')
            ->where('id', (int) $id )
            ->update([
                'type' =>      $request->type ,
                'category_id' =>        $request->category_id,
                'status' =>  $request->status ,
            ]);
        session() -> flash('success', trans('تم تعديل المسابقة'));

//        $types = ServiceType::all();
//        $categories_names = ServiceCategory::select('category_id','name')->get();
//        return view('admin.pages.services.types.index',compact('types','categories_names'));


          return redirect() -> route('edit.service.subCategory',(int)$id);
    }


    public function destroy($id)
    {
        ServiceType::where('id',$id)->delete();
        session() -> flash('success', trans('تم حذف النوع بنجاح'));
        return redirect()->back();
    }
}
