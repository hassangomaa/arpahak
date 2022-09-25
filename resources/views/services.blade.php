@extends('layouts.app')
@section('content')
@include('layouts.header')

<section class="page-title overflow-hidden position-relative"  data-bg-color="#fbf3ed">
    <canvas id="confetti"></canvas>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="title" style="margin-top: -4rem;">الخدمات </h1>
                <p>للحصول علي احدي هذه الخدمات يجب عليك تسجيل الدخول و اختيار الخدمه و تقديم طلب الحصول علي الخدمه .</p>

            </div>
        </div>
    </div>
    <div class="page-title-pattern"><img class="img-fluid" src="images/bg/11.png" alt=""></div>
</section>
<div class="container"style="margin-top: -1rem; z-index:999;position:relative;">
    <div class="row p-2">
        <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card w-100" style="width: 18rem;">
                <a href="#"><img src="{{asset('images/testcar.jpeg')}}" class="card-img-top" style="height: 243.45px" ></a>
                <div class="card-body">
                    <a href="#"><h5 class="card-title text-center" style="letter-spacing: 0;white-space:nowrap;text-overflow:ellipsis;overflow:hidden"> سيارة يبنتلي للبيع السريع بسعر رخيص جدا جدا</h5></a>
                    <h4 class="card-title" dir="ltr" style="color: black;">2000 EGP</h4>
                  <ul style="list-style: none;text-align:center;">
                    <li style="display: inline-block;margin-left:2.5rem">
                        <i class="fas fa-map-marker-alt"style="vertical-align: middle;"></i>
                        القاهرة
                    </li>
                    <li style="display: inline-block;margin-left:2.5rem">
                        <i class="fas fa-clock"style="vertical-align: middle;"></i>
                        منذ 3 ايام
                    </li>
                    <li style="display: inline-block">
                        <i class="fas fa-bars"style="vertical-align: middle;"></i>
                        سيارات
                    </li>
                  </ul>
                  <hr>
                  <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary col-12" href="#" role="button">التفاصيل</a>
                </div>                </div>
              </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card w-100" style="width: 18rem;">
                <a href="#"><img src="{{asset('images/te.jpg')}}" class="card-img-top" style="height: 243.45px" ></a>
                <div class="card-body">
                    <a href="#"><h5 class="card-title text-center" style="letter-spacing: 0;white-space:nowrap;text-overflow:ellipsis;overflow:hidden"> سيارة يبنتلي للبيع السريع بسعر رخيص جدا جدا</h5></a>
                    <h4 class="card-title" dir="ltr" style="color: black;">2000 EGP</h4>
                  <ul style="list-style: none;text-align:center;">
                    <li style="display: inline-block;margin-left:2.5rem">
                        <i class="fas fa-map-marker-alt"style="vertical-align: middle;"></i>
                        القاهرة
                    </li>
                    <li style="display: inline-block;margin-left:2.5rem">
                        <i class="fas fa-clock"style="vertical-align: middle;"></i>
                        منذ 3 ايام
                    </li>
                    <li style="display: inline-block">
                        <i class="fas fa-bars"style="vertical-align: middle;"></i>
                        سيارات
                    </li>
                  </ul>
                  <hr>
                  <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary col-12" href="#" role="button">التفاصيل</a>
                </div>                </div>
              </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card w-100" style="width: 18rem;">
                <a href="#"><img src="{{asset('images/te.jpg')}}" class="card-img-top" style="height: 243.45px" ></a>
                <div class="card-body">
                    <a href="#"><h5 class="card-title text-center" style="letter-spacing: 0;white-space:nowrap;text-overflow:ellipsis;overflow:hidden"> سيارة يبنتلي للبيع السريع بسعر رخيص جدا جدا</h5></a>
                    <h4 class="card-title" dir="ltr" style="color: black;">2000 EGP</h4>
                  <ul style="list-style: none;text-align:center;">
                    <li style="display: inline-block;margin-left:2.5rem">
                        <i class="fas fa-map-marker-alt"style="vertical-align: middle;"></i>
                        القاهرة
                    </li>
                    <li style="display: inline-block;margin-left:2.5rem">
                        <i class="fas fa-clock"style="vertical-align: middle;"></i>
                        منذ 3 ايام
                    </li>
                    <li style="display: inline-block">
                        <i class="fas fa-bars"style="vertical-align: middle;"></i>
                        سيارات
                    </li>
                  </ul>
                  <hr>
                  <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary col-12" href="#" role="button">التفاصيل</a>
                </div>                </div>
              </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12  mb-3" >
            <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/social-logo/snapchat.png')}}" class="img-fluid" width="25%" alt="">
                </div>
                <h3 style="letter-spacing: unset;text-align: center;">سناب شات</h3>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : زيادة عدد المتابعين</h6>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">السعر لكل 1000 : 7.16$</h6>
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary" href="{{route('add.order')}}" role="button">التفاصيل</a>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4 col-sm-6  col-12 mb-3 " >
            <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/social-logo/instagram.png')}}" class="img-fluid" width="21%" alt="">
                </div>
                <h3 style="letter-spacing: unset;text-align: center;"> انستغرام</h3>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : زيادة عدد المتابعين</h6>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">السعر لكل 1000 : 7.16$</h6>
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary" href="{{route('add.order')}}" role="button">التفاصيل</a>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4 col-sm-6  col-12  mb-3" >
            <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/social-logo/youtube.png')}}" class="img-fluid" width="28%" alt="">
                </div>
                <h3 style="letter-spacing: unset;text-align: center;"> يوتيوب</h3>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : زيادة عدد المتابعين</h6>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">السعر لكل 1000 : 7.16$</h6>
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary" href="{{route('add.order')}}" role="button">التفاصيل</a>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4  col-sm-6 col-12  mb-3" >
            <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/social-logo/twitter.png')}}" class="img-fluid" width="21%" alt="">
                </div>
                <h3 style="letter-spacing: unset;text-align: center;"> تويتر</h3>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : زيادة عدد المتابعين</h6>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">السعر لكل 1000 : 7.16$</h6>
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary" href="{{route('add.order')}}" role="button">التفاصيل</a>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4 col-sm-6 col-12  mb-3" >
            <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/social-logo/tiktok.png')}}" class="img-fluid" width="19%" alt="">
                </div>
                <h3 style="letter-spacing: unset;text-align: center;"> تيك توك</h3>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : زيادة عدد المتابعين</h6>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">السعر لكل 1000 : 7.16$</h6>
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary" href="{{route('add.order')}}" role="button">التفاصيل</a>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4 col-sm-6  col-12  mb-3" >
            <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                <div class="w-100 d-flex justify-content-center">
                    <img src="{{asset('images/social-logo/kwai.png')}}" class="img-fluid" width="21%" alt="">
                </div>
                <h3 style="letter-spacing: unset;text-align: center;"> كواي</h3>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : زيادة عدد المتابعين</h6>
                <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">السعر لكل 1000 : 7.16$</h6>
                <div class="w-100 d-flex justify-content-center">
                    <a class="btn  btn-theme btn-primary" href="{{route('add.order')}}" role="button">التفاصيل</a>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
@include('layouts.footer')

@endsection



