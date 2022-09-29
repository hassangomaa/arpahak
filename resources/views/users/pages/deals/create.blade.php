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
              <div class="card mb-3 w-100">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">اضافة  تداول</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>
                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('user.store.trade')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> نوع التداول <span class="text-danger"> *</span> </label>
                                <select class="form-control" name="trade_type" >
                                    <option value=""> نوع التداول</option>
                                        <option value="1">عملية البيع</option>
                                        <option value="2">عملية شراء</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> الوصف <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control"  name="description"  required placeholder="اضافه وصف  مناسب يزيد من فرصه التداول.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> الرابط <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control"  name="url"  required placeholder="ادخل الرابط ">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> الكمية <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control"  name="quantity"  required placeholder="ادخل الكميه ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> السعر <span class="text-danger"> *</span> </label>
                                <input type="text"   class="form-control" value="0" id="metal_price" name="metal_price"  required >
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> العمولة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control"  name="commission"  required placeholder="ادخل العموله المطلوبه للجرام الواحد ">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> نوع العملة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control"  name="currency"  required placeholder="ادخل العمله المناسبه للدفع ">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> نوع المعدن <span class="text-danger"> *</span> </label>
                                <select onblur="price()" class="form-control" name="metal_id" id="metal_id">
                                    <option selected >اختر نوع المعدن </option>
                                    @foreach ($metals as $metal)
                                        <option value="{{$metal->id}}">{{$metal->name}}</option>
                                    @endforeach
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

  <script>
    function price()
    {
        var metalId = document.getElementById('metal_id');
        var selected = metalId.options[metalId.selectedIndex].value;
        var price =  document.getElementById('metal_price');
        var url = "{{route('user.metal.price',['id' => 11111])}} ";
        url = url.replace('11111',selected);
        $(document).ready(function()
        {
        $.ajax(
            {
                type: "GET",
                url : url,
                datatype: "json",
                success: function(response)
                { 
                    console.log(response);
                    price.value = response['price'];                    
                }
            }
        )
    })
}
  </script>



@endsection