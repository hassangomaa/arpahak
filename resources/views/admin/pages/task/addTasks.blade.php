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
                <h3 class="card-title-left">اضافة المهمة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('add.new.task')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">

                        <input type="text" class="form-control" id="link_name" name="link_name" placeholder="المهمة" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="link_url" name="link_url" placeholder="رابط المهمة" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="link_price" name="link_price" placeholder="سعر المهمة" required>
                    </div>

                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="link_type" required>
                            <option name="link_type" selected>نوع المهمة</option>
                            <option name="link_type" value="facebook">facebook</option>
                            <option name="link_type" value="tiktok">tiktok</option>
                            <option name="link_type" value="youtube">youtube</option>
                        </select>
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
