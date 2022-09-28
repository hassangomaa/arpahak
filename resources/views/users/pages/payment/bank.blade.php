@extends('users.layout.master')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
<main class="main" id="main" >
    <div class="container" dir="rtl">
      <section class="section register  d-flex flex-column align-items-center justify-content-center pb-4">
        <div class="container">
            
            <div class="row">
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body pt-4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>خطوات الدفع عن طريق  التحويل البنكي</h4>
                            <img src="{{asset('images/payments-logo/NBE.svg')}}" width="40%" class="img-fluid" alt="">
                        </div>
                        <div class="col-12">
                           <h5>خطوات الدفع :</h5>
                        </div>
                        <div class="col-12">
                            <h6>١ - تحويل المبلغ المطلوب علي  الحساب رقم :</h6>
                            <h4 > 11305641894 </h4>
                            <br>
                            <br>
                            <br>
                            <h6>٢ - الأحتفاظ بصورة الوصل .</h6>
                            <h6>٣ - رفع صورة الوصل هنا .</h6>
                        </div>
                        <div class="col-12">
                            <form action="{{route('bank-image')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label  class="form-label">الصورة <span class="text-danger"> *</span> </label>
                                    <input hidden type="text" class="form-control"  name="email" value="{{Auth::user()->email}}" >
                                    <input hidden type="text" class="form-control"  name="type" value="البنك اﻻهلي المركزي" >
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                                <div class="row mt-3 justify-content-center">
                                    <div class="col-6 ">
                                        <button class="btn btn-primary  w-100" type="submit"> رفع الصورة </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
    
                </div>
              </div>
            </div>

        </div>
      </section>
    </div>
  </main><!-- End #main -->
@if(\Session::has('error'))
    <div class="alert alert-danger">{{ \Session::get('error') }}</div>
    {{ \Session::forget('error') }}
@endif
@if(\Session::has('success'))
    <div class="alert alert-success">{{ \Session::get('success') }}</div>
    {{ \Session::forget('success') }}
@endif
@endsection

