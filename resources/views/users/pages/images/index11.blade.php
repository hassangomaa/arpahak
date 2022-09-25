@extends('users.layout.master')
@section('title','Dashboard - NiceAdmin Bootstrap Template')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
<main class="main" id="main">
    <div class="container">
      <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center" dir="rtl">
            @foreach($images as $image)
                        <div class="col-md-6 col-lg-4">
                            <div class="card mb-3">
                                <img class="card-img-top" src="{{asset('public/Image/'.$image->image)}}" alt="" height="200" onContextMenu="return false;" style="object-fit: cover">
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <span>{{$image->title}}</span>
                                    @if($image->price != 0)
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

    </div>
  </main>



@endsection