@extends('admin.layouts.master')
@section('content')
@include('admin.includes.head')
@include('admin.includes.sidebar')
<main class="main" id="main">
    <div class="container">
      <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center" dir="rtl">
            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3 w-100">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">اضافة  معدن</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>
                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('store.metal')}}">
                    @csrf
                    <div class="row">
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label">  اسم المعدن <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" name="metal_name"  required placeholder="   اسم المعدن    ">
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label"> سعر الشراء <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="" name="buy_price"  required placeholder="سعر الشراء">
                            </div>
                        </div>
                        <div class=" col-12">
                          <div class="form-group">
                              <label  class="form-label"> سعر البيع <span class="text-danger"> *</span> </label>
                              <input type="text" class="form-control" id="" name="sell_price"  required placeholder="سعر البيع">
                          </div>
                      </div>
                    </div>
                    
                    
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6 ">
                            <button class="btn btn-primary  w-100" type="submit"> اضافة </button>
                        </div>
                    </div>
                    
                    
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