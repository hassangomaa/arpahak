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
                            <th>نوع الخدمه</th>
                            <th> رقم المستخدم</th>
                            <th>الكمية</th>
                            <th>الحاله</th>
                            <th>  موافقه</th>
                            <th>  رفض</th>
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
                            <td><a class="btn btn-success btn-sm" href="{{route('AcceptOrder',$order->id)}}" role="button">موافقه</a></td>
                            <td><a class="btn btn-danger btn-sm" disabled href="{{route('DeclineOrder',$order->id)}}" role="button">رفض</a></td>




                            
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

