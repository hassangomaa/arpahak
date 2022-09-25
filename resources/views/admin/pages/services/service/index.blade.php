@extends('admin.layouts.master')
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
                            <th>الأسم</th>
                            <th>النوع</th>
                            <th>تعديل</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td>{{$s->name}}</td>
                                <td>
                                    <?php
                                        foreach ($types as $t)
                                            if($t->id == $s->service_type_id)
                                                echo $t->type
                                            ?>
                                </td>
    
                                
    
                                <td>
    
                                    <input type="hidden" name="link_id" value='link_id'>
                                    <a href="{{route('edit.service',$s->id)}}" class="btn btn-info" name="edit" value="edit"><i class="bi bi-pencil"></i></a>
    
                                </td>
    
                                <td>
    
                                    <a href="{{route('destroy.service',$s->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="bi bi-trash"></i></a>
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

