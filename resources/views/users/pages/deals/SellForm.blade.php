@extends('users.layout.app')
@section('content')
    <br>
    <div class="container">
        <style>
            .container{
                margin-left: 3000px;
            }
            .card-primary:not(.card-outline)>.card-header {
                background-color: #e9ecef;
                border-bottom: 0;
            }
        </style>
        <h3 class="card-title-left" style="color:black">تفضل بالبيع  </h3>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">


                <form method="POST"  action="user.sell.store">
                    @csrf
                    <!--  User service -->
                         <div class="card mb-3 bg-primary text-white fs-3">
                             <div class="card-body">
                                 <span class="text-dark fw-bold">  اﻻسم : {{$t->name}}  </span>


                             </div>

                             <div class="card-body">
                                 <span class="text-dark fw-bold">   الوصف : {{$t->description}}  </span>
                             </div>

                             <div class="card-body">
                                 <span class="text-dark fw-bold">     نوع المعدن : {{$t-> serviceType->type}}  </span>
                             </div>



                             <div class="card-body">
                                 <span class="text-dark fw-bold">   الكميه : {{$t->quantity}}  </span>
                             </div>

                             <div class="card-body">
                                 <span class="text-dark fw-bold">   اللينك : {{$t->url}}  </span>
                             </div>

                             <div class="card-body">
                                 <span class="text-dark fw-bold">   المطلوب : {{$t->net_price}}  </span>
                             </div>

                             <div class="card-body">
                                 <span class="text-dark fw-bold"> العمله : {{$t->currency}} </span>
                             </div>

                             <span class="text-dark fw-bold"> تاريخ نشر التداول : {{$t->created_at}} </span>
                         </div>
                        </div>
                     <br>
                    <input type="submit" class="btn-default" value="موافقة بيع !">
                </form>
            </div>
        </div>
    </div>

@endsection

