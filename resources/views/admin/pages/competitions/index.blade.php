@extends('admin.layouts.app')

@section('content')
    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                المسابقات

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>العنوان</th>
                        <th>مدة المسابقة</th>
                        <th>سعر المسابقة</th>
                        <th>الوصف</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($competition as $c)
                        <tr>
                            <td><?php echo $c->id?></td>
                            <td><?php echo $c->title?></td>
                            <td><?php echo $c->time?></td>
                            <td><?php echo $c->price?></td>
                            <td><?php echo $c->description?></td>

                            <td>

                                <input type="hidden" name="link_id" value='link_id'>
                                <a href="{{route('competition.edit',$c->id)}}" class="btn btn-info" name="edit" value="edit"><i class="fas fa-pen"></i></a>

                            </td>

                            <td>

                                <a href="{{route('competition.destroy',$c->id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></a>
                                </form>

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
