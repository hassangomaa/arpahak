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
                <h3 class="card-title-left">اضافة  للتداول </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('add.services.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">نوع التداول <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="type" name="name"  required placeholder="عمليه بيع / عمليه شراء ">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">الوصف <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="" name="description"  required placeholder="اضافه وصف  مناسب يزيد من فرصه التداول.">
                            </div>
                        </div>
                                 <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">الرابط <span class="text-danger">*</span> </label>
                                <input type="url" class="form-control" id="" name="url"  required placeholder="ادخل الرابط ">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">الكميه <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="" name="quantity"  required placeholder="ادخل الكميه ">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">السعر <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="" name="net_price"  required placeholder="ادخل السعر ">
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">العموله <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="" name="commission"  required placeholder="ادخل العموله المطلوبه للجرام الواحد ">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">نوع العمله <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="" name="currency"  required placeholder="ادخل العمله المناسبه للدفع ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="club_id">القسم <span class="text-danger">*</span> </label>
                            <select class="form-control" name="service_type_id" id="club_id">
                                <option selected value="0">اختر نوع الخدمه المناسبه للتداول </option>
                                @foreach($service as $d)
                                    //using services call type from service_types
                                     <option  value="{{$d->id}}">{{$d->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>





                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">اضافة</button>
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
@endsection
