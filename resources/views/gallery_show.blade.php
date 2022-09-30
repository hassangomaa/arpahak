@extends('layouts.app')
@section('content')
    @include('layouts.header')
     <style>
        body
        {
            background-color: #F4F4F2;
        }
        .row
        {
            margin-left: unset !important;
            margin-right: unset !important;
        }
        .footer
        {
            background-color: white !important;
            padding-top: 2.5rem !important;
            box-shadow: 0px 0px 15px 0px rgb(72 73 121 / 15%);
        }
    </style>

    <div class="container border " style="margin-top: 8rem;background-color:white; margin-bottom:4rem">
        <div class="row mt-3" style="padding: 1%" dir="ltr">
            <div class="col-lg-8 col-md-12 col-12 ad-container">
                <div class="row border rounded" style="border-color: black !important; background-color:black;  ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                                 <div class="carousel-item active ">
                                    <img src="{{asset('public/Image/'.$image->image)}}" height="468px" class="d-block w-100" alt="...">
                                </div>



                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="row mt-2 border rounded p-3 mb-2"style="border-color: black !important">
                    <div class="col-12 p-0">
                        <h4 class="text-center" style="letter-spacing: 0">title</h4>
                    </div>
                    <div class="col-12">
                        <h4 class="text-center" style="letter-spacing: 0">التفاصيل</h4>
                    </div>
                    <div class="col-6">
                    </div>
                    <div class="col-12 mb-4 ">
                        <div class="row" dir="rtl">
                            <div class="col-lg-6 col-sm-6 col-12">

                                <span style="color: black; font-weight:600;letter-spacing:0;">السعر  </span>
                                @if($image->price == 0)

                                    <h4 class="card-title" style="display: inline-block;float: left;letter-spacing:0;" dir="ltr" style="color: black;">مجانا </h4>
                                @else

                                    <h4 class="card-title" style="display: inline-block;float: left;" dir="ltr" style="color: black;">{{$image->price}} EGP</h4>

                                @endif

                            </div>

                            <div class="col-lg-6 col-sm-6 col-12">
                                <span style="color: black; font-weight:600;letter-spacing:0;">الوقت  </span>
                                <span style="float: left;">
                                @php
                                    $today = date('Y-m-d');
                                    $diff = strtotime($today) - strtotime($image->created_at);
                                    $days = abs(round($diff / 86400));
                                @endphp
                                    @if ($days == 0)
                                        اليوم
                                    @endif
                                    @if ($days > 0)
                                        منذ {{$days}} ايام
                                    @endif
                            </span>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="col-12">
                        <h4 class="text-center" style="letter-spacing: 0">الوصف</h4>
                    </div>
                    <div class="col-12">
                        <p>{{$image->title}}</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12  me-auto " style="height: 100%">
                <div class="row border rounded mb-2 p-2" style="border-color: black !important">
                    <h4 style="font-weight:700; color:black;margin-bottom:0;">{{$image->price}} EGP</h4>
                    <small class="small-text muted">  {{$image->title}} </small>
                    <div class="col-12">
                         <small class="small-text muted" style="float: right;">@php
                                $today = date('Y-m-d');
                                $diff = strtotime($today) - strtotime($image->created_at);
                                $days = abs(round($diff / 86400));
                            @endphp
                            @if ($days == 0)
                                اليوم
                            @endif
                            @if ($days > 0)
                                منذ {{$days}} ايام
                            @endif</small>
                        <div class="form-group">
                            <form action="{{route('gallery.download',$image)}}" method="GET">

                            <input readonly hidden name="email" value="{{Auth::user()->email}}">
                            <input readonly hidden name="balance" value="{{Auth::user()->balance}}">

                                <button type="submit" class="btn btn-success" ><i class="fa fa-download" aria-hidden="true"></i> تحميل الصوره </button>
                             </form>

                        @if(\Session::has('error'))
                                <div class="alert alert-danger">{{ \Session::get('error') }}
                                   <h6> {{Auth::user()->balance}}:EGP </h6> </div>
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
                        </div>
                    </div>
                </div>
                <div class="row border rounded pt-3 ps-3 pe-3 " style="border-color: black !important">
                    <div class="col-12 text-center mb-3">
                        <h4 style="letter-spacing: 0">معلومات المصور</h4>
                    </div>
                    <hr>
                    <div class="col-12 text-center">
                        <img src="{{asset('images/profile.png')}}" class="img-fluid mb-3" width="50%" alt="">
                        <h5>{{$userinfo->name}}</h5>
                        <h6>
                            <i class="fas fa-phone-alt"></i>
                            {{$userinfo->user_phone}}
                        </h6>
                    </div>
                    <hr>
                    <div class="col-12">
                        <p style="display: inline-block">AD ID {{$image->id}}</p>
                        <a href="#" style="float: right">Report this ad</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-2" style="padding: 2%" dir="ltr">
            <div class="col-lg-12 col-md-12 col-12 ad-container border rounded p-3"style="border-color: black !important;">
                <div class="row ">
                    <h4 class="text-center" style="letter-spacing: 0;">صور مشابهة</h4>
                    <hr>
                    @if ($related_ads != null)
                        @for ($i = 0; $i < count($related_ads); $i++)
                            @if ($i == 3)
                                @break;
                            @endif
                            <div class="col-md-4 mb-3">
                                <div class="card" >
                                    <img src="{{asset('public/Image/'.$related_ads[$i]->image)}}" class="card-img-top" width="20%" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title" style="letter-spacing: 0">{{$related_ads[$i]->title}}</h5>
                                        <h5 class="card-title">{{$related_ads[$i]->price}} EGP</h5>
                                        <div class="w-100 d-flex justify-content-center">
                                            <a class="btn  btn-theme btn-primary col-12" href="{{route('gallery.show',$related_ads[$i])}}" role="button">التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endif


                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

@endsection



