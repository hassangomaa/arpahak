@extends('layouts.app')

@section('content')
    <!--page title start-->

    <section class="page-title overflow-hidden position-relative" data-bg-color="#fbf3ed">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="title">فريق العمل</h1>
                    <p>لدينا فريق متكامل لانجاز المهام داخل المنصة.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class="page-title-pattern">
            <img class="img-fluid" src="images/bg/11.png" alt="">
        </div>
    </section>

    <!--page title end-->

    <!--timeline start-->
    <br><br><br>
    <section class="position-relative overflow-hidden">
        <canvas id="canvas"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="timeline-wrap">
                        <ul class="timeline timeline--first list-unstyled">
                            <li class="timeline-title">
                                <h2>منذ بداية سنة 2022 الي 2022 شهر أغسطس</h2>
                            </li>
                            <li class="timeline-inner timeline-left">
                                <div class="timeline-content">
                                    <h3>المدير التنفيذي</h3>
                                    <p> مهندس/أحمد شعبان</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="timeline-wrap">
                        <ul class="timeline list-unstyled">
                            <li class="timeline-title">
                                <h2>منذ بداية شهر أغسطس لسنة 2022</h2>
                            </li>
                            <li class="timeline-inner timeline-left">
                                <div class="timeline-content">
                                    <h3>المدير التنفيذي</h3>
                                    <p>مهندس/هلال أحمد</p>
                                </div>
                            </li>
                            <li class="timeline-inner timeline-right">
                                <div class="timeline-content">
                                    <h3>المبرمجين</h3>
                                    <p>مهندس/كريم محمد , مهندس/سليمان دهشان</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--timeline end-->
@endsection
