@extends('users.layout.master')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
<main class="main" id="main">
    <div class="container">
      <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center" dir="rtl">
            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">  تغيير كلمة السر</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="{{route('update.password')}}">
                    @csrf
                    <div class="row">
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label">كلمة السر الجديدة <span class="text-danger"> *</span> </label>
                                <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="كلمة السر الجديدة" required>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label">تأكيد كلمة السر <span class="text-danger"> *</span> </label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="off" placeholder="تأكيد كلمة السر" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6 ">
                            <button class="btn btn-primary  w-100" type="submit"> تحديث </button>
                        </div>
                    </div>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @elseif(session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>
                @endif
                    
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main>



@endsection