@extends('layouts.app')

@section('content')
@include('layouts.header')


    <br><br><br><br>
    <br><br><br><br>
    <div class="col-lg-5 col-md-12 mx-auto mt-5 mt-lg-0">
        <h4 class="col-lg-5 col-md-12 mx-auto mt-5 mt-lg-0">إعادة تعيين كلمة السر</h4>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <input type="text" class="form-control" id="floatingInput" name="email" placeholder="البريد الاكترونى" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>



            <div class="form-group">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="كلمة السر" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>بيانات غير متطابقة</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" autocomplete="off" placeholder="تأكيد كلمة السر" required>
            </div>
            <br>
            <div class="d-grid gap-2">
                <button class="w-100 btn btn-lg btn-primary" type="submit"  name="reset_password">إعادة تعيين كلمة السر</button>
            </div>
        </form>
    </div>

@endsection
