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
                            <th style="width: 10px">رقم المستخدم</th>
                            <th>العنوان </th>
                            <th>السعر </th>
                            <th> الرابط</th>
                            <th>موافقه</th>
                            <th>رفض</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                        <tr>
                            <td>{{$image->id}}</td>
                            <td>{{$image->user_id}}</td>
                            <td>{{$image->title}}</td>
                            <td>{{$image->price}}</td>
                            <td><a href="{{asset('public/Image/'.$image->image)}}" target="_blank">الرابط</a></td>
                            <td><a href="{{route('accept.image',$image->id)}}" class="btn btn-success" name="edit" value="edit"><i class="bi bi-check2"></i></a></td>
                            <td><a href="{{route('decline.image',$image->id)}}" class="btn btn-danger" name="edit" value="edit"><i class="bi bi-trash"></i></a></td>
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

