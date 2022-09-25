@extends('admin.layouts.app')

@section('content')

    <br>
    <br>

    <form action="{{route('search.messages')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <div class="form-group row">
                        <label for="date" class="col-form-label col-sm-1">من تاريخ</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control input-sm" id="from" name="from" required/>
                        </div>


                        <label for="date" class="col-form-label col-sm-1">الي تاريخ</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control input-sm" id="to" name="to" required/>
                        </div>

                        <div class="col-sm-2">
                            <button type="submit" class="btn" name="search" title="Search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br>

    </form>
    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                رسائل الشركاء

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>الاسم الاول</th>
                        <th>اسم العائلة</th>
                        <th>الهاتف</th>
                        <th>البريد الالكتروني</th>
                        <th>الرسالة</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($messages as $message)
                        <tr>
                            <td><?php echo $message->id?></td>
                            <td><?php echo $message->guest_first_name?></td>
                            <td><?php echo $message->guest_last_name?></td>
                            <td><?php echo $message->guest_phone?></td>
                            <td><?php echo $message->guest_email?></td>
                            <td><?php echo $message->message?></td>
                            <td>

                                <a href="{{route('show.message.destroy',$message->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @elseif(session()->has('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div>
    @endif


@endsection
