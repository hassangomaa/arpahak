<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center pe-4 " dir="rtl">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route("index")}}" class="logo d-flex align-items-center">
        <img src="{{asset('images/arpahak_logo.jpeg')}}"style="max-height: 60px;" alt="">
      </a>
    </div><!-- End Logo -->
    <nav class="header-nav me-auto">
      <i class="bi bi-list toggle-sidebar-btn"></i>

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
@if ($errors->any())
    <body class="main">
        <h2>خطا حاول مره اخري</h2>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} خطا حاول مره اخري</li>
            @endforeach
        </ul>
    </div>
    </body>
@endif
