<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{


    public function index()
    {
        $tasks = link::get();
        return view('admin.pages.task.allTasks',compact('tasks'));
    }

    public function edit($id){

        $link = Link::where('link_id',$id)->get();
        return view('admin.pages.task.editTasks',compact('link'));
    }




    public function update(Request $request, $id){

        $request -> validate([
            'link_name' => 'required',
            'link_url' => 'required|string',
            'link_price' => 'required|numeric',

        ]);
         DB::table('links')
            ->where('link_id', (int)$id)
            ->update([
                'link_name'=>$request->link_name,
                'link_url' =>$request->link_url,
                'link_price'=>$request->link_price,
            ]);


        session() -> flash('success', trans('تم تعديل المهمة'));
        return redirect() -> route('task.edit',(int)$id);
    }


    public function destroy($id){

        Link ::where('link_id', $id) -> delete();
        session() -> flash('success', trans('تم حذف المهمة'));
        return redirect() -> route('all.tasks');
    }
}
