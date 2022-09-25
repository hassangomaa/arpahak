@extends('layouts.app')
@section('css_file')
    {{asset('css/style2.css')}}

@endsection
   
    

@section('js_file')
    {{asset('js/main1.js')}}
@endsection
@section('content')
    @include('layouts.new-header')
    <section id="hero" style=" background-image: url({{asset('images/indexbg.jpg')}} )">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <h1>اهلا و سهلا بك في موقع ارباحك .</h1>
        <h2 style="margin-bottom: 0px;"> اذا كانت المره الاول التي تزور فيها موقعنا فيمكنك متابعة هذا الفيديو للتعرف علينا و علي كيفية عمل الموقع .</h2>
        <div class="d-flex mt-3 mb-5">
            <a class="btn btn-theme btn-primary" href="https://www.youtube.com/embed/0sOcvLpqt6g">رابط الفيديو <i class="far fa-play-circle" style="vertical-align: middle;"></i></a>
        </div>
        <div class="row w-100 justify-content-center">                    <div id="svg-container">
            <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet"></svg>
        </div>
        <div class="col-lg-4 col-6">
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
                    <h4 style="color: white">تسجيل الدخول</h4>
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
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
                    <h4 style="color: white">انجاز المهام</h4>
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6 ">
            <div class="work-process">
                <div class="step-num-box">
                    <div class="step-icon"><span><i class="la la-check-square"></i></span>
                    </div>
                    <div class="step-num">03</div>
                </div>
                <div class="step-desc">
                    <h4 style="color: white">تحصيل الاموال</h4>
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>
    
    
@endsection



