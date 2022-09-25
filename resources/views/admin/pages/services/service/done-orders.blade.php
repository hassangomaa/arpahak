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
                    
                    <table class="table" style="
                    overflow-x: auto;
                    white-space: nowrap;">
                        <thead>
                        <tr>
                            <th style="width: 10px">المسلسل</th>
                            <th>نوع الخدمه</th>
                            <th> رقم المستخدم</th>
                            <th>الكمية</th>
                            <th>الحاله</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>
                                <?php
                                    foreach ($services as $s)
                                        if($s->id == $order->service_id)
                                            echo $s->name
                                        ?>
                            </td>
                            <td>{{$order->user_id}}</td>
                            <td>{{$order->attachment}}</td>
                            <td>{{$order->status}}</td>



                            
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

