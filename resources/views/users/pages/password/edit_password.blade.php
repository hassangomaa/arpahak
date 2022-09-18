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
                <h3 class="card-title-left">تغيير كلمة السر</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  action="{{route('update.password')}}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="كلمة السر الجديدة" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="off" placeholder="تأكيد كلمة السر" required>
                    </div>


                </div>
                <!-- /.card-body -->
                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @elseif(session()->has('danger_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger_message') }}
                    </div>
                @endif

                <div class="col-12" style="margin-right: 10px">
                    <button type="submit" class="btn btn-primary" id="Update" name="Update">تحديث </button>
                </div>


                <br>
            </form>

        </div>
        <!-- /.card -->
    </div>
@endsection
