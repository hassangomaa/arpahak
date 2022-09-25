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
                            <th>نوع المعدن  </th>
                            <th>سعر الشراء</th>
                            <th>سعر البيع</th>
                            <th>تعديل</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($metals as $metal)
                            <tr>
                                <td>{{$metal->id}}</td>
                                <td>{{$metal->name}}</td>
                                <td>{{$metal->sell_price}}</td>
                                <td>{{$metal->buy_price}}</td>
                                <td>
                                  <a href="{{route('edit.metal',$metal->id)}}"  class="btn btn-success" role="button">تعديل</a>
                                    
                                </td>
    
                                <td>
                                  <a href="{{route('delete.metal',$metal->id)}}" class="btn btn-danger" role="button">حذف</a>
                                    
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

