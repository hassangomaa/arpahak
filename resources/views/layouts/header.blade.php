
<header id="site-header" class="header header-1">
    <div >
        <div id="header-wrap" class="box-shadow">
            <div class="row container-fluid">
                <div class="col-lg-12">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="{{route('index')}}">
{{--                            <img id="logo-img" class="img-fluid" src="" alt="">--}}
                            <img src="{{URL::asset('images/arpahak_logo.jpeg')}}" class="rounded-circle" alt="" width="75" height="75">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <!-- Left nav -->
                            <ul class="nav navbar-nav mx-auto">
                                <!-- Home -->
{{--                                 <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'index') active @endif" href="{{route('home')}}">EGP:{{Auth::user()->balance}}</a></li>--}}
                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'index') active @endif" href="{{route('homepage')}}">الرئيسية</a></li>
                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'index') active @endif" href="{{route('ads')}}">الاعلانات</a></li>
                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'show.competitions') active @endif" href="{{route('show.competitions')}}">المسابقات</a></li>
                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'home.services') active @endif" href="{{route('home.services')}}">الخدمات</a></li>
                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'home.trading') active @endif" href="{{route('home.trading')}}">التداول</a></li>
                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'gallery') active @endif" href="{{route('gallery')}}"> معرض الصور</a></li>
                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'share.us') active @endif"  href="{{route('share.us')}}">كن شريك</a></li>
{{--                                <li class="nav-item"> <a class="nav-link @if(Route::current()->getName() == 'trading') active @endif"  href="{{route('trading')}}">التداول</a></li>--}}

                            </ul>

                            @guest
                                <a class="btn  btn-theme btn-primary" href="{{route('login')}}" type="submit">تسجيل الدخول</a>

                            @else
{{--                                <div class="btn-group">--}}
{{--                                    <a type="button" class="btn btn-theme rounded-right"></a>--}}
{{--                                    <button type="button" class="btn btn-theme rounded-right dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <span class="sr-only">Toggle Dropdown</span>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu">--}}
{{--                                        <a class="dropdown-item" href=""></a>--}}
{{--                                        <a class="dropdown-item" href=""></a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
                                <li class="nav dropdown"> <a class="btn btn-theme rounded-right" href="#" data-bs-toggle="dropdown">مرحبا , {{Auth::user()->name}}</a>
                                    <ul class="dropdown-menu">

                                        <li><a href="{{route('home')}}">لوحة التحكم</a>
                                        </li>
                                        <li><a href="{{route('logout')}}">خروج</a>
                                        </li>

                                    </ul>
                                </li>
                            @endguest
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
@if ($errors->any())
    <body class="main">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="danger">خطا حاول مره اخري</h2>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
    </body>
@endif
<!--header end-->

