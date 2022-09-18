@extends('admin.layouts.login')

@section('content')

{{--    <form action="{{route('check.admin.login')}}" method="POST" enctype="multipart/form-data">--}}
{{--        @csrf--}}


{{--        <h1 class="h3 mb-3 fw-normal">تسجيل الدخول</h1>--}}

{{--        <div class="form-floating">--}}
{{--            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required autocomplete="email" autofocus>--}}
{{--            <label for="floatingInput">البريد الاكترونى</label>--}}
{{--        </div>--}}



{{--        <div class="form-floating">--}}
{{--            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required autocomplete="current-password">--}}
{{--            <label for="floatingPassword">كلمة المرور</label>--}}
{{--        </div>--}}
{{--        @error('email')--}}
{{--            <div class="alert alert-danger col-sm-6 ml-5 mt-2 w-auto" role="alert w-auto">--}}
{{--                <strong>بيانات الدخول غير صحيحة</strong>--}}
{{--            </div>--}}
{{--        @enderror--}}

{{--        @error('password')--}}
{{--            <div class="alert alert-danger col-sm-6 ml-5 mt-2 w-auto" role="alert w-auto">--}}
{{--                <strong>بيانات الدخول غير صحيحة</strong>--}}
{{--            </div>--}}
{{--        @enderror--}}


{{--        <div class="row mb-3">--}}
{{--            --}}{{--            <div class="col-md-6 offset-md-4">--}}
{{--            --}}{{--                <div class="form-check">--}}
{{--            --}}{{--                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--            --}}{{--                    <label class="form-check-label" for="remember">--}}
{{--            --}}{{--                        {{ __('Remember Me') }}--}}
{{--            --}}{{--                    </label>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- <button class="w-100 btn btn-lg btn-primary" type="submit"  name="login">login in</button>--}}
{{--        <button class="w-100 btn btn-lg btn-primary" type="submit"  name="login"><a href="signup.php" class="link-success link text-decoration-none">سجل فى الموقع</a></button> -->--}}
{{--        <div class="d-grid gap-2">--}}
{{--            <button class="w-100 btn btn-lg btn-primary" type="submit"  name="login">دخول</button>--}}
{{--        </div>--}}

{{--        <div class="form-floating"><?php if(isset($msg)) {echo $msg;} ?></div>--}}
{{--        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>--}}
{{--    </form>--}}
    <br>
    <br>
    <div class="page-content">

        <!--login start-->

        <section class="login">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="{{URL::asset('images/banner/06.png')}}" alt="">
                    </div>
                    <div class="col-lg-5 col-md-12 mx-auto mt-5 mt-lg-0">
                        <div class="login-form text-center">
                            {{--                            <img class="img-fluid mb-5" src="images/logo.png" alt="">--}}
                            <img class="mb-4 rounded-circle" src="{{URL::asset('images/arpahak_logo.jpeg')}}" alt="" width="105" height="1055">

                            <form method="POST" action="{{route('admin.login')}}" enctype="multipart/form-data">
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
                                    {{--                                    <div class="remember-checkbox d-flex align-items-center justify-content-between">--}}
                                    {{--                                        <div class="form-check">--}}
                                    {{--                                            <input class="form-check-input" type="checkbox" value="" id="check2">--}}
                                    {{--                                            <label class="form-check-label" for="check2">Remember me</label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <a href="#"></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                                {{--                                <a href="#" class="btn btn-theme btn-block btn-circle" data-text="Sign in">--}}

                                {{--                                </a>--}}
                                <button class="btn btn-theme btn-block btn-circle" name="login" type="submit">تسجيل الدخول</button>
{{--                                <a class="btn btn-black btn-block btn-circle" href="{{route('register')}}" name="register" type="submit">إنشاء حساب جديد</a>--}}
                            </form>



                            {{--                            <h5 class="mb-0 mt-4 text-capitalize"><a href="{{route('register')}}"></a></h5>--}}
{{--                            <div class="social-icons fullwidth social-colored mt-4 text-center clearfix">--}}
{{--                                <ul class="list-inline">--}}
{{--                                    <li class="social-facebook"><a href="#">Facebook</a>--}}
{{--                                    </li>--}}
{{--                                    --}}{{--                                    <li class="social-twitter"><a href="#">Twitter</a>--}}
{{--                                    --}}{{--                                    </li>--}}
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
