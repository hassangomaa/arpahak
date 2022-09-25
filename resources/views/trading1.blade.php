@extends('layouts.app')
@section('content')
@include('layouts.header')

<section class="page-title overflow-hidden position-relative" data-bg-color="#fbf3ed">
    <canvas id="confetti"></canvas>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <h1 class="title">التداول </h1>
            </div>

        </div>
    </div>
    <div class="page-title-pattern"><img class="img-fluid" src="images/bg/11.png" alt=""></div>
</section>
<div class="container">
    <div class="row p-2">
        @foreach ($metal as $m)
            <div class="col-lg-4 col-12  mb-3" >
                <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                    <div class="w-100 d-flex justify-content-center">
                        <img src="{{asset('images/metal-icon/gold.png')}}" class="img-fluid" width="25%" alt="">
                    </div>
                    <h3 style="letter-spacing: unset;text-align: center;"> {{$m->name}}</h3>
                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;"> سعر الشراء : <span id="price">{{$m->buy_price}} </span> EGP</h6>
                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">  سعر البيع  : <span id="perv_price">{{$m->sell_price}} </span> EGP</h6>
                </div>
            </div>
        @endforeach
        
        
       
    </div>
</div>

@include('layouts.footer')

@endsection



