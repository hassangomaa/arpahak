@extends('layouts.app')

@section('content')
    @include('layouts.header')

    <br>
    <br>
    <!--body content start-->

    <div class="page-content">

        <!--login start-->

        <section class="register position-relative overflow-hidden">
            <div class="bg-animation">
                <img class="zoom-fade" src="images/pattern/03.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h2>إنشاء حساب في ارباحك</h2>
                            {{--                            <h4>Simple And Easy To Sign Up</h4>--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="register-form text-center z-index-1">
                            <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="messages"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="name" type="text" name="name" class="form-control" placeholder="الاسم  كامل" required="required" data-error="الاسم مطلوب.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    {{--                                    <div class="col-md-6">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last name" required="required" data-error="Lastname is required.">--}}
                                    {{--                                            <div class="help-block with-errors"></div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="email" type="text" name="email" class="form-control" placeholder="البريد الالكتروني" required="required" data-error="البريد الالكتروني مطلوب.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="user_phone" type="text" name="user_phone" class="form-control" placeholder="رقم الهاتف" required="required" data-error="رقم الهاتف مطلوب.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="gender">
                                                <option selected>الجنس</option>
                                                <option name="gender" value="Male">ذكر</option>
                                                <option name="gender" value="Female">أنثى</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" class="form-control" placeholder="كلمة السر" required="required" data-error="كلمة السر مطلوبة.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="تأكيد كلمة السر" required="required" data-error="تأكيد كلمة السر مطلوبة.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="country" >
                                                <option name="country" value="Country">اختر البلد...</option>
                                                @foreach($countries as $country)
                                                    <option id="country" name="country" value="{{$country->id}}">{{ $country->name_ar }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="row mt-5">--}}
                                {{--                                    <div class="col-md-12">--}}
                                {{--                                        <div class="remember-checkbox d-inline-block mb-5">--}}
                                {{--                                            <div class="form-check">--}}
                                {{--                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
                                {{--                                                <label class="form-check-label" for="flexCheckDefault">I agree to the term of use and privacy policy</label>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-theme btn-primary" name="register" type="submit">إنشاء الحساب</button>
                                        {{--                                            <span>C</span><span>r</span><span>e</span><span>a</span><span>t</span><span>e</span>--}}
                                        {{--                                            <span> </span><span>A</span><span>c</span><span>c</span><span>o</span><span>u</span><span>n</span><span>t</span></a>--}}
                                        {{--                                        <h5 class="mb-0 text-capitalize mt-4">Have An Account ? <a href="login.html"><i>Sign In!</i></a></h5>--}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--login end-->

    </div>

    <!--body content end-->

@endsection
