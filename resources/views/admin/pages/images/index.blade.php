@extends('admin.layouts.app')

@section('content')

    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                الصور المعلقة

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>العنوان</th>
                        <th>السعر</th>
                        <th>الصورة</th>
                        <th>التحقق</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <input id="email"  type="text" name="email" class="form-control" placeholder="أدخل بريدك الألكتروني" required="required" data-error="البريد الاكتروني مطلوب."/>
                        @foreach($all_images as $image)
                            <tr>
                                <td><?php echo $image->id?></td>
                                <td><?php echo $image->title?></td>
                                <td>{{ $image->price }}</td>
                                <td><img src="{{ url('public/Image/'.$image->image) }}" style="height: 175px; width: 250px;"></td>

                                {{--                            <input type="hidden" name="link_id" value='link_id'>--}}
                                <td>
                                    <a href="{{route('approved.image',$image->id)}}" class="btn btn-success" name="confirmed" ><span class="material-icons">تم التحقق</span></a>
                                </td>

                                <td>
                                    <a href="{{route('image.destroy',$image->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->
@endsection
