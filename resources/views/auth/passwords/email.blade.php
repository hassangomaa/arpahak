@extends('layouts.app')

@section('content')
    <br><br><br><br><br><br>
    <div class="card-body">

            <div class="col-lg-5 col-md-12 mx-auto mt-5 mt-lg-0">
                <h4 class="col-lg-5 col-md-12 mx-auto mt-5 mt-lg-0">إعادة تعيين كلمة السر</h4>
                <br>


                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        لقد أرسلنا عبر البريد الإلكتروني رابط إعادة تعيين كلمة السر الخاصة بك
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="messages"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="floatingInput" placeholder="البريد الاكترونى" required="required" autocomplete="email" autofocus data-error="البريد الاكتروني مطلوب." >
                        <div class="help-block with-errors"></div>
                    </div>
                    <br>
                    {{--            @error('email')--}}
                    {{--            <span class="invalid-feedback" role="alert">--}}
                    {{--                    <strong>البريد الاكتروني غير صحيح</strong>--}}
                    {{--                </span>--}}
                    {{--            @enderror--}}

                    <div class="d-grid gap-2">
                        <button class="btn btn-theme btn-block btn-circle" type="submit"  name="send_email">إرسال رابط تعيين كلمة السر </button>
                    </div>
                </form>
            </div>


@endsection
