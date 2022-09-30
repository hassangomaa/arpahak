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
                            <th>الصوره للايصال  </th>
                            <th>الحاله</th>
                            <th>قبول</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                        <tr>
                            <td><?php echo $message->id ?></td>
                            <td><?php echo $message->type ?></td>
                            <td><?php echo $message->created_by ?></td>
                            <td><img  src="{{asset('/uploads/payment/').'/'.$message->image}}" class="zoom me img-fluid" alt="">
                            </td>
                            <style>
                                .zoom {
                                    padding: 0px;
                                    /*background-color: green;*/
                                    transition: transform .2s; /* Animation */
                                    width: 100px;
                                    height: 100px;
                                    margin: 0 auto;
                                }

                                .zoom:hover {
                                    transform: scale(10); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                                }
                            </style>
{{--                            <td>      <a href="#" data-bs-toggle="modal" data-bs-target="#test" class="btn btn-secondary" >عرض</a> </td>--}}
{{--                            <td><a href="{{asset('/uploads/bank/').'/'.$message->image}}"> link </a>  </td>--}}
                            <!-- Modal -->
{{--                                                    <div class="modal fade" dir="rtl" id="test" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
{{--                                                        <div class="modal-dialog">--}}
{{--                                                            <div class="modal-content">--}}
{{--                                                                <div class="modal-header">--}}
{{--                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-body">--}}
{{--                                                                    <div class="row">--}}
{{--                                                                        <div class="col-12 mb-3">--}}
{{--                                                                            <h4 class="text-center">اختر احدي طرق الدفع</h4>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-12 mb-3">--}}
{{--                                                                          <a class="btn btn-primary col-12" href="#" style="background: #F2BA36; border:none;" role="button">--}}
{{--                                                                                 <img  src="{{asset('/uploads/payment/').'/'.$message->image}}" class="zoom me img-fluid" alt="">--}}
{{--                                                                          </a>--}}
{{--                                                                         </div>--}}
{{--                                                                       --}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                            <td>  <?php echo $message->status ?></td>

                             <td><?php echo $message->name ?></td>

                             <td>
                                <form action="{{route('update.traders.messages',$message->id)}}" method="POST">
                                  @csrf
                                    <input  type="submit" class="btn btn-success"  name="accept" value="قبول"  قبول >
                                </form>
                            </td>

                             <td>
                                <form action="{{route('destroy.traders.messages',$message->id)}}" method="POST">
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

