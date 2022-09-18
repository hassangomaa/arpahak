@extends('layouts.app')
@section('content')
    <section class="page-title overflow-hidden position-relative" data-bg-color="#fbf3ed">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="title">المعرض</h1>
                    <p>يمكن من خلال منصتنا عرض مسابقات للجميع و أختيار افضل متسابق.</p>
                </div>
            </div>
        </div>
        <div class="page-title-pattern"><img class="img-fluid" src="images/bg/11.png" alt=""></div>
    </section>



    <!--body content start-->

    <div class="page-content">



        <!--contact start-->

        <section class="contact-1">
            <div class="container">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-6 col-lg-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="{{asset('public/Image/'.$image->image)}}" alt="" height="200" onContextMenu="return false;" style="object-fit: cover">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <span>{{$image->title}}</span>
                                    @if($image->price == 0)
                                        <span>{{$image->price}}</span>
                                    @else
                                        <span>Free</span>
                                    @endif

                                    @if(auth()->user() || $image->price == 0)
                                        <a href="{{asset('public/Image/'.$image->image)}}" class="btn btn-sm btn-theme btn-primary" download>تحميل</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection
