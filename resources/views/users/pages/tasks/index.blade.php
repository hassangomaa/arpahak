@extends('users.layout.master')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
<main class="main" id="main">
    <div class="container">
      <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center" dir="rtl">
            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3 w-100">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">المهام  اليومية</h5>
                  </div>
                  <div class="row">
                    @foreach ($user_tasks as $t)
                        @if ($t->link_type == 'facebook')
                            <div class="col-lg-4 col-12  mb-3"  id="link_url<?php echo $t->link_id;?>" >
                                <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                                    <div class="w-100 d-flex justify-content-center">
                                        <img src="{{asset('images/social-logo/facebook.png')}}" class="img-fluid" width="22%" alt="">
                                    </div>
                                    <h3 style="letter-spacing: unset;text-align: center;"> فيسبوك</h3>
                                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : <?php echo $t->link_name ?></h6>
                                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">سعر المهمة : <?php echo $t->link_price ?> $</h6>
                                    <div class="w-100 d-flex justify-content-center">
                                        <a class="btn  btn-theme btn-primary" href="{{route('facebook',$t->link_id)}}" role="button">الرابط</a>
                                    </div>
                                </div>
                            </div>
                            @elseif ($t->link_type == 'tiktok')
                            <div class="col-lg-4 col-12  mb-3"  id="link_url<?php echo $t->link_id;?>" >
                                <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                                    <div class="w-100 d-flex justify-content-center">
                                        <img src="{{asset('images/social-logo/tiktok.png')}}" class="img-fluid" width="25%" alt="">
                                    </div>
                                    <h3 style="letter-spacing: unset;text-align: center;">تيك توك </h3>
                                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : <?php echo $t->link_name ?></h6>
                                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">سعر المهمة : <?php echo $t->link_price ?> $</h6>
                                    <div class="w-100 d-flex justify-content-center">
                                        <a class="btn  btn-theme btn-primary" href="{{route('tiktok',$t->link_id)}}" role="button">الرابط</a>
                                    </div>
                                </div>
                            </div>
                            @elseif ($t->link_type == 'youtube')
                            <div class="col-lg-4 col-12  mb-3"  id="link_url<?php echo $t->link_id;?>" >
                                <div class="border rounded pt-4 pb-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);">
                                    <div class="w-100 d-flex justify-content-center">
                                        <img src="{{asset('images/social-logo/youtube.png')}}" class="img-fluid" width="25%" alt="">
                                    </div>
                                    <h3 style="letter-spacing: unset;text-align: center;"> يوتيوب</h3>
                                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">الخدمه : <?php echo $t->link_name ?></h6>
                                    <h6 style="letter-spacing: unset;font-weight: 600;text-align: center;">سعر المهمة : <?php echo $t->link_price ?> $</h6>
                                    <div class="w-100 d-flex justify-content-center">
                                        <a class="btn  btn-theme btn-primary" href="{{route('youtube.video',$t->link_id)}}" role="button">الرابط</a>
                                    </div>
                                </div>
                            </div>
                        
                        @endif
                        
                        
                    @endforeach
                    
                    
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
@endsection