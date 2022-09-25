@extends('users.layout.master')
@section('title','Dashboard - NiceAdmin Bootstrap Template')
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
                    <h5 class="card-title text-center pb-0 fs-4">اضافة صورة للمعرض</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>

                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('store.image')}}">
                    @csrf
                    <div class="row">
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label">العنوان <span class="text-danger"> *</span> </label>
                                <input value="{{old('title')}}" type="text" class="form-control" id="title" name="title" placeholder="العنوان" required>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label">الصورة <span class="text-danger"> *</span> </label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label  class="form-label">السعر <span class="text-danger"> *</span> </label>
                                <input type="number" value="{{old('price')}}" step="0.01" class="form-control" placeholder="السعر" id="price" name="price" min="0">
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