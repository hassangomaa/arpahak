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
                      <a class="btn btn-primary m-3" href="{{ route('processTransaction') }}">Pay $1000</a>
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
      </section>
    </div>
  </main><!-- End #main -->

@endsection

