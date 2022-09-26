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
                            <h4>خطوات الدفع عن طريق باي بال </h4>
                            <img src="{{asset('images/payments-logo/paypal.png')}}" width="40%" class="img-fluid" alt="">
                        </div>
                        <div class="col-12">
                           <h5>خطوات الدفع :</h5>
                        </div>
                        <div class="col-12">
                            <h6>١ -  </h6>
                            <h6>٢ -  .</h6>
                            <h6>٣ -   .</h6>
                        </div>
                        <div class="col-12">
                            <form action="{{route('payment.paypal')}}" method="post">
                                @csrf
                                <div class="row mt-3 justify-content-center">
                                    <div class="col-6 ">

                                        <input hidden name="amount" value="{{Session::get('prod_id')  }}">
                                        <button class="btn btn-primary  w-100" type="submit"> الدفع </button>
                                    </div>
                                </div>
                            </form>
                            @if(\Session::has('error'))
                                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                                {{ \Session::forget('error') }}
                            @endif
                            @if(\Session::has('success'))
                                <div class="alert alert-success">{{ \Session::get('success') }}</div>
                                {{ \Session::forget('success') }}
                            @endif
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

