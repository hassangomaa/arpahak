{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <!-- Title -->--}}
{{--    <title>ارباحك</title>--}}

{{--    <!-- Logo of title -->--}}
{{--    <link rel = "icon" type = "image/svg" href = "{{URL::asset('images/sack-dollar-solid.svg')}}">--}}
{{--    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">--}}

{{--    <!-- Custom styles for this template -->--}}
{{--    <link href="{{URL::asset('css/login.css')}}" rel="stylesheet">--}}


{{--    <!-- Scripts -->--}}
{{--    --}}{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>--}}

{{--    <!-- Fonts -->--}}
{{--    --}}{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    --}}{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}



{{--</head>--}}
{{--<body class="text-center">--}}

{{--    <main class="form-signin w-100 m-auto">--}}
{{--        @yield('content')--}}
{{--    </main>--}}

{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, software" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>ارباحك</title>

    <!-- favicon icon -->
{{--    <link rel="shortcut icon" href="images/favicon.ico" />--}}
    <link rel = "icon" type = "image/svg" href = "{{URL::asset('images/sack-dollar-solid.svg')}}">

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!--== animate -->
    <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="{{URL::asset('css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="{{URL::asset('css/line-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{URL::asset('css/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="{{URL::asset('css/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{URL::asset('css/base.css')}}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{URL::asset('css/shortcodes.css')}}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <!--== color-customizer -->
    <link href="#" data-style="styles" rel="stylesheet">
    <link href="{{URL::asset('css/color-customize/color-customizer.css')}}" rel="stylesheet" type="text/css" />

    <!-- inject css end -->

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav">

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader">
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-wrap-text">
                <div class="text"><span>A</span><span>R</span><span>P</span><span>A</span><span>H</span><span>A</span><span>K</span>
                </div>
            </div>
        </div>
    </div>

    <!-- preloader end -->
    <!--header start-->

    <header id="site-header" class="header header-1">
        <div class="container-fluid">
            <div id="header-wrap" class="box-shadow">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="{{route('index')}}">
                                {{--                            <img id="logo-img" class="img-fluid" src="" alt="">--}}
                                <img src="{{URL::asset('images/arpahak_logo.jpeg')}}" class="rounded-circle" alt="" width="75" height="75">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <!-- Left nav -->
                                <ul class="nav navbar-nav mx-auto">
                                    <!-- Home -->
                                    <li class="nav-item"> <a class="nav-link active" href="{{route('index')}}">الرئيسية</a>
                                    </li>
{{--                                    <li class="nav-item"> <a class="nav-link" href="#about">معلومات عنا</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item"> <a class="nav-link" href="#service">الخدمات</a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item"> <a class="nav-link" href="{{route('show.competitions')}}">المسابقات</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="{{route('gallery')}}">معرض الصور</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="{{route('share.us')}}">كن شريك</a>
                                    </li>
                                    {{--                                <li class="nav-item"> <a class="nav-link" href="#pricing"></a>--}}
                                    {{--                                </li>--}}
                                    {{--                                <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a>--}}
                                    {{--                                </li>--}}
                                    {{--                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>--}}
                                    {{--                                    <ul class="dropdown-menu">--}}
                                    {{--                                        <li class="dropdown dropdown-submenu"><a class="dropdown-toggle" href="#">About Us</a>--}}
                                    {{--                                            <ul class="dropdown-menu">--}}
                                    {{--                                                <li><a href="about-us.html">About Us 1</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="about-us-2.html">About Us 2</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                            </ul>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="dropdown dropdown-submenu"><a class="dropdown-toggle" href="#">Services</a>--}}
                                    {{--                                            <ul class="dropdown-menu">--}}
                                    {{--                                                <li><a href="services.html">Service 1</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="services-2.html">Service 2</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                            </ul>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li><a href="team.html">Team</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li><a href="team-single.html">Team Single</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li><a href="faq.html">Faq</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="dropdown dropdown-submenu"><a class="dropdown-toggle" href="#">Blogs</a>--}}
                                    {{--                                            <ul class="dropdown-menu">--}}
                                    {{--                                                <li><a href="blog-grid-2.html">Blog Grid 2</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="blog-single.html">Blog Single</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                            </ul>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="dropdown dropdown-submenu"><a class="dropdown-toggle" href="#">Element</a>--}}
                                    {{--                                            <ul class="dropdown-menu">--}}
                                    {{--                                                <li><a href="shortcode-accordions.html">Accordion</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="shortcode-blog-post.html">Blog Post</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="shortcode-counter.html">Counter</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="shortcode-feature-box.html">Featured Box</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="shortcode-pricing.html">Pricing Table</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="shortcode-team.html">Team</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="shortcode-testimonial.html">Testimonials</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                            </ul>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="dropdown dropdown-submenu"><a class="dropdown-toggle" href="#">Contact us</a>--}}
                                    {{--                                            <ul class="dropdown-menu">--}}
                                    {{--                                                <li><a href="contact.html">Contact 1</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                                <li><a href="contact-2.html">Contact 2</a>--}}
                                    {{--                                                </li>--}}
                                    {{--                                            </ul>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li><a href="coming-soon.html">Coming Soon</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li><a href="error-404.html">Error 404</a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    {{--                                </li>--}}
                                </ul>
                            </div>
                            {{--                        <a class="btn btn-theme btn-sm" href="{{route('login')}}" data-text="login"> <span></span><span></span><span></span><span></span><span></span>--}}

                            {{--                        </a>--}}
                            <a class="btn  btn-theme btn-primary" href="{{route('login')}}" type="submit">تسجيل الدخول</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--header end-->



@yield('content')


    <!--footer start-->

    <footer class="footer footer-1 position-relative" data-bg-img="images/bg/05.png">
{{--        <div class="subscribe-box">--}}
{{--            <div class="container">--}}
{{--                <div class="row subscribe-inner align-items-center">--}}
{{--                    <div class="col-md-6 col-sm-12">--}}
{{--                        <h4>Subscribe Our Newsletter</h4>--}}
{{--                        <p class="lead mb-0">Get started for 1 Month free trial No Purchace required.</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-sm-12 mt-3 mt-md-0">--}}
{{--                        <div class="subscribe-form">--}}
{{--                            <form id="mc-form" class="group">--}}
{{--                                <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">--}}
{{--                                <input class="btn btn-theme" type="submit" name="subscribe" value="Subscribe">--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-logo">
                            {{--                        <img id="footer-logo-img" src="images/logo.png" class="img-fluid" alt="">--}}
                            <img src="{{URL::asset('images/arpahak_logo.jpeg')}}" class="rounded-circle" alt="" width="75" height="75">
                        </div>
                        <p class="mb-0">ارباحك هي منصة تضم كثير من المجالات...</p>
                    </div>
                    <div class="col-lg-4 col-md-6 ps-md-5 mt-5 mt-md-0 footer-list justify-content-between d-flex">
                        <ul class="list-unstyled w-100">
{{--                            <li><a href="about-us.html">معلومات عنا</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="services.html">الخدمات</a>--}}
{{--                            </li>--}}
                            <li><a href="{{route('team')}}">فريق العمل</a>
                            </li>
                            <li><a href="{{route('privacy.policy')}}">سياسة الخصوصية</a>
                            </li>
                            {{--                        <li><a href="team-single.html">Team Single</a>--}}
                            {{--                        </li>--}}
{{--                            <li><a href="contact.html">اتصل بنا</a>--}}
{{--                            </li>--}}
                        </ul>
                        <ul class="list-unstyled w-100">
                            {{--                        <li><a href="blog-right-sidebar.html">Blog</a>--}}
                            {{--                        </li>--}}
                            {{--                        <li><a href="faq.html">Faq</a>--}}
                            {{--                        </li>--}}
                            {{--                        <li><a href="error-404.html">Error 404</a>--}}
                            {{--                        </li>--}}


                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                        <ul class="media-icon list-unstyled">
                            <li>
                                <p class="mb-0">العنوان:<b>ايرلندا</b>
                                </p>
                            </li>
                            <li>البريد الاكتروني: <a href="yasseromar81@gmail.com"><b>yasseromar81@gmail.com</b></a>
                            </li>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-footer">
            <div class="container">
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12"> <span>Copyright 2022 Arpahak <u><a href="#"></a></u> | All Rights Reserved</span>
                        </div>
{{--                        <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">--}}
{{--                            <div class="footer-social">--}}
{{--                                <ul class="list-inline">--}}
{{--                                    <li class="me-2"><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="me-2"><a href="#"><i class="fab fa-twitter"></i> Twitter</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#"><i class="fab fa-google-plus-g"></i> Google Plus</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--footer end-->

<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--== jquery -->
<script src="{{URL::asset('js/theme.js')}}"></script>

<!--== owl-carousel -->
<script src="{{URL::asset('js/owl-carousel/owl.carousel.min.js')}}"></script>

<!--== magnific-popup -->
<script src="{{URL::asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!--== counter -->
<script src="{{URL::asset('js/counter/counter.js')}}"></script>

<!--== countdown -->
<script src="{{URL::asset('js/countdown/jquery.countdown.min.js')}}"></script>

<!--== canvas -->
<script src="{{URL::asset('js/canvas.js')}}"></script>

<!--== confetti -->
<script src="{{URL::asset('js/confetti.js')}}"></script>

<!--== step animation -->
<script src="{{URL::asset('js/snap.svg.js')}}"></script>
<script src="{{URL::asset('js/step.js')}}"></script>

<!--== contact-form -->
<script src="{{URL::asset('js/contact-form/contact-form.js')}}"></script>

<!--== wow -->
<script src="{{URL::asset('js/wow.min.js')}}"></script>

<!--== color-customize -->
<script src="{{URL::asset('js/color-customize/color-customizer.js')}}"></script>

<!--== theme-script -->
<script src="{{URL::asset('js/theme-script.js')}}"></script>

<!-- inject js end -->

</body>

</html>

<p>هذه المنصة تحتوي علي كبار المستثمرين لتمويل الافكار الجديدة ويمكنك ايضا اضافة مسابقة و معرفة الفائز من خلالنا فقط أرسل الينا.</p>
