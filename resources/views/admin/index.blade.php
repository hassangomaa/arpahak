@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <br>
    <br>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $count_users?></h3>

                            <p>المستخدمين</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('users')}}" class="small-box-footer"> ملعومات عنهم <i class="fas fa-arrow-circle-left"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>




@endsection
