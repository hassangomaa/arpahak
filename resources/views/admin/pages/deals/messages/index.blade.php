@extends('admin.layouts.app')

@section('content')

    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                رسائل المتداولين

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>الاسم  </th>
                        <th> نوع التداول</th>
                        <th>المعدن</th>
                        <th>السعر</th>
                         <th>العمله</th>
                         <th>الحاله</th>
                        <th>قبول</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($messages as $message)
                        <tr>
                            <td><?php echo $message->id ?></td>

 {{--                            <td><?php echo $message->userService->user->name ?></td>--}}
                            <td><?php echo $message->user->name ?></td>
                            <td><?php echo $message->service->name ?></td>
                            <td><?php echo $message->service->description ?></td>
                            <td><?php echo $message->service->net_price ?></td>
                            <td><?php echo $message->service->currency ?></td>
                            <td><?php echo $message->status ?></td>
                             <td>
                                <form action="{{route('metal.message.update',$message->id)}}" method="POST">
                                  @csrf
                                    <input  type="submit" class="btn btn-success"  name="accept" value="قبول"  قبول >
                                </form>
                            </td>

                             <td>
                                <form action="{{route('metal.message.update',$message->id)}}" method="POST">
                                    @csrf
                                    <input  type="submit" class="btn btn-danger"  name="delete" value="حذف"   >
                                </form>
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
