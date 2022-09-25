@extends('admin.layouts.app')
@section('content')
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
                <h3 class="card-title-left">تعديل خدمة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('update.service',$service->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="{{$service->name}}" placeholder="اسم الخدمه" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="descrption" name="descrption" value="{{$service->description}}"  placeholder="وصف الخدمه" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" value="{{$service->url}}" placeholder="  السعر " required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="quantity" name="quantity" value="{{$service->quantity}}" placeholder=" الكمية المتاحه " required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="net_price" name="net_price" value="{{$service->net_price}}" placeholder="  السعر " required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="commission	" name="commission" value="{{$service->commission}}" placeholder="  العموله " required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="currency	" name="currency" value="{{$service->currency}}"  placeholder="  العمله " required>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @elseif(session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>
                @endif
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
