@extends('admin.layouts.app')

@section('content')

    <br>
    <div class="container">
        <style>
            .container{
                margin-left: 3000px;
            }
        </style>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title-left">تعديل المسابقة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('competition.update',$competition[0]->id)}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="العنوان" value="{{old('title', $competition[0]->title)}}" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="سعر المسابقة" value="{{old('price', $competition[0]->price)}}" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="time" name="time" placeholder="مدة المسابقة" value="{{old('time', $competition[0]->time)}}" required>
                    </div>

                    <div class="form-group">
                        <textarea id="description" name="description" class="form-control" placeholder="الوصف" rows="4" required="required" data-error="برجاء ترك لنا الوصف." value="{{old('description', $competition[0]->description)}}"></textarea>
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
@endsection
