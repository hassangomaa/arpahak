@extends('users.layout.master')
@section('content')
    @include('admin.includes.head')
    @include('admin.includes.sidebar')
    <main class="main" id="main" >
        <div class="container" dir="rtl">
            <section class="section register  d-flex flex-column align-items-center justify-content-center pb-4">
                <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">



                                <div class="card-body pt-4">

                                    <table class="table" style="
                    overflow-x: auto;
                    white-space: nowrap;">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">المسلسل</th>
                                            <th> العمليه  </th>
                                            <th>اﻻيميل الشخصي للمستخدم  </th>
                                            <th>الكميه  </th>
                                            <th>المدفوع  </th>
                                            <th>المتبقي  </th>
                                            <th>الحاله</th>
                                            <th>قبول</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($messages as $message)
                                            <tr>
                                                <td>{{$message->id}} </td>


                                                @foreach($services as $service)
                                                    @if($service->id == $message->service_id)
                                                        <td> {{$service->name }}</td>
                                                    @endif
                                                @endforeach


                                                @foreach($users as $user)
                                                    @if($user->id == $message->user_id)
                                                        <td>{{ $user->email}} </td>
                                                    @endif
                                                @endforeach


                                                 <td><?php echo $message->attachment ?>  </td>
                                                <td><?php echo $message->paid_money ?>  </td>
                                                <td><?php echo $message->remain_money ?>  </td>
                                                <td>  <?php echo $message->status ?></td>
                                                <td><?php echo $message->name ?></td>
                                                <td>
                                                    <form action="{{route('update.order.messages',$message->id)}}" method="POST">
                                                        @csrf
                                                        <input  type="submit" class="btn btn-success"  name="accept" value="قبول"  قبول >
                                                    </form>
                                                </td>

                                                <td>
                                                    <form action="{{route('destroy.order.messages',$message->id)}}" method="POST">
                                                        @csrf
                                                        <input  type="submit" class="btn btn-danger"  name="delete" value="حذف"   >
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach





                                        </tbody>
                                    </table>


                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </section>
        </div>
    </main><!-- End #main -->

@endsection

