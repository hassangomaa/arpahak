@extends('users.layout.app')
@section('content')
{{--        <div id="DMP_1" data-pym-src="//dailymetalprice.com/prices.php"></div>--}}

{{--        <script type="text/javascript" src="//dailymetalprice.com/js/pym.min.js"></script>--}}



    <div class="container">
        <style>
            .container{
                padding-top: 20px;
                margin-left: 3000px;
            }
        </style>

        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title-left">أضافة طلب جديد</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  action="#" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="card-body">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="club_id">القسم <span class="text-danger">*</span> </label>
                            <select onblur="test()" class="form-control" name="category_id" id="category_id">
                                <option value="">أختر القسم</option>
                                @foreach($categories_names as $category)
                                    <option value="{{$category->category_id}}"> {{$category->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="club_id">النوع<span class="text-danger">*</span> </label>
                            <select class="form-control" onblur="test2()" name="type_id" id="type_id">
                                <option value="">أختر النوع</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="club_id">الخدمه<span class="text-danger">*</span> </label>
                            <select class="form-control"  name="service_id" id="service_id">
                                <option value="">أختر الخدمه</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="attachment" name="attachment" placeholder="الكمية " required>
                    </div>
                    


                </div>
                <!-- /.card-body -->
                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @elseif(session()->has('danger_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger_message') }}
                    </div>
                @endif

                <div class="col-12" style="margin-right: 10px">
                    <button type="submit" class="btn btn-primary">طلب الخدمه </button>
                </div>


                <br>
            </form>

        </div>
        <!-- /.card -->
    </div>
    <script>
        function test()
        {
            var CatId = document.getElementById('category_id');
            var selected = CatId.options[CatId.selectedIndex].value;
            var types =  document.getElementById('type_id');
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
        function test2()
        {
            var TypeId = document.getElementById('type_id');
            var selected2 = TypeId.options[TypeId.selectedIndex].value;
            var services =  document.getElementById('service_id');
            console.log(selected2);
            var url = "{{route('GetServices',['TypeId' => 11111])}} ";
            url = url.replace('11111',selected2);
            $(document).ready(function()

        {
            $.ajax(
                {
                    type: "GET",
                    url : url,
                    datatype: "json",
                    success: function(response)
                    { 
                        services.innerHTML="<option value=''>أختر النوع</option>";
                        for(var i = 0 ; i < response['services'].length ; i++)
                        {
                            var option = document.createElement("option");
                            option.text = response['services'][i]['name'];
                            option.value = response['services'][i]['id']
                            services.add(option);
                        }
                        
                        
                    }
                }
            )
        })

            
        }
    </script>

@endsection
