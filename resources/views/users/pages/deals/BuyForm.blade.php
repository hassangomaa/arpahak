@extends('users.layout.app')
@section('content')
    <br>
    <div class="container">
        <style>
            .container{
                margin-left: 3000px;
            }
            .card-primary:not(.card-outline)>.card-header {
                background-color: #e9ecef;
                border-bottom: 0;
            }
        </style>
        <h3 class="card-title-left" style="color:black">تفضل بالشراء  </h3>
        <!-- general form elements -->

                      <form method="POST"  action="{{route('user.buy.store')}}">
                         @csrf
                          <div class="card card-success">
                              <div class="card-header">
                          <div class="card-body">
                             <span class="text-dark fw-bold">  نوع العمليه : {{$data->name}}  </span>
                              <br>

                              <span class="text-dark fw-bold">   الوصف : {{$data->description}}  </span>
                              <br>
                              <span class="text-dark fw-bold">     نوع المعدن : {{$data-> serviceType->type}}  </span>
                              <br>
                              <span class="text-dark fw-bold">   الكميه : {{$data->quantity}}  </span>
                              <br>
                              <span class="text-dark fw-bold"> اللينك : <a href="{{$data->url}}">    {{$data->url}} </a> </span>

                              <br>
                              <span class="text-dark fw-bold"> العمله : {{$data->currency}} </span>
                              <br>
                              <span class="text-dark fw-bold">  تاريخ نشر التداول : {{$data->created_at}}  </span>
                              <br>

                              <span class="text-dark fw-bold"> الصوره : ## </span>
                              <br>
                              <div class=" col-lg-5 mb-lg-0 mb-2 ms-0 photo">
                              <img  src="https://d1b3667xvzs6rz.cloudfront.net/2019/03/gold-bullion.jpg"
                                   alt="" class="w-100 h-100">
                              </div>
                               <span class="text-dark fw-bold">   المطلوب : {{$data->net_price}}  </span>
                              <br>

                               <span class="text-dark fw-bold">   المتبقي من الرصيد بعد الشراء : {{ Auth::user()->balance - $data->net_price }}  </span>

                          <br>
                          <!--
                            'user_id'=>'string|required',
                            'service_id'=>'numeric|required',
                            'attachment'=>'string|required',
                            'paid_money'=>'string|required',
                            'remain_money'=>'numeric|required',
                          -->
                          <input hidden name="user_id" value="{{Auth::user()->id}}">
                          <input hidden name="service_id" value="{{$data->id}}">
                          <input hidden name="attachment" value="N/A*">
                          <input hidden name="paid_money" value="{{$data->net_price}}">
                          <input hidden name="remain_money" value="{{ Auth::user()->balance - $data->net_price }}">
                        <input type="submit" class="btn-default" value="موافقة شراء !">
                          </div>
                              </div>
                          </div>

                      </form>
        </div>
            <div class="col-md-12 mt-2">
               @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
               @endif
             </div>
        </div>
        </div>
    </div>
@endsection

