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
                            <th>الاسم الاول</th>
                            <th>اسم العائلة</th>
                            <th>الهاتف</th>
                            <th>البريد الالكتروني</th>
                            <th>الرسالة</th>
                            <th>الوضع</th>
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
    
                                    <a href="{{route('show.message.destroy',$message->id)}}" class="btn btn-danger" name="delete" value="delete"><i class="far fa-trash-alt">حذف</i></a>
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

