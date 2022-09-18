@extends('admin.layouts.app')

@section('content')

    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                رسائل المتسابقين

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
                        <th>كود المسابقة</th>
                        <th>الرسالة</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($messages as $message)
                        <tr>
                            <td><?php echo $message->id ?></td>
                            <td><?php echo $message->first_name ?></td>
                            <td><?php echo $message->last_name ?></td>
                            <td><?php echo $message->phone ?></td>
                            <td><?php echo $message->email ?></td>
                            <td><?php echo $message->competition_id ?></td>
                            <td><?php echo $message->details ?></td>
                            <td>

                                <a href="{{route('competition.message.destroy',$message->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></a>
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
@endsection
