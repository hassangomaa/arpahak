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
                <h3 class="card-title-left">تعديل نوع للخدمات</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                <form  method="POST" action="{{route('update.service.subCategory',$sub_categories[0]->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">النوع <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="type" name="type" value="{{old('type', $sub_categories[0]->type)}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="club_id">القسم <span class="text-danger">*</span> </label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option selected value="0">أختر القسم</option>
{{--                                <?php--}}
{{--                                foreach ($categories_names as $c)--}}
{{--                                    if($t->category_id == $c->category_id)--}}
{{--                                        echo $c->name--}}
{{--                                ?>--}}
                                @foreach($categories_names as $c)

{{--                                    <option @if(old('category_id') == $c->category_id)  @endif value="{{$c->id}}" name="category_id"> {{$c->name}} </option>--}}
                                    <option  value="{{$c->category_id}}" > {{$c->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mb-3">
                            <br>
                            <label for="active">
                                الحالة
                            </label>
                            <input type="checkbox" name="status" id="status" value="1" {{ old('status',$sub_categories[0]->status) ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mb-3">
                            <br>
                            <label for="active">
                                الصفحة الرئيسية
                            </label>
                            <input type="checkbox" name="home_page" id="home_page" value="1" {{ old('home_page',$sub_categories[0]->home_page) ? 'checked' : '' }}>
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
