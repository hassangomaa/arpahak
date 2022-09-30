@extends('layouts.app')
@section('content')
@include('layouts.header')

    <section class="page-title overflow-hidden position-relative" data-bg-color="#fbf3ed">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="title" style="margin-top: -4rem;">المعرض</h1>
                    <p>يمكن من خلال منصتنا عرض مسابقات للجميع و أختيار افضل متسابق.</p>
                </div>
            </div>
        </div>
        <div class="page-title-pattern"><img class="img-fluid" src="images/bg/11.png" alt=""></div>
    </section>
    <div class="container"style="margin-top: -1rem; z-index:999;position:relative;">
        <div class="row p-2">
{{--            @foreach($images as $image)--}}
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="card w-100" style="width: 18rem;">
                    <a href="{{asset('public/Image/'.$image->image)}}"><img src="{{asset('public/Image/'.$image->image)}}" class="card-img-top" style="height: 243.45px" ></a>
                    <div class="card-body">
                        <a href="#"><h5 class="card-title text-center" style="letter-spacing: 0;white-space:nowrap;text-overflow:ellipsis;overflow:hidden">{{$image->title}}</h5></a>
                        @if($image->price == 0)

                            <h4 class="card-title" style="display: inline-block;float: left;letter-spacing:0;" dir="ltr" style="color: black;">مجانا </h4>
                        @else

                            <h4 class="card-title" style="display: inline-block;float: left;" dir="ltr" style="color: black;">{{$image->price}} EGP</h4>

                        @endif
                        <ul style="list-style: none;display: inline-block">
                            <li style="display: inline-block;">
                                <i class="far fa-image"style="vertical-align: middle;"></i>
                                    <a href="{{asset('public/Image/'.$image->image)}}">الصورة</a>
                            </li>

                      </ul>
                      <hr>
                      <div class="w-100 d-flex justify-content-center">
{{--                        <a class="btn  btn-theme btn-primary col-12" href="{{route('gallery.show')}}" role="button">التفاصيل</a>--}}
                    </div>
                </div>
                  </div>
            </div>
{{--            @endforeach--}}
        </div>
    </div>



    <!--body content start-->

    


        @include('layouts.footer')

@endsection
