@extends('admin.layouts.app')

@section('content')
    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
               الخدمات الحالية
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>نوع الخدمه</th>
                        <th>الكمية</th>
                        <th>الحاله</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>
                                <?php
                                    foreach ($services as $s)
                                        if($s->id == $order->service_id)
                                            echo $s->name
                                        ?>
                            </td>
                            <td>{{$order->attachment}}</td>
                            <td>{{$order->status}}</td>


                            
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
