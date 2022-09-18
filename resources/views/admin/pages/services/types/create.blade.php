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
                <h3 class="card-title-left">اضافة نوع للخدمات</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('store.service.subCategory')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type">النوع <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="type" name="type"  required>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="club_id">القسم <span class="text-danger">*</span> </label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">أختر القسم</option>
                                @foreach($categories as $c)
                                    <option @if(old('category_id') == $c->category_id) selected @endif value="{{$c->category_id}}">{{$c->name}}</option>
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
                            <input type="checkbox" name="status" id="status" value="1" {{ old('status') ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mb-3">
                            <br>
                            <label for="active">
                                الصفحة الرئيسية
                            </label>
                            <input type="checkbox" name="home_page" id="home_page" value="1" {{ old('home_page') ? 'checked' : '' }}>
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
