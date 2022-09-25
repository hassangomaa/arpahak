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

              
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">اضافة  مهمة</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>

                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('add.competition')}}"">
                    @csrf
                    <div class="row">
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label">العنوان <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="العنوان" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label  class="form-label">السعر  <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="سعر المسابقة" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label  class="form-label"> مدة الماسبقة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="time" name="time" placeholder="مدة المسابقة" required>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label"> الوصف <span class="text-danger"> *</span> </label>
                                <textarea id="description" name="description" class="form-control" placeholder="الوصف" rows="4" required="required" data-error="برجاء ترك لنا الوصف."></textarea>
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