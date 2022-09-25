@extends('users.layout.master')
@section('content')
@include('admin.includes.head')
@include('admin.includes.sidebar')
<main class="main" id="main" >
    <div class="container" dir="rtl">
      <section class="section register  d-flex flex-column align-items-center justify-content-center pb-4">
        <div class="container">
            
            <div class="row">
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
    
                  
    
                  <div class="card-body pt-4">
                    
                    <table class="table text-center" style="
                    overflow-x: auto;
                    white-space: nowrap;vertical-align: middle;">
                        <thead>
                        <tr>
                            <th style="width: 10px">المسلسل</th>
                            <th> المهمة</th>
                            <th>الرابط</th>
                            <th>نوع المهمة</th>
                            <th>سعر المهمة</th>
                            <th>تعديل </th>
                            <th>حذف </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td><?php echo $task->link_id?></td>
                                <td><?php echo $task->link_name?></td>
                                <td><a href="<?php echo $task->link_url?>"target="_blank"> الرابط </a></td>
                                <td><?php echo $task->link_type?></td>
                                <td><?php echo $task->link_price?></td>
                    
                                <td>
                    
                                    <input type="hidden" name="link_id" value='link_id'>
                                    <a href="{{route('task.edit',$task->link_id)}}" class="btn btn-info" name="edit" value="edit"><i class="bi bi-pen"></i></a>
                    
                                </td>
                    
                                <td>
                    
                                        <a href="{{route('task.destroy',$task->link_id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="bi bi-trash"></i></a>
                                    </form>
                    
                                </td>
                            </tr>
                            
                        @endforeach
                    
                    
                        
                    
                    
                        </tbody>
                    </table>
                    
    
                  </div>
    
                </div>
              </div>
            </div>
            
            
        </div>
      </section>
    </div>
  </main><!-- End #main -->

@endsection

