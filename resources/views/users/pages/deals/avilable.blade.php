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
                            <th>الكمية</th>
                            <th>سعر الشراء </th>
                            <th>سعر  البيع </th>
                            <th>  العملة</th>
                            <th>  شراء</th>

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
                            <td>{{$trade->quantity}}</td>
                            <td>
                              <?php
                                  foreach ($metals as $m)
                                      if($trade->metal_type == $m->id)
                                          echo $m->buy_price
                                      ?>
                            </td>
                            <td>
                              <?php
                                  foreach ($metals as $m)
                                      if($trade->metal_type == $m->id)
                                          echo $m->sell_price
                                      ?>
                            </td>
                            <td>{{$trade->currency}}</td>
                            <td>
{{--                                <a href="#" data-bs-toggle="modal" data-bs-target="#test{{$trade->id}}"--}}
{{--                                   class="btn btn-success" >شراء</a>--}}

                            <form method="post" action="{{route('trades.store',$trade->id)}}">
                            @csrf
                                <input hidden type="text" name="balance" value="{{Auth::user()->balance}}">
                                <input hidden type="text" name="email" value="{{Auth::user()->email}}">
                                <input type="submit" class="btn btn-warning" value=" تأكيد $">
                            </form>

                            </td>

                        </tr>
                        <!-- Modal -->
{{--                        @if(Auth::user()->balance <= $m->buy_price)--}}
{{--                        <div class="modal fade" dir="rtl" id="test{{$trade->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <h4 class="text-center">اختر احدي طرق الدفع</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 mb-3">--}}
{{--                                              <a class="btn btn-primary col-12" href="{{route('paypal-form',$trade->id)}}" style="background: #F2BA36; border:none;" role="button">--}}
{{--                                                     <img src="{{asset('images/payments-logo/paypal.png')}}" width="20%" class="me img-fluid" alt=""></a>--}}
{{--                                             </div>--}}
{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <a class="btn btn-primary col-12" style="background: white; border-color:black;" href="{{route('vodafone-cash',$trade->id)}}" role="button"><img src="{{asset('images/payments-logo/vodafone.PNG')}}" width="20%" class="img-fluid" alt=""></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <a class="btn btn-primary col-12" style="background: white; border-color:black;" href="{{route('bank-transfer',$trade->id)}}" role="button"><img src="{{asset('images/payments-logo/NBE.svg')}}" width="20%" class="img-fluid" alt=""> </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @else--}}
{{--                            <form method="post" action="{{route('trades.store',$trade->id)}}">--}}
{{--                                @csrf--}}
{{--                            <div class="modal fade" dir="rtl" id="test{{$trade->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <h4 class="text-center">تاكيد الشراء و خصم مبلغ ..... من رصيدك</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 mb-3">--}}
{{--                                                <a class="btn btn-primary col-12" style="background: white; border-color:black;" href="" role="button">--}}
{{--                                                    <img src="" width="20%" class="img-fluid" alt=""> </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <input hidden type="text" name="balance" value="{{Auth::user()->balance}}">--}}
{{--                                        <input hidden type="text" name="email" value="{{Auth::user()->email}}">--}}
{{--                                        <input type="submit" class="btn btn-danger" value=" تأكيد $">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            </div>--}}
{{--                            </form>--}}

{{--                            --}}{{--                            <script> alert(111)</script>--}}

{{--                        @endif--}}

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
@if(\Session::has('error'))
    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
    {{ \Session::forget('error') }}
@endif
@if(\Session::has('success'))
    <div class="alert alert-success">{{ \Session::get('success') }} </div>
    <div class="alert alert-success">{{ \Session::get('proc_id') }} رقم العمليه : </div>
    <div class="btn btn-warning" type="submit">
        <a href="{{route('bag')}}">الذهاب الي حقيبه المشتريات</a>
    </div>
{{--    {{ \Session::forget('success') }}--}}
@endif
@endsection

