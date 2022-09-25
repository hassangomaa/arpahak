@extends('admin.layouts.app')

@section('content')

    <br>
    <br>

    <!--table of users-->
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                المهام
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">المسلسل</th>
                        <th>المهمة</th>
                        <th>الرابط</th>
                        <th>نوع المهمة</th>
                        <th>سعر المهمة</th>

                        <th>تعديل</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tasks as $task)
                        <tr>
                            <td><?php echo $task->link_id?></td>
                            <td><?php echo $task->link_name?></td>
                            <td><?php echo $task->link_url?></td>
                            <td><?php echo $task->link_type?></td>
                            <td><?php echo $task->link_price?></td>

                            <td>

                                <input type="hidden" name="link_id" value='link_id'>
                                <a href="{{route('task.edit',$task->link_id)}}" class="btn btn-info" name="edit" value="edit"><i class="fas fa-pen"></i></a>

                            </td>

                            <td>

                                    <a href="{{route('task.destroy',$task->link_id)}}" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></a>
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
