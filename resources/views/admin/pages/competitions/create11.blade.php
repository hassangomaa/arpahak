@extends('admin.layouts.app')

@section('content')
    <br>
    {{--    <main class="col-md px-md-5">--}}
    {{--        <form  class="row g-3 text-white bg-dark p-2 mt-2" action="" method="post" enctype='multipart/form-data'>--}}

    {{--            <div class="col-12">--}}
    {{--                <label for="linkname" class="form-label">المهمة</label>--}}
    {{--                <input type="text" class="form-control" id="linkname" name="linkname" placeholder=" المهمة">--}}
    {{--            </div>--}}
    {{--            <div class="col-12">--}}
    {{--                <label for="linkurl" class="form-label"> رابط المهمة</label>--}}
    {{--                <input type="text" class="form-control" id="linkurl" name="linkurl" placeholder="رابط المهمة">--}}
    {{--            </div>--}}
    {{--            <div class="col-12">--}}
    {{--                <label for="linkprice" class="form-label">سعر المهمة</label>--}}
    {{--                <input type="text" class="form-control" id="linkprice" name="linkprice" placeholder="سعر المهمة">--}}
    {{--            </div>--}}

    {{--            <div class="col-12">--}}
    {{--                <button type="submit" class="btn btn-primary" id="SubmitBtn" name="SubmitBtn">اضافة</button>--}}
    {{--            </div>--}}
    {{--            <?php if(isset($msg)) {echo $msg; } ?>--}}
    {{--        </form>--}}
    {{--    </main>--}}

    <div class="container">
        <style>
            .container{
                margin-left: 3000px;
            }
        </style>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title-left">اضافة المسابقة</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  method="POST" action="{{route('add.competition')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">

                        <input type="text" class="form-control" id="title" name="title" placeholder="العنوان" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="سعر المسابقة" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="time" name="time" placeholder="مدة المسابقة" required>
                    </div>

                    <div class="form-group">
                        <textarea id="description" name="description" class="form-control" placeholder="الوصف" rows="4" required="required" data-error="برجاء ترك لنا الوصف."></textarea>
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
