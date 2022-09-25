@extends('users.layout.app')

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
                <h3 class="card-title-left">اضافة صورة للمعرض</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('store.image')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <input value="{{old('title')}}" type="text" class="form-control" id="title" name="title" placeholder="العنوان" required>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="form-group">
                        <input type="number" value="{{old('price')}}" step="0.01" class="form-control" placeholder="السعر" id="price" name="price" min="0">
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
