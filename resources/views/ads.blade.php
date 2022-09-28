@extends('layouts.app')
@section('content')
@include('layouts.header')

<section class="page-title overflow-hidden position-relative"  data-bg-color="#fbf3ed">
    <canvas id="confetti"></canvas>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="title" style="margin-top: -4rem;">الاعلانات </h1>
                <p>يمكنك من خلال موقعنا بيع منتاجاتك المستعمله او بيع المنتجات الجديدة .</p>
            </div>
        </div>
    </div>
    <div class="page-title-pattern"><img class="img-fluid" src="images/bg/11.png" alt=""></div>
</section>
<div class="container"style="margin-top: -1rem; z-index:999;position:relative;">
    <div class="row p-2">
        @foreach ($ads as $ad)
        <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card w-100" style="width: 18rem;">
                <a href="#"><img src="{{asset('uploads/'.$ad->image)}}" class="card-img-top" style="height: 243.45px" ></a>
                <div class="card-body">
                    <a href="#"><h5 class="card-title text-center" style="letter-spacing: 0;white-space:nowrap;text-overflow:ellipsis;overflow:hidden">{{$ad->title}}</h5></a>
                    <h4 class="card-title" dir="ltr" style="color: black;">{{$ad->price}} EGP</h4>
                  <ul style="list-style: none;display:flex;">
                    <li style="display: inline-block;flex-basis:50%">
                        <i class="fas fa-map-marker-alt"style="vertical-align: middle;"></i>
{{--                        {{ $ad->getcity }}--}}
                        @foreach ($cities as $city)
                            @if ($city->country_id == $ad->country_id)
{{--                                 @foreach ($countries as $country)--}}
                                    @if ($city->id == $ad->city_id)
                                        {{$city->name_ar}}
                                    @endif
                            @endif
                        @endforeach
                    </li>
                    <li style="display: inline-block;flex-basis:50%">
                        <i class="fas fa-clock"style="vertical-align: middle;"></i>
                        @php
                            $today = date('Y-m-d');
                            $diff = strtotime($today) - strtotime($ad->created_at);
                            $days = abs(round($diff / 86400));
                        @endphp
                        @if ($days == 0)
                            اليوم
                        @endif
                        @if ($days > 0)
                            منذ {{$days}} ايام  
                        @endif
                    </li>
                    
                  </ul>
                  <ul style="list-style: none;display:flex;">
                    <li style="display: inline-block;flex-basis:50%">
                        <i class="fas fa-bars"style="vertical-align: middle;"></i>
                        @foreach ($category as $cat)
                            @if ($cat->id == $ad->category_id)
                                {{$cat->name}}
                            @endif
                        @endforeach
                    </li>
                    <li style="display: inline-block;flex-basis:50%">
                        <i class="fas fa-bars"style="vertical-align: middle;"></i>
                        @if ($ad->used==0)
                            جديد
                        @endif
                        @if ($ad->used==1)
                            مستعمل
                        @endif
                    </li>
                  </ul>
                  <hr>
                  <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary col-12" href="{{route('view.ad',$ad->id)}}" role="button">التفاصيل</a>
                </div> 
                </div>
              </div>
        </div>
        @endforeach
        
        
    </div>
</div>
@include('layouts.footer')

@endsection



