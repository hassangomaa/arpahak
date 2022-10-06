@extends('layouts.app')

@section('content')
@include('layouts.header')

    <br>
    <br>
    <div class="page-content">

        <!--login start-->

        <section class="login">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 order-1 order-md-1 order-lg-0">
                        <img class="img-fluid" src="images/banner/06.png" alt="">
                    </div>
                    <div class="col-lg-5 col-md-12 mx-auto mt-5 mt-lg-0 order-0 order-md-0 order-lg-1">
                        <div class="login-form text-center mb-5">
{{--                            <img class="img-fluid mb-5" src="images/logo.png" alt="">--}}
                            <img class="mb-4 rounded-circle" src="{{URL::asset('images/arpahak_logo.jpeg')}}" alt="" width="105" height="105">

                            <form method="POST" action="{{route('login')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="messages"></div>
                                <div class="form-group">
                                    <input id="email"  type="text" name="email" class="form-control" placeholder="البريد الاكتروني" required="required" data-error="البريد الاكتروني مطلوب.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" class="form-control" placeholder="كلمة السر" required="required" data-error="كلمة السر مطلوبة.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group mt-4 mb-5">
                                    <div class="remember-checkbox d-flex align-items-center justify-content-between">
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="" id="check2">--}}
{{--                                            <label class="form-check-label" for="check2">Remember me</label>--}}
{{--                                        </div>--}}
                                        <a href="{{route('password.update')}}">هل نسيت كلمة السر؟</a>
                                    </div>
                                </div>
{{--                                <a href="#" class="btn btn-theme btn-block btn-circle" data-text="Sign in">--}}

{{--                                </a>--}}
                                <button class="btn btn-theme btn-block btn-circle" name="login" type="submit">تسجيل الدخول</button>
                                <a class="btn btn-black btn-block btn-circle" href="{{route('register')}}" name="register" type="submit">إنشاء حساب جديد</a>
                            </form>

                            <br>
                            <br>
                            <br>
                            <a href="{{ route('google.login') }}" class="btn btn-google btn-user btn-circle">
                                <i class="fab fa-google fa-fw"></i> تسجيل باستخدام جوجل
                            </a>
                            <br>
                            <br>
                            <a href="{{ route('facebook.login') }}" class="btn btn- btn-user btn-circle">
                                <i class="fab fa-facebook fa-fw"></i> تسجيل باستخدام فيسبوك
                            </a>

{{--                            <h5 class="mb-0 mt-4 text-capitalize"><a href="{{route('register')}}"></a></h5>--}}
{{--                            <div class="social-icons fullwidth social-colored mt-4 text-center clearfix">--}}
{{--                                <ul class="list-inline">--}}
{{--                                    <li class="social-facebook"><a href="#">Facebook</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="social-twitter"><a href="#">Twitter</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="social-gplus"><a href="#">Google</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--login end-->

    </div>

    <!--body content end-->
@endsection
