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
    
                </div>
              </div>
            </div>
            
            
        </div>
      </section>
    </div>
  </main><!-- End #main -->

@endsection

