@extends('users.layout.app')
@section('content')
{{--        <div id="DMP_1" data-pym-src="//dailymetalprice.com/prices.php"></div>--}}

{{--        <script type="text/javascript" src="//dailymetalprice.com/js/pym.min.js"></script>--}}



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
                <h3 class="card-title-left">أضافة طلب جديد</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  action="{{route('store.order')}}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="password" name="password" autocomplete="off" placeholder="كلمة السر الجديدة" required>
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
