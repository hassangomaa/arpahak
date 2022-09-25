@extends('admin.layouts.app')

@section('content')
    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
               الخدمات الحالية
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>الأسم</th>
                        <th>النوع</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>
                                <?php
                                    foreach ($types as $t)
                                        if($t->id == $s->service_type_id)
                                            echo $t->type
                                        ?>
                            </td>

                            

                            <td>

                                <input type="hidden" name="link_id" value='link_id'>
                                <a href="{{route('edit.service',$s->id)}}" class="btn btn-info" name="edit" value="edit"><i class="fas fa-pen"></i></a>

                            </td>

                            <td>

                                <a href="{{route('destroy.service',$s->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></a>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                    


                    </tbody>
                </table>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @elseif(session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->

@endsection
