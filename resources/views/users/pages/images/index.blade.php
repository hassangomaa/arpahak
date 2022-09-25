@extends('users.layout.master')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
<main class="main" id="main" >
    <div class="container" dir="rtl">
      <section class="section register  d-flex flex-column align-items-center justify-content-center pb-4">
        <div class="container">
            
            <div class="row p-2">
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
    
                  
    
                  <div class="card-body pt-4">
                    
                    <table class="table text-center" style="
                    overflow-x: auto;
                    white-space: nowrap;vertical-align: middle;">
                        <thead>
                        <tr>
                            <th style="width: 10px">المسلسل</th>
                            <th>العنوان </th>
                            <th>السعر </th>
                            <th> الرابط</th>
                            <th>الحالة</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                        <tr>
                            <td>{{$image->id}}</td>
                            <td>{{$image->title}}</td>
                            <td>{{$image->price}}</td>
                            <td><a href="{{asset('public/Image/'.$image->image)}} "target="_blank">الرابط</a></td>
                            <td>@if ($image->confirmed==0)
                                قيد الانتظار
                            @endif
                            @if ($image->confirmed==1)
                                مقبول
                            @endif
                            @if ($image->confirmed==2)
                                مرفوض
                            @endif
                            </td>
                            <td><a href="{{route('delete.image',$image->id)}}" class="btn btn-danger" name="edit" value="edit"><i class="bi bi-trash"></i></a></td>

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

