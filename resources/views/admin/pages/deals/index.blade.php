@extends('admin.layouts.app')

@section('content')
    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                أنواع التداوﻻت الحالية

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>الاسم  </th>
                        <th> نوع التداول</th>
                        <th>الوصف</th>
                        <th>السعر</th>
                        <th>العمله</th>
                        <th>العموله</th>
                        <th>الكميه</th>
                        <th>الرابط</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                     </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $message)
                        <tr>
                            <td><?php echo $message->id ?></td>

                            <td><?php echo $message->name ?></td>
                            <td><?php echo $message->serviceType->type ?></td>
                            <td><?php echo $message->description ?></td>
                            <td><?php echo $message->net_price ?></td>
                            <td><?php echo $message->currency ?></td>
                            <td><?php echo $message->commission ?></td>
                            <td><?php echo $message->quantity ?></td>
                            <td><?php echo $message->url ?></td>
                             <td>
                                <form action="{{route('edit.service',$message->id)}}" method="POST">
                                    @csrf
                                    <input  type="submit" class="btn btn-success"  name="accept" value="تعديل"  تعديل >
                                </form>
                            </td>

                            <td>
                                <form action="{{route('destroy.service',$message->id)}}" method="POST">
                                    @csrf
                                    <input  type="submit" class="btn btn-danger"  name="delete" value="حذف"   >
                                </form>
                            </td>


                        </tr>
                    @endforeach

                    </tbody>
                </table>
                  @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @elseif(session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->

@endsection
