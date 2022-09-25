@extends('admin.layouts.master')
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
                        <tr class="text-center">
                            <th style="width: 10px">المسلسل</th>
                            <th style="width: 10px">رقم المستخدم</th>
                            <th>نوع الخدمه</th>
                            <th>نوع المعدن</th>
                            <th> الوصف</th>
                            <th>الكمية</th>
                            <th>السعر للجرام</th>
                            <th>  العملة</th>
                            <th>  حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($trades as $trade)
                        <tr style="text-align: center;vertical-align: middle;">
                            <td>{{$trade->id}}</td>
                            <td>{{$trade->user_id}}</td>
                            <td>
                                @if ($trade->trade_type == 1)
                                بيع
                                @endif
                                @if ($trade->trade_type == 2)
                                شراء
                                @endif
                            </td>
                            <td>
                                <?php
                                    foreach ($metals as $m)
                                        if($trade->metal_type == $m->id)
                                            echo $m->name
                                        ?>
                            </td>
                            <td>{{$trade->description}}</td>
                            <td>{{$trade->quantity}}</td>
                            <td>
                              <?php
                                  foreach ($metals as $m)
                                      if($trade->metal_type == $m->id)
                                          echo $m->price
                                      ?>
                            </td>
                            <td>{{$trade->currency}}</td>
                            <td><a href="{{route('admin.decline.trades',$trade->id)}}" class="btn btn-danger" name="edit" value="edit"><i class="bi bi-trash"></i></a></td>
                            
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

