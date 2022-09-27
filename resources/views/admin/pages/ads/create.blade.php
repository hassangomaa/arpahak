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
                    @if(session()->has('success'))
                    <div class="alert alert-success  mt-3 text-center">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <h5 class="card-title text-center pb-0 fs-4">اضافة  اعلان</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>
                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('store.ad')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label"> العنوان <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control"  name="title"  required placeholder=" العنوان">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label"> السعر بالجنية المصري <span class="text-danger"> *</span> </label>
                                <input type="number" class="form-control"  name="price"  required placeholder=" السعر">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label  class="form-label">   الوصف <span class="text-danger"> *</span> </label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12  col-12">
                            <div class="form-group">
                                <label  class="form-label"> الصورة الرئيسية <span class="text-danger"> *</span> </label>
                                <input type="file" class="form-control" id="image" name="image[]" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label">الصورة الأولي  </label>
                                <input type="file" class="form-control" id="image1" name="image[]" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label">الصورة الثانية  </label>
                                <input type="file" class="form-control" id="image2" name="image[]" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label">الصورة الثالثة  </label>
                                <input type="file" class="form-control" id="image" name="image[]" >
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label"> الدوله  <span class="text-danger"> *</span> </label>
                                <select class="form-control" name="city" >
                                    <option value=""> اختر  </option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}">
                                            {{$country->name}}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label  class="form-label"> المحافظة  <span class="text-danger"> *</span> </label>
                                <select class="form-control" name="city" >
                                    <option value=""> اختر المحافظة </option>
                                        @foreach ($cities as $city)
                                            <option value="{{$city->value}}">{{$city->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label"> القسم  <span class="text-danger"> *</span> </label>
                                <select class="form-control" name="category" >
                                    <option value=""> اختر القسم </option>
                                        @foreach ($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label  class="form-label"> الحالة  <span class="text-danger"> *</span> </label>
                                <select class="form-control" name="used" >
                                    <option value=""> اختر الحالة </option>
                                    <option value="0">  جديد </option>
                                        <option value="1"> مستعمل</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group pt-4">
                                <label  class="form-label"> التوصيل  </label>
                                <input type="checkbox" class="form-check-input" name="delivery">
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

<script>
    $(document).ready(function() {
        $('#country-dropdown').on('change', function() {
            var country_id = this.value;
            $("#state-dropdown").html('');
            $.ajax({
                url:"{{url('get-states-by-country')}}",
                type: "POST",
                data: {
                    country_id: country_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){
                    $('#state-dropdown').html('<option value="">Select State</option>');
                    $.each(result.states,function(key,value){
                        $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                    $('#city-dropdown').html('<option value="">Select State First</option>');
                }
            });
        });
        $('#state-dropdown').on('change', function() {
            var state_id = this.value;
            $("#city-dropdown").html('');
            $.ajax({
                url:"{{url('get-cities-by-state')}}",
                type: "POST",
                data: {
                    state_id: state_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){
                    $('#city-dropdown').html('<option value="">Select City</option>');
                    $.each(result.cities,function(key,value){
                        $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                }
            });
        });
    });
</script>


@endsection