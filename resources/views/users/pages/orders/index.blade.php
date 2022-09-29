@extends('users.layout.master')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
<main class="main" id="main" >
    <div class="container" dir="rtl">
      <section class="section register d-flex flex-column align-items-center justify-content-center pb-4">
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
                            <th scope="col" style="width: 10px">المسلسل</th>
                            <th scope="col">نوع الخدمه</th>
                            <th scope="col">الكمية</th>
                            <th scope="col">الحاله</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td scope="row">{{$order->id}}</td>
                            <td>
                                <?php
                                    foreach ($services as $s)
                                        if($s->id == $order->service_id)
                                            echo $s->name
                                        ?>
                            </td>
                            <td>{{$order->attachment}}</td>
                            @if($order->status == 'تم القبول')
                                <td><button class="btn btn-success" style="size:30px" value="تم القبول"> {{$order->status}}</button>  </td>
                            @else
                                <td><button class="btn btn-warning">{{$order->status}} </button> </td>
                            @endif

                            
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