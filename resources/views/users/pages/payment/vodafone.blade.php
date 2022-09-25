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
                            <h4>خطوات الدفع عن طريق فودافون كاش</h4>
                            <img src="{{asset('images/payments-logo/vodafone.PNG')}}" width="40%" class="img-fluid" alt="">
                        </div>
                        <div class="col-12">
                           <h5>خطوات الدفع :</h5>
                        </div>
                        <div class="col-12">
                            <h6>١ - تحويل المبلغ المطلوب علي الرقم 01012345678 .</h6>
                            <h6>٢ - الأحتفاظ بصورة الوصل .</h6>
                            <h6>٣ - رفع صورة الوصل هنا .</h6>
                        </div>
                        <div class="col-12">
                            <form action="#">
                                <div class="form-group">
                                    <label  class="form-label">الصورة <span class="text-danger"> *</span> </label>
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

@endsection

