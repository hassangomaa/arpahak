@extends('users.layout.master')
@section('content')
    @include('admin.includes.head')
    @include('admin.includes.sidebar')
    <main class="main" id="main" >
        <div class="container" dir="rtl">
            <h2>قائمه بمحاوﻻت الشراء للمستخدمين</h2>

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
                                            <th>رقم العمليه  </th>
                                            <th>اﻻيميل الشخصي للمستخدم  </th>
                                             <th>تكلفه</th>
                                             <th>الحاله</th>
                                            <th>قبول</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($payments as $payment)
                                            <tr>
                                                <td><?php echo $payment->id ?></td>
                                                <td><?php echo $payment->payment_id ?></td>
                                                <td><?php echo $payment->payer_email ?></td>
                                                <td><?php echo $payment->amount.$payment->currency ?>  </td>
                                                <td>  <?php echo $payment->payment_status ?></td>

                                                <td>
                                                    <form action="{{route('update.payment.messages',$payment->id)}}" method="POST">
                                                        @csrf
                                                        <input  type="submit" class="btn btn-success"  name="accept" value="قبول"  قبول >
                                                    </form>
                                                </td>

                                                <td>
                                                    <form action="{{route('destroy.payment.messages',$payment->id)}}" method="POST">
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
    @if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif
    @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif
@endsection

