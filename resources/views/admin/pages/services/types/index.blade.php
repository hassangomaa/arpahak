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
                            <th> النوع</th>
                            <th>القسم </th>
                            <th>الحالة </th>
                            <th>الصفحة الرئيسية</th>
                            <th>تعديل</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($types as $t)
                        <tr>
                            <td><?php echo $t->id?></td>
                            <td><?php echo $t->type?></td>
                            <td>
                                <?php
                                    foreach ($categories_names as $c)
                                        if($t->category_id == $c->category_id)
                                            echo $c->name
                                        ?>
                            </td>

                            <td><?php echo $t->status?></td>
                            <td><?php echo $t->home_page?></td>

                            <td>

                                <input type="hidden" name="link_id" value='link_id'>
                                <a href="{{route('edit.service.subCategory',$t->id)}}" class="btn btn-info" name="edit" value="edit"><i class="bi bi-pencil"></i></a>

                            </td>

                            <td>

                                <a href="{{route('destroy.service.subCategory',$t->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="bi bi-trash"></i></a>
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

