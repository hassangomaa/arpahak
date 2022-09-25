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
                    
                    <table class="table text-center" style="
                    overflow-x: auto;
                    white-space: nowrap;vertical-align: middle;">
                        <thead>
                        <tr>
                            <th style="width: 10px">المسلسل</th>
                            <th>الاسم</th>
                            <th> البريد الاكتروني</th>
                            <th>رقم الهاتف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                        <tr>
                            <td><?php echo $user->id?></td>
                            <td><?php echo $user->name?></td>
                            <td><?php echo $user->email?></td>
                            <td><?php echo $user->user_phone?></td>

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

