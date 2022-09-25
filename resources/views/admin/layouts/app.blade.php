<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ارباحك</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->

    <!-- Logo of arpahak -->
    <link rel = "icon" type = "image/svg" href = "{{URL::asset('images/sack-dollar-solid.svg')}}">


    <link rel="stylesheet" href="{{URL::asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{URL::asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{URL::asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{URL::asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{URL::asset('dist/css/custom.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.includes.header')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
            <img src="{{URL::asset('images/arpahak_logo.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">ارباحك</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="{{route('admin.dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                لوحة التحكم

                            </p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                المهام
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add.tasks')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة مهمة</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('all.tasks')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>المهام الحالية</p>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                المسابقات
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add.new.competition')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة مسابقة</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('competitions')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>المسابقات الحالية</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('show.competition.messages')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>رسائل المتسابقين</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                الخدمات
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add.service.category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة قسم</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('add.service.subCategory')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة نوع للخدمات</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('add.service')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>أضافة خدمة</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('service.categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>الأقسام الحالية</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('service.subCategory')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>أنواع الخدمات الحالية</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('services.list')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>الخدمات الحالية</p>
                                </a>
                            </li>


                        </ul>
                    </li>





                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                الصور
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('confirm.images')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>الصور المعلقة</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('accepted.images')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>الصور المقبولة</p>
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a href="" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>الصور المرفوضة</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                المتداول
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <!--      ## add to the service type   -->
                                <a href="{{route('add.services')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة عنصر تداول</p>
                                </a>
                            </li>
                        <li class="nav-item">
                                <!--  return Sub Category  -->
                                <a href="{{route('show.metals')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>التداوﻻت الحالية</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('show.metal.messages')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>رسائل المتداوليين</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                الطلبات
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                                <a href="{{route('ShowOrders')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        عرض الطلبات المعلقة
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{route('ShowAcceptedOrders')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        عرض الطلبات المقبولة
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{route('ShowDeclinedOrders')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        عرض الطلبات المرفوضة
                                    </p>
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a href="" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>الصور المرفوضة</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}

                        </ul>
                    </li>
                    
                    
                    

                    <li class="nav-item has-treeview">
                        <a href="{{route('users')}}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                المستخدمين
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="{{route('show.messages')}}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                رسائل الشركاء
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a class="nav-link" href="{{route('admin.logout')}}">
                            <i class="nav-icon fa fa-sign-out"></i>
                            خروج
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">

        @yield('content')

    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2022 Arpahak</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>

    <script src="{{URL::asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{URL::asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 rtl -->
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{URL::asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{URL::asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{URL::asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{URL::asset('plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{URL::asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{URL::asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{URL::asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{URL::asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{URL::asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{URL::asset('dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{URL::asset('dist/js/demo.js')}}"></script>
</body>
</html>
