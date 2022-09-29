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
                    <h5 class="card-title text-center pb-0 fs-4">اضافة  خدمه</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>
                  <form class="row g-3 needs-validation" enctype="multipart/form-data" method="POST" action="{{route('store.service')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> اسم الخدمة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="اسم الخدمه" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> الفسم <span class="text-danger"> *</span> </label>
                                <select onblur="test()" class="form-control" name="category_id" id="category_id">
                                    <option value="">أختر القسم</option>
                                    @foreach($categories_names as $category)
                                        <option value="{{$category->category_id}}"> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> النوع <span class="text-danger"> *</span> </label>
                                <select class="form-control" name="type_id" id="type_id">
                                    <option value="">أختر النوع</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> وصف الخدمة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="descrption" name="descrption" placeholder="وصف الخدمه" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label"> لينك الخدمة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="url" name="url" placeholder=" لينك الخدمه" required>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label">  الكمية المتاحة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="quantity" name="quantity" placeholder=" الكمية المتاحه " required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label">  السعر <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="net_price" name="net_price" placeholder="  السعر " required>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label  class="form-label">   العمولة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="commission	" name="commission" placeholder="  العموله " required>
                            </div>
                        </div>
                        <div class=" col-12">
                            <div class="form-group">
                                <label  class="form-label">   العملة <span class="text-danger"> *</span> </label>
                                <input type="text" class="form-control" id="currency	" name="currency" placeholder="  العمله " required>
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
    function test()
    {
        var CatId = document.getElementById('category_id');
        var selected = CatId.options[CatId.selectedIndex].value;
        var types =  document.getElementById('type_id');
        console.log(selected);
        var url = "{{route('add.service.GetTypes',['CatId' => 11111])}} ";
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
                    console.log(response['types'][0]);
                    types.innerHTML="<option value=''>أختر النوع</option>";
                    for(var i = 0 ; i < response['types'].length ; i++)
                    {
                        var option = document.createElement("option");
                        option.text = response['types'][i]['type'];
                        option.value = response['types'][i]['id']
                        types.add(option);
                    }
                    
                }
            }
        )
    })

        
    }
</script>


@endsection