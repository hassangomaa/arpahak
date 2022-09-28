@extends('layouts.header')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1 class="mt-4">رصيدك</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item printhide"><a href="{{route('home')}}">الرئيسية</a></li>
            <li class="breadcrumb-item active printhide">رصيدك</li>
        </ol>


        <div class="card shadow p-3 mb-4 bg-body">
            <!-- <div class="card-header">
                <i class="fas fa-table me-1"></i>
                المهام
            </div>  -->
            <div class="card-body text-center ">
                <p class="h4 fs-1">   {{Auth::user()->balance }}$ الرصيد الكلى</p>
{{--                <span class="fs-1 fw-bold">$<?php if($price_sum == ''){echo "";}else{ echo $price_sum;}?></span>--}}


            </div>
        </div>
        <div class="card shadow p-3 mb-4 bg-body">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                اختر وسيلة السحب
            </div>
            <div class="card-body text-center ">


                <a href=""><img src="images/vodafoncash.jpg" class="rounded img-thumbnail m-2" alt="..." width="200" height="200"></a>
                <a href="{{route('payment')}}"><img src="images/paypal.png" class="rounded img-thumbnail m-2" alt="..." width="200" height="200"></a>
            </div>


        </div>


    </main>
@endsection
