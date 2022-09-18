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
                <h3 class="card-title-left">تعديل المهمة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('task.update',$link[0]->link_id)}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="link_name" name="link_name" placeholder="المهمة" value="{{old('link_name', $link[0]->link_name)}}" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="link_url" name="link_url" placeholder="رابط المهمة" value="{{old('link_url', $link[0]->link_url)}}" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="link_price" name="link_price" placeholder="سعر المهمة" value="{{old('link_price', $link[0]->link_price)}}" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="link_type" name="link_type" placeholder="نوع المهمة" value="{{old('link_price', $link[0]->link_type)}}" required>
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
