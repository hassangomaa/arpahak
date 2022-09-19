@extends('users.layout.app')
@section('content')
    <br>
    <div class="container">
        <style>
            .container{
                margin-left: 3000px;
            }
            .card-primary:not(.card-outline)>.card-header {
                background-color: #e9ecef;
                border-bottom: 0;
            }
        </style>
         <!-- general form elements -->
        <br>



                <!-- general form elements -->
                <div class="card  card-primary">
                    <div class="bg-success card-header">
                        <h3 class=" card-title-left"> بيع  عنصر للتداول </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST"  action="{{route('user.sell.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="type">  اضافه اسم <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="type" name="name"  required placeholder=" ">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for=" ">الوصف <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="" name="description"  required placeholder="اضافه وصف  مناسب يزيد من فرصه التداول.">
                                    </div>
                                    <!--
             'user_id'=>'string|required',
             'service_id'=>'numeric|required',
             'attachment'=>'string|required',
             'paid_money'=>'string|required',
             'remain_money'=>'numeric|required',
           -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for=" ">الرابط <span class="text-danger">*</span> </label>
                                        <input type="url" class="form-control" id="" name="url"  required placeholder="ادخل الرابط ">
                                    </div>
                                    <label for="exampleFormControlFile1">ارفق صوره</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="attchment">
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for=" ">الكميه <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="" name="quantity"  required placeholder="ادخل الكميه ">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for=" ">السعر <span class="text-danger">*</span> </label>
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
                                    <label for="club_id"> القسم <span class="text-danger">*</span> </label>
                                    <select class="form-control" name="service_type_id" id="club_id">
                                        <option selected value="0">اختر    </option>
                                        @foreach($data as $d1)
                                            //using services call type from service_types
                                            <option  value="{{$d1->id}}">{{$d1->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="club_id">نوع المعدن   <span class="text-danger">*</span> </label>
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
                            <button type="submit" class="btn btn-success">اضافة</button>
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
    </div>
@endsection

