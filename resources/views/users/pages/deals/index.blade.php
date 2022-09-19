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
        <h3 class="card-title-left" style="color:black">المتداول حاليا  </h3>
        <!-- general form elements -->
{{--                @dd($user_deals->services)--}}

                @foreach($user_deals->sortBy('net_price') as $t)
            <div class="card card-primary">
                <div class="card card-primary">
                    <div class="card-header">

                    <!--  User service -->
{{--                            <a href=""  class="link-success link text-decoration-none">--}}
{{--                                <div class="card mb-3 bg-success text-white fs-3">--}}
                    </div>
                                    <div class="card-body">
                                         <span class="text-dark fw-bold">  المسلسل : {{$t->id}}  </span>
                                        <br>
                                          <span class="text-dark fw-bold">  اﻻسم : {{$t->name}}  </span>
                                        <br>

                                         <span class="text-dark fw-bold">   الوصف : {{$t->description}}  </span>
                                        <br>

                                         <span class="text-dark fw-bold">     نوع المعدن : {{$t-> serviceType->type}}  </span>
                                        <br>
                                        <span class="text-dark fw-bold">   الكميه : {{$t->quantity}}  </span>
                                        <br>


                                         <span class="text-dark fw-bold">   اللينك : {{$t->url}}  </span>
                                        <br>

                                         <span class="text-dark fw-bold">   المطلوب : {{$t->net_price}}  </span>
                                        <br>

                                         <span class="text-dark fw-bold"> العمله : {{$t->currency}} </span>
                                        <br>

                                         <span class="text-dark fw-bold"> تاريخ نشر التداول : {{$t->created_at}} </span>
                                        <br>

                            </a>
                         <br>
{{--                                        <input hidden name="id" value="{{$t->id}}">--}}

                                        <form action="{{route('user.buy')}}" method="GET">
                                            @csrf
                                            <input hidden name="id"     value="{{$t->id}}">
                                            <button  class="btn btn-success" type="submit"   onclick="window.location.href='{{route('user.buy')}}'">  شراء </button>

                                        </form>

                                        <button class="btn btn-warning" onclick="window.location.href='{{route('user.sell')}}'">بيع</button>


{{--                    <form action="{{route('user.sell')}}" method="GET">--}}
{{--                        @csrf--}}
{{--                         <input  name="" type="submit" class="btn btn-danger" value="{{$t->id}}">--}}
{{--                    </form>--}}
                    </div>
                    </div>
                     </div>
{{--                 <div class="text-dark fw-bold">--}}

                @endforeach

            </div>
        </div>
    </div>

@endsection

