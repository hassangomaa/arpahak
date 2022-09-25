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
                            <th> الاسم الأول</th>
                            <th>اسم العائلة</th>
                            <th> الهاتف </th>
                            <th>البريد الالكتروني </th>
                            <th>كود المسابقة </th>
                            <th> الرسالة </th>
                            <th> حذف </th>

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

                                <a href="{{route('competition.message.destroy',$message->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="bi bi-trash"></i></a>
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

