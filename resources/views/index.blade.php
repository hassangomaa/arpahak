@extends('layouts.app')
@section('content')

    <!--hero section start-->

    <section id="home" class="fullscreen-banner banner p-0 bg-contain bg-pos-rt" data-bg-img="{{URL::asset('images/bg/01.png')}}">
        <div class="spinner-eff">
            <div class="spinner-circle circle-1"></div>
            <div class="spinner-circle circle-2"></div>
        </div>
        <div class="align-center pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid wow jackInTheBox" data-wow-duration="3s" src="{{URL::asset('images/banner/01.png')}}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                        <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s">التفكير في كيفية الحصول على المال</h1>
                        <p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">اهلا وسهلا بك فى موقع ارباحك . اذا كنت المره الاولى التى تزور فيها موقعنا فيمكنك متابعة هذا الفيديو للتعرف علينا وعلى كيفية عمل الموقع ..</p>
{{--                        <a class="btn btn-theme wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="#" data-text="Start A Today"> <span>S</span><span>t</span><span>a</span><span>r</span><span>t</span>--}}
{{--                            <span> </span><span>A</span>  <span> </span><span>T</span><span>o</span><span>d</span><span>a</span><span>y</span>--}}
{{--                        </a>--}}
{{--                        <a class="btn btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="#" data-text="Learn More"> <span>L</span><span>e</span><span>a</span><span>r</span><span>n</span>--}}
{{--                            <span> </span><span>M</span><span>o</span><span>r</span><span>e</span>--}}
{{--                        </a>--}}
                        <a class="btn btn-theme btn-primary" href="https://www.youtube.com/embed/0sOcvLpqt6g">رابط الفيديو</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--hero section end-->



    <!--body content start-->

    <div class="page-content">

        <!--feature start-->

        <section class="p-0 text-center wow fadeInUp" data-wow-duration="2s">
            <div class="container">
                <div class="row custom-mt-10 z-index-1 md-mt-0">
                    <div class="col-md-12">
                        <div class="owl-carousel" data-dots="false" data-items="2" data-lg-items="3" data-md-items="2" data-sm-items="1" data-autoplay="true">
{{--                            <div class="item">--}}
{{--                                <div class="featured-item style-2">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <i class="flaticon-data"></i>--}}
{{--                                        <span class="rotateme"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-title">--}}
{{--                                        <h5>Professional tools</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-desc">--}}
{{--                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>--}}
{{--                                        <a class="icon-btn mt-4" href=""> <i class="la la-angle-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="item">
                                <div class="featured-item style-2">
                                    <div class="featured-icon">
                                        <i class="flaticon-collaboration"></i>
                                        <span class="rotateme"></span>
                                    </div>
                                    <div class="featured-title">
                                        <h5>كن شريك</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>يمكن من خلال منصتنا عرض افكارك و مشاريعك الينا و سنقوم بالبحث عن ممول لهذه الافكار. </p>
                                        <a class="icon-btn mt-4" href="{{route('share.us')}}"> <i class="la la-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="item">--}}
{{--                                <div class="featured-item style-2">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <i class="flaticon-market"></i>--}}
{{--                                        <span class="rotateme"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-title">--}}
{{--                                        <h5>التسويق</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-desc">--}}
{{--                                        <p>يمكن من خلال منصتنا تسويق منتجك حتي وان كنت ليس لديك مقر...فقط خذ الخطوة مع ارباحك</p>--}}
{{--                                        <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="item">
                                <div class="featured-item style-2">
                                    <div class="featured-icon">
                                        <i class="flaticon-objective"></i>
                                        <span class="rotateme"></span>
                                    </div>
                                    <div class="featured-title">
                                        <h5>انشاء متجر</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>يمكن من خلال منصتنا انشاء متجر خاص بك لعرض منتجاتك و كسب المزيد من المال عبر الانترنت.</p>
                                        <a class="icon-btn mt-4" href=""> <i class="la la-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="item">--}}
{{--                                <div class="featured-item style-2">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <i class="flaticon-analytics"></i>--}}
{{--                                        <span class="rotateme"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-title">--}}
{{--                                        <h5>Easily To Use</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-desc">--}}
{{--                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>--}}
{{--                                        <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--feature end-->


{{--        <!--about start-->--}}

{{--        <section id="about" class="position-relative bg-contain bg-pos-l custom-py-2" data-bg-img="images/bg/02.png">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-6 col-md-12 image-column p-0">--}}
{{--                        <div class="img-box box-shadow">--}}
{{--                            <div class="box-loader">--}}
{{--                                <span></span>--}}
{{--                                <span></span>--}}
{{--                                <span></span>--}}
{{--                            </div>--}}
{{--                            <img class="img-fluid" src="images/banner/03.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-5 ms-auto col-md-12 mt-5 mt-lg-0">--}}
{{--                        <div class="section-title mb-4">--}}
{{--                            <div class="title-effect">--}}
{{--                                <div class="bar bar-top"></div>--}}
{{--                                <div class="bar bar-right"></div>--}}
{{--                                <div class="bar bar-bottom"></div>--}}
{{--                                <div class="bar bar-left"></div>--}}
{{--                            </div>--}}
{{--                            <h6>About Us</h6>--}}
{{--                            <h2>We're Building Modern And High Software</h2>--}}
{{--                        </div>--}}
{{--                        <ul class="list-unstyled list-icon mb-4">--}}
{{--                            <li class="mb-3"><i class="la la-check"></i> Deos et accusamus et iusto odio</li>--}}
{{--                            <li class="mb-3"><i class="la la-check"></i> Distinctively brand adaptive innovation</li>--}}
{{--                            <li><i class="la la-check"></i> Molestias a orci facilisis rutrum</li>--}}
{{--                        </ul>--}}
{{--                        <a class="btn btn-border btn-circle" href="#" data-text="See About"> <span>S</span><span>e</span><span>e</span><span> </span>--}}
{{--                            <span>A</span><span>b</span><span>o</span><span>u</span><span>t</span>--}}
{{--                        </a>--}}
{{--                        <a class="btn btn-theme btn-circle" href="#" data-text="Learn More"> <span>L</span><span>e</span><span>a</span><span>r</span><span>n</span>--}}
{{--                            <span> </span><span>M</span><span>o</span><span>r</span><span>e</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!--about end-->--}}


{{--        <!--feature start-->--}}

{{--        <section id="service" class="service position-relative bg-effect overflow-hidden">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-5 col-md-12 order-lg-12 image-column right">--}}
{{--                        <div class="blink-img">--}}
{{--                            <img class="img-fluid blinkblink" src="images/pattern/04.png" alt="">--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid z-index-1 w-100" src="images/svg/01.svg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0 order-lg-1">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6">--}}
{{--                                <div class="featured-item style-3">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <i class="la la-diamond"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-title">--}}
{{--                                        <h5>Design</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-desc">--}}
{{--                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mt-4">--}}
{{--                                <div class="featured-item style-3">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <i class="la la-credit-card"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-title">--}}
{{--                                        <h5>Drag And Drop</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-desc">--}}
{{--                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mt-3 mt-md-0">--}}
{{--                                <div class="featured-item style-3">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <i class="la la-desktop"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-title">--}}
{{--                                        <h5>High Resolution</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-desc">--}}
{{--                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 mt-4">--}}
{{--                                <div class="featured-item style-3">--}}
{{--                                    <div class="featured-icon">--}}
{{--                                        <i class="la la-headphones"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-title">--}}
{{--                                        <h5>Helping Support</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="featured-desc">--}}
{{--                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!--feature end-->--}}


        <!--step start-->

        <section class="text-center position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10 mx-auto">
                        <div class="section-title">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h6>كيفية عمل الموقع</h6>
                            <h2 class="title">ثلاث خطوات بسيطة لبدء العمل لدي ارباحك</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="svg-container">
                        <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet"></svg>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="work-process">
                            <div class="box-loader"> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="la la-lightbulb-o"></i></span>
                                </div>
                                <div class="step-num">01</div>
                            </div>
                            <div class="step-desc">
                                <h4>تسجيل الدخول</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                        <div class="work-process">
                            <div class="box-loader"> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="la la-rocket"></i></span>
                                </div>
                                <div class="step-num">02</div>
                            </div>
                            <div class="step-desc">
                                <h4>انجاز المهام</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                        <div class="work-process">
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="la la-check-square"></i></span>
                                </div>
                                <div class="step-num">03</div>
                            </div>
                            <div class="step-desc">
                                <h4>تحصيل الاموال</h4>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--step end-->


{{--        <!--team start-->--}}

{{--        <section id="team" class="bg-effect right position-relative overflow-hidden">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-8 col-md-12">--}}
{{--                        <div class="section-title">--}}
{{--                            <div class="title-effect">--}}
{{--                                <div class="bar bar-top"></div>--}}
{{--                                <div class="bar bar-right"></div>--}}
{{--                                <div class="bar bar-bottom"></div>--}}
{{--                                <div class="bar bar-left"></div>--}}
{{--                            </div>--}}
{{--                            <h6>فريق مبدع</h6>--}}
{{--                            <h2 class="title">قابل المختصين لدينا سيكونون جاهزين لخدمتك</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="container-fluid p-0">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-10 col-lg-11 col-md-10 ms-auto">--}}
{{--                        <div class="owl-carousel" data-dots="false" data-items="3" data-md-items="2" data-sm-items="1" data-autoplay="true">--}}
{{--                            <div class="item">--}}
{{--                                <div class="team-member style-1">--}}
{{--                                    <div class="team-images">--}}
{{--                                        <img class="img-fluid rounded box-shadow" src="images/team/01.jpg" alt="">--}}
{{--                                        <div class="social-icons social-colored circle team-social-icon">--}}
{{--                                            <ul>--}}
{{--                                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-description"> <span>Manager</span>--}}
{{--                                        <h5>Jemy Lusto</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="team-member style-1">--}}
{{--                                    <div class="team-images">--}}
{{--                                        <img class="img-fluid rounded box-shadow" src="images/team/02.jpg" alt="">--}}
{{--                                        <div class="social-icons social-colored circle team-social-icon">--}}
{{--                                            <ul>--}}
{{--                                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-description"> <span>Manager</span>--}}
{{--                                        <h5>Tom Roadse</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="team-member style-1">--}}
{{--                                    <div class="team-images">--}}
{{--                                        <img class="img-fluid rounded box-shadow" src="images/team/03.jpg" alt="">--}}
{{--                                        <div class="social-icons social-colored circle team-social-icon">--}}
{{--                                            <ul>--}}
{{--                                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-description"> <span>Manager</span>--}}
{{--                                        <h5>Lana Dior</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="team-member style-1">--}}
{{--                                    <div class="team-images">--}}
{{--                                        <img class="img-fluid rounded box-shadow" src="images/team/04.jpg" alt="">--}}
{{--                                        <div class="social-icons social-colored circle team-social-icon">--}}
{{--                                            <ul>--}}
{{--                                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-description"> <span>Manager</span>--}}
{{--                                        <h5>James Lynn</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-md-6">--}}
{{--                        <div class="clients-logo">--}}
{{--                            <img class="img-fluid" src="images/client/07.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 mt-3 mt-md-0">--}}
{{--                        <div class="clients-logo">--}}
{{--                            <img class="img-fluid" src="images/client/08.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">--}}
{{--                        <div class="clients-logo">--}}
{{--                            <img class="img-fluid" src="images/client/09.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">--}}
{{--                        <div class="clients-logo">--}}
{{--                            <img class="img-fluid" src="images/client/10.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!--team end-->--}}


{{--        <!--pricing start-->--}}

{{--        <section id="pricing" class="position-relative">--}}
{{--            <canvas id="canvas"></canvas>--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center text-center">--}}
{{--                    <div class="col-lg-8 col-md-12">--}}
{{--                        <div class="section-title">--}}
{{--                            <div class="title-effect">--}}
{{--                                <div class="bar bar-top"></div>--}}
{{--                                <div class="bar bar-right"></div>--}}
{{--                                <div class="bar bar-bottom"></div>--}}
{{--                                <div class="bar bar-left"></div>--}}
{{--                            </div>--}}
{{--                            <h6>Pricing Plan</h6>--}}
{{--                            <h2 class="title">Choose affordable prices</h2>--}}
{{--                            <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-4 col-md-12">--}}
{{--                        <div class="price-table">--}}
{{--                            <div class="price-inside">Starter</div>--}}
{{--                            <div class="price-header">--}}
{{--                                <div class="price-value">--}}
{{--                                    <h2><span>$</span>33</h2>--}}
{{--                                    <span>Monthly Package</span>--}}
{{--                                </div>--}}
{{--                                <h3 class="price-title">Starter</h3>--}}
{{--                            </div>--}}
{{--                            <a class="btn btn-theme btn-circle my-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>--}}
{{--                                <span> </span><span>N</span><span>o</span><span>w</span>--}}
{{--                            </a>--}}
{{--                            <div class="price-list">--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>15 Analytics Compaign</li>--}}
{{--                                    <li>Unlimited Site licenses</li>--}}
{{--                                    <li>1 Database</li>--}}
{{--                                    <li>10 Free Optimization</li>--}}
{{--                                    <li>Html5 + Css3</li>--}}
{{--                                    <li>24/7 Customer Support</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">--}}
{{--                        <div class="price-table active">--}}
{{--                            <div class="price-inside">Premium</div>--}}
{{--                            <div class="price-header">--}}
{{--                                <div class="price-value">--}}
{{--                                    <h2><span>$</span>55</h2>--}}
{{--                                    <span>Monthly Package</span>--}}
{{--                                </div>--}}
{{--                                <h3 class="price-title">Premium</h3>--}}
{{--                            </div>--}}
{{--                            <a class="btn btn-theme btn-circle my-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>--}}
{{--                                <span> </span><span>N</span><span>o</span><span>w</span>--}}
{{--                            </a>--}}
{{--                            <div class="price-list">--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>15 Analytics Compaign</li>--}}
{{--                                    <li>Unlimited Site licenses</li>--}}
{{--                                    <li>1 Database</li>--}}
{{--                                    <li>10 Free Optimization</li>--}}
{{--                                    <li>Html5 + Css3</li>--}}
{{--                                    <li>24/7 Customer Support</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">--}}
{{--                        <div class="price-table">--}}
{{--                            <div class="price-inside">Professional</div>--}}
{{--                            <div class="price-header">--}}
{{--                                <div class="price-value">--}}
{{--                                    <h2><span>$</span>99</h2>--}}
{{--                                    <span>Monthly Package</span>--}}
{{--                                </div>--}}
{{--                                <h3 class="price-title">Professional</h3>--}}
{{--                            </div>--}}
{{--                            <a class="btn btn-theme btn-circle my-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>--}}
{{--                                <span> </span><span>N</span><span>o</span><span>w</span>--}}
{{--                            </a>--}}
{{--                            <div class="price-list">--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li>15 Analytics Compaign</li>--}}
{{--                                    <li>Unlimited Site licenses</li>--}}
{{--                                    <li>1 Database</li>--}}
{{--                                    <li>10 Free Optimization</li>--}}
{{--                                    <li>Html5 + Css3</li>--}}
{{--                                    <li>24/7 Customer Support</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!--pricing end-->--}}


{{--        <!--testimonial start-->--}}

{{--        <section class="grey-bg position-relative overflow-hidden" data-bg-img="images/pattern/01.png">--}}
{{--            <div class="wave-shape">--}}
{{--                <img class="img-fluid" src="images/bg/03.png" alt="">--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center text-center">--}}
{{--                    <div class="col-lg-8 col-md-12">--}}
{{--                        <div class="section-title">--}}
{{--                            <div class="title-effect">--}}
{{--                                <div class="bar bar-top"></div>--}}
{{--                                <div class="bar bar-right"></div>--}}
{{--                                <div class="bar bar-bottom"></div>--}}
{{--                                <div class="bar bar-left"></div>--}}
{{--                            </div>--}}
{{--                            <h6>Testimonial</h6>--}}
{{--                            <h2 class="title">You Can See our clients feedback What You Say?</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-5">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div id="testimonial-1" class="testimonial-carousel carousel slide" data-bs-ride="carousel" data-bs-interval="2500">--}}
{{--                            <!-- Wrapper for slides -->--}}
{{--                            <div class="row align-items-center">--}}
{{--                                <div class="col-lg-7 col-md-12">--}}
{{--                                    <div class="carousel-inner">--}}
{{--                                        <div class="carousel-item active">--}}
{{--                                            <div class="testimonial style-1">--}}
{{--                                                <div class="testimonial-content">--}}
{{--                                                    <div class="testimonial-quote"><i class="la la-quote-left"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <p>Professional recommended and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, Consectetur adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit</p>--}}
{{--                                                    <div class="testimonial-caption">--}}
{{--                                                        <h5>Lana Roadse</h5>--}}
{{--                                                        <label>CEO of Softino</label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="carousel-item">--}}
{{--                                            <div class="testimonial style-1">--}}
{{--                                                <div class="testimonial-content">--}}
{{--                                                    <div class="testimonial-quote"><i class="la la-quote-left"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <p>Recommended Professional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, Consectetur adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit,</p>--}}
{{--                                                    <div class="testimonial-caption">--}}
{{--                                                        <h5>Lana Roadse</h5>--}}
{{--                                                        <label>CEO of Softino</label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="carousel-item">--}}
{{--                                            <div class="testimonial style-1">--}}
{{--                                                <div class="testimonial-content">--}}
{{--                                                    <div class="testimonial-quote"><i class="la la-quote-left"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <p>Consectetur Recommended Professional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit,</p>--}}
{{--                                                    <div class="testimonial-caption">--}}
{{--                                                        <h5>Lana Roadse</h5>--}}
{{--                                                        <label>CEO of Softino</label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- End Item -->--}}
{{--                                    </div>--}}
{{--                                    <!-- End Carousel Inner -->--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-5 col-md-12 mt-5 mt-lg-0">--}}
{{--                                    <div class="controls">--}}
{{--                                        <div class="anti-01-holder">--}}
{{--                                            <div class="anti-01"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="anti-02-holder">--}}
{{--                                            <div class="anti-02"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="anti-03-holder">--}}
{{--                                            <div class="anti-03"></div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="nav">--}}
{{--                                            <li data-bs-target="#testimonial-1" data-bs-slide-to="0" class="active">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img class="img-fluid" src="images/testimonial/01.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li data-bs-target="#testimonial-1" data-bs-slide-to="1">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img class="img-fluid" src="images/testimonial/02.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li data-bs-target="#testimonial-1" data-bs-slide-to="2">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img class="img-fluid" src="images/testimonial/03.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End Carousel -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!--testimonial end-->--}}


{{--        <!--blog start-->--}}

{{--        <section id="blog">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center text-center">--}}
{{--                    <div class="col-lg-8 col-md-12">--}}
{{--                        <div class="section-title">--}}
{{--                            <div class="title-effect">--}}
{{--                                <div class="bar bar-top"></div>--}}
{{--                                <div class="bar bar-right"></div>--}}
{{--                                <div class="bar bar-bottom"></div>--}}
{{--                                <div class="bar bar-left"></div>--}}
{{--                            </div>--}}
{{--                            <h6>Blog Post</h6>--}}
{{--                            <h2 class="title">Our Latest News</h2>--}}
{{--                            <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4 col-md-12">--}}
{{--                        <div class="post">--}}
{{--                            <div class="post-image">--}}
{{--                                <img class="img-fluid h-100 w-100" src="images/blog/01.jpg" alt=""> <a class="post-categories" href="#">Photo</a>--}}
{{--                            </div>--}}
{{--                            <div class="post-desc">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <ul class="list-inline">--}}
{{--                                        <li><i class="la la-calendar me-1"></i> 23 Jan, 2019</li>--}}
{{--                                        <li><i class="la la-user me-1"></i> By ThemeHt</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="post-title">--}}
{{--                                    <h4><a href="blog-single.html">Softino Performance Based Software</a></h4>--}}
{{--                                </div>--}}
{{--                                <p>Consequat dolor sit amet, consectetur adipiscing elit. Maecenas lobortis quam id lectus aliquet euismod. Ut sagittis…</p>--}}
{{--                                <a class="icon-btn mt-4" href="blog-single.html"> <i class="la la-angle-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">--}}
{{--                        <div class="post">--}}
{{--                            <div class="post-image">--}}
{{--                                <img class="img-fluid h-100 w-100" src="images/blog/02.jpg" alt=""> <a class="post-categories" href="#">Photo</a>--}}
{{--                            </div>--}}
{{--                            <div class="post-desc">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <ul class="list-inline">--}}
{{--                                        <li><i class="la la-calendar me-1"></i> 23 Jan, 2019</li>--}}
{{--                                        <li><i class="la la-user me-1"></i> By ThemeHt</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="post-title">--}}
{{--                                    <h4><a href="blog-single.html">latest Software design in features</a></h4>--}}
{{--                                </div>--}}
{{--                                <p>Consequat dolor sit amet, consectetur adipiscing elit. Maecenas lobortis quam id lectus aliquet euismod. Ut sagittis…</p>--}}
{{--                                <a class="icon-btn mt-4" href="blog-single.html"> <i class="la la-angle-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">--}}
{{--                        <div class="post">--}}
{{--                            <div class="post-image">--}}
{{--                                <img class="img-fluid h-100 w-100" src="images/blog/03.jpg" alt=""> <a class="post-categories" href="#">Photo</a>--}}
{{--                            </div>--}}
{{--                            <div class="post-desc">--}}
{{--                                <div class="post-meta">--}}
{{--                                    <ul class="list-inline">--}}
{{--                                        <li><i class="la la-calendar me-1"></i> 23 Jan, 2019</li>--}}
{{--                                        <li><i class="la la-user me-1"></i> By ThemeHt</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="post-title">--}}
{{--                                    <h4><a href="blog-single.html">All Powerful Design feature In Softino</a></h4>--}}
{{--                                </div>--}}
{{--                                <p>Consequat dolor sit amet, consectetur adipiscing elit. Maecenas lobortis quam id lectus aliquet euismod. Ut sagittis…</p>--}}
{{--                                <a class="icon-btn mt-4" href="blog-single.html"> <i class="la la-angle-right"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!--blog end-->--}}

    </div>

    <!--body content end-->


    </div>

    <!-- page wrapper end -->


{{--    <!--color-customizer start-->--}}

{{--    <div class="color-customizer closed">--}}
{{--        <div class="color-button">--}}
{{--            <a class="opener" href="#"> <i class="fas fa-spinner fa-spin"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="clearfix color-chooser text-center">--}}
{{--            <h4 class="text-theme font-w-8 mb-4">Softino With <span class="text-black font-w-5">Awesome Colors</span></h4>--}}
{{--            <ul class="colorChange clearfix">--}}
{{--                <li class="theme-default selected" title="theme-default" data-style="color-1"></li>--}}
{{--                <li class="theme-2" title="theme-2" data-style="color-2"></li>--}}
{{--                <li class="theme-3" title="theme-3" data-style="color-3"></li>--}}
{{--                <li class="theme-4" title="theme-4" data-style="color-4"></li>--}}
{{--                <li class="theme-5" title="theme-5" data-style="color-5"></li>--}}
{{--                <li class="theme-6" title="theme-6" data-style="color-6"></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!--color-customizer end-->--}}

@endsection



