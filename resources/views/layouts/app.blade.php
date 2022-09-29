<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, software" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>ارباحك</title>

    <!-- favicon icon -->
{{--    <link rel="shortcut icon" href="images/favicon.ico" />--}}
    <link rel = "icon" type = "image/svg" href = "{{URL::asset('images/sack-dollar-solid.svg')}}">

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

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
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!--== color-customizer -->
    <link href="#" data-style="styles" rel="stylesheet">
    <link href="{{URL::asset('css/color-customize/color-customizer.css')}}" rel="stylesheet" type="text/css" />

    <!-- inject css end -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   
    @yield('body_style')
    <style>
        .cards-wrapper
        {
            display: flex
        }
        #mobile-steps-div
        {
            display: block;
        }
        #setps-div
        {
            display: none;
        }
    @media (min-width: 992px) {
        #mobile-steps-div
        {
            display: none;
        }
        #setps-div
        {
            display: flex;
        }
    }
    
</style>


</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav" style="padding: 0;" >

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



@yield('content')


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>

<!--back-to-top end-->
</div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="@yield('js_file')"></script>

</body>

</html>

