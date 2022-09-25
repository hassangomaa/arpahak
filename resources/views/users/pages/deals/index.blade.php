@extends('users.layout.master')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
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
                            <th>نوع المعدن</th>
                            <th> الوصف</th>
                            <th>الرابط</th>
                            <th>الكمية</th>
                            <th>  الحاله</th>
                            <th>  العموله</th>
                            <th>  العملة</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($trades as $trade)
                        <tr>
                            <td>{{$trade->id}}</td>
                            <td>
                                @if ($trade->trade_type == 1)
                                بيع
                                @endif
                                @if ($trade->trade_type == 2)
                                شراء
                                @endif
                            </td>
                            <td>
                                <?php
                                    foreach ($metals as $m)
                                        if($trade->metal_type == $m->id)
                                            echo $m->name
                                        ?>
                            </td>
                            <td>{{$trade->description}}</td>
                            <td><a href="{{$trade->link}}">الرابط</a></td>
                            <td>{{$trade->quantity}}</td>
                            <td>{{$trade->status}}</td>
                            <td>{{$trade->commission}}</td>
                            <td>{{$trade->currency}}</td>



                            
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

