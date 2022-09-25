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
                    <h5 class="card-title text-center pb-0 fs-4">اضافة  قسم</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>
                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('store.service.subCategory')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> النوع <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="type" name="type"  required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> الفسم <span class="text-danger"> *</span> </label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">أختر القسم</option>
                                    @foreach($categories as $c)
                                        <option @if(old('category_id') == $c->category_id) selected @endif value="{{$c->category_id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <br>
                                <label for="active">
                                    الحالة
                                </label>
                                <input type="checkbox" name="status" id="status" value="1" {{ old('status') ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <br>
                                <label for="active">
                                    الصفحة الرئيسية
                                </label>
                                <input type="checkbox" name="home_page" id="home_page" value="1" {{ old('home_page') ? 'checked' : '' }}>
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