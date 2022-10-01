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
                    <h5 class="card-title text-center pb-0 fs-4">اضافة طلب</h5>
                    <p class="text-center small">قم بادخال البيانات</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="{{route('store.order')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="club_id" class="form-label">القسم <span class="text-danger"> *</span> </label>
                                <select onblur="test()" class="form-control" name="category_id" id="category_id">
                                    <option value="">أختر القسم</option>
                                    @foreach($categories_names as $category)
                                        <option value="{{$category->category_id}}"> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-6 col-12">
                            <div class="mb-3">

                                <label for="service" class="form-label">النوع <span class="text-danger"> *</span> </label>
                                <select onblur="test()" class="form-control" name="service_id" id="service">
                                    <option selected value="0">أختر النوع</option>
{{--                                    @foreach($services_type as $service)--}}
{{--                                        <option value="{{$service->id}}"> {{$service->type}} </option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="club_id" class="form-label">الخدمه<span class="text-danger"> *</span> </label>
                                <select class="form-control"  name="services_all" id="club_id">
                                    <option selected value="0">أختر الخدمه</option>
{{--                                    @foreach($services as $service1)--}}
{{--                                        <option value="{{$service1->id}}"> {{$service1->name}} </option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="Quantity" class="form-label">الكمية<span class="text-danger"> *</span></label>
                            <input type="text" class="form-control" id="attachment" name="quantity" placeholder="الكمية " required>
                            <input hidden type="text" class="form-control" id="attachment" name="user_id" value="{{Auth::user()->id}}" required>
                            <input hidden type="text" class="form-control" id="attachment" name="user_balance" value="{{Auth::user()->balance}}" required>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6 ">
                            <button class="btn btn-primary  w-100" type="submit">طلب الخدمة </button>
                        </div>
                    </div>

                    
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
    </div>
  </main>



<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- AJAX CDN --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<script type="text/javascript">
    $(document).ready(function () {
        $('#category_id').change(function(){
            let id = $(this).val();
            // alert(id);

            $('select[name="service_id"]').empty();
            // $('select[name="service_id"]').empty();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':'{{csrf_token()}}'
                }
            });
            // alert(id);
            //call country on region selected
            $.ajax({
                dataType: "json",
                url: "/order_type/"+id,
                type: "GET",
                {{--_token: '{{csrf_token()}}',--}}
                success: function (data) {
                    // alert(data);
                    console.log(data);
                    $('select[name="service_id"]').empty();
                    $.each(data, function(key,data){
                        $('select[name="service_id"]').append('<option value="'+ data.id +'">'+ data.type +'</option>');
                    });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $('#service').change(function(){
            let id = $(this).val();
            // alert(id);

            $('select[name="services_all"]').empty();
            // $('select[name="service_id"]').empty();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':'{{csrf_token()}}'
                }
            });
            // alert(id);
            //call country on region selected
            $.ajax({
                dataType: "json",
                url: "/order_service/"+id,
                type: "GET",
                {{--_token: '{{csrf_token()}}',--}}
                success: function (data) {
                    // alert(data);
                    console.log(data);
                    $('select[name="services_all"]').empty();
                    $.each(data, function(key,data){
                        $('select[name="services_all"]').append('<option value="'+ data.id +'">'+ data.name +'</option>');
                    });
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

#########
{{--<script>--}}
{{--    function test()--}}
{{--    {--}}
{{--        var CatId = document.getElementById('category_id');--}}
{{--        var selected = CatId.options[CatId.selectedIndex].value;--}}
{{--        var types =  document.getElementById('type_id');--}}
{{--        var url = "{{route('add.service.GetTypes',['CatId' => 11111])}} ";--}}
{{--        url = url.replace('11111',selected);--}}
{{--        $(document).ready(function()--}}
{{--    {--}}
{{--        $.ajax(--}}
{{--            {--}}
{{--                type: "GET",--}}
{{--                url : url,--}}
{{--                datatype: "json",--}}
{{--                success: function(response)--}}
{{--                { --}}
{{--                    types.innerHTML="<option value=''>أختر النوع</option>";--}}
{{--                    for(var i = 0 ; i < response['types'].length ; i++)--}}
{{--                    {--}}
{{--                        var option = document.createElement("option");--}}
{{--                        option.text = response['types'][i]['type'];--}}
{{--                        option.value = response['types'][i]['id']--}}
{{--                        types.add(option);--}}
{{--                    }--}}
{{--                    --}}
{{--                }--}}
{{--            }--}}
{{--        )--}}
{{--    })--}}

{{--        --}}
{{--    }--}}
{{--    function test2()--}}
{{--    {--}}
{{--        var TypeId = document.getElementById('type_id');--}}
{{--        var selected2 = TypeId.options[TypeId.selectedIndex].value;--}}
{{--        var services =  document.getElementById('service_id');--}}
{{--        console.log(selected2);--}}
{{--        var url = "{{route('GetServices',['TypeId' => 11111])}} ";--}}
{{--        url = url.replace('11111',selected2);--}}
{{--        $(document).ready(function()--}}

{{--    {--}}
{{--        $.ajax(--}}
{{--            {--}}
{{--                type: "GET",--}}
{{--                url : url,--}}
{{--                datatype: "json",--}}
{{--                success: function(response)--}}
{{--                { --}}
{{--                    services.innerHTML="<option value=''>أختر النوع</option>";--}}
{{--                    for(var i = 0 ; i < response['services'].length ; i++)--}}
{{--                    {--}}
{{--                        var option = document.createElement("option");--}}
{{--                        option.text = response['services'][i]['name'];--}}
{{--                        option.value = response['services'][i]['id']--}}
{{--                        services.add(option);--}}
{{--                    }--}}
{{--                    --}}
{{--                    --}}
{{--                }--}}
{{--            }--}}
{{--        )--}}
{{--    })--}}

{{--        --}}
{{--    }--}}
{{--</script>--}}


@endsection