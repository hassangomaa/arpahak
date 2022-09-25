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
                <h3 class="card-title-left">تعديل القسم</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('update.service.category',$category[0]->category_id)}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="الأسم" value="{{old('name', $category[0]->name)}}" required>
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
