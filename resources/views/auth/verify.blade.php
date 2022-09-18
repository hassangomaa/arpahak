@extends('layouts.app')

@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div><h4>تحقق من عنوان بريدك الإلكتروني</h4></div>

    <div class="card-body">


        {{ __('قبل المتابعة ، يرجى التحقق من بريدك الإلكتروني للحصول على رابط التحقق.') }}
        {{ __('إذا لم تستلم البريد الإلكتروني') }},

        <form  method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <br>
            <button type="submit" class="btn btn-theme btn-primary" name="send_again">انقر هنا لطلب آخر</button>
        </form>
        <br>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.') }}
            </div>
        @endif
    </div>



@endsection
