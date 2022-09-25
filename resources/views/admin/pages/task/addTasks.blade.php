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

                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('add.new.task')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label">المهمة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="link_name" name="link_name" placeholder="المهمة" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label">رابط المهمة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="link_url" name="link_url" placeholder="رابط المهمة" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label">سعر المهمة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="link_price" name="link_price" placeholder="سعر المهمة" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label">نوع المهمة <span class="text-danger"> *</span> </label>
                                <select class="form-select" aria-label="Default select example" name="link_type" required>
                                    <option name="link_type" selected>نوع المهمة</option>
                                    <option name="link_type" value="facebook">facebook</option>
                                    <option name="link_type" value="tiktok">tiktok</option>
                                    <option name="link_type" value="youtube">youtube</option>
                                </select>
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