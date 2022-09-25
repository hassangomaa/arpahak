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
                        <tr class="text-center">
                            <th style="width: 10px">المسلسل</th>
                            <th style="width: 10px">رقم المستخدم</th>
                            <th> العنوان</th>
                            <th> السعر</th>
                            <th> الاعلان</th>
                            <th> موافقه</th>
                            <th> حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($ads as $ad)
                        <tr >
                            <td>{{$ad->id}}</td>
                            <td>{{$ad->user_id}}</td>
                            <td>{{$ad->title}}</td>
                            <td>{{$ad->price}}</td>
                            <td><a href="#">الاعلان</a></td>
                            <td><a href="{{route('admin.accept.ad',$ad->id)}}" class="btn btn-success" ><i class="bi bi-check2"></i></a></td>
                            <td><a href="#" class="btn btn-danger" ><i class="bi bi-trash"></i></a></td>
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

