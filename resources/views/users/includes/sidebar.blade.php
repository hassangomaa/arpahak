<aside id="sidebar" class="sidebar" dir="rtl">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('homepage')}}">
          <i class="bi bi-grid ms-2"></i>
          <span>الرئيسية</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="{{route('home')}}">
          <i class="bi bi-grid ms-2"></i>
          <span>لوحة التحكم</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.tasks')}}">
          <i class="bi bi-receipt ms-2"></i>
          <span>المهام </span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#image-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-image ms-2"></i><span>الصور</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="image-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('add.image')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>اضافة صور للمعرض </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('myImages')}}">
              <i class="bi bi-image ms-2"  style="font-size: 20px;"></i>
              <span>عرض الصور</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt ms-2"></i><span>الطلبات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="order-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('add.order')}}">
              <i class="bi bi-plus-lg ms-2"  style="font-size: 20px;"></i>
              <span>اضافة طلب  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('MyOrders')}}">
              <i class="bi bi-receipt ms-2" style="font-size: 20px;"></i>
              <span>  عرض الطلبات </span>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#trade-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-currency-dollar ms-2"></i><span>التداول</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="trade-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('user.add.trade')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>  اضافة عنصر تداول  </span>
            </a>
          </li>

          <li>
            <a class="nav-link collapsed" href="{{route('avilable.trades')}}">
              <i class="bi bi-receipt ms-2"  style="font-size: 20px;"></i>
              <span> عرض التداولات المتاحة  </span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ads-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-badge-ad-fill ms-2"></i><span>الاعلانات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="ads-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('post.ad')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>  اضافة  اعلان  </span>
            </a>
          </li>

        </ul>
      </li>
      
      
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('edit.password')}}">
          <i class="bi bi-pen ms-2"></i>
          <span>تغيير كلمة السر </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('logout')}}">
          <i class="bi bi-box-arrow-in-right ms-2"></i>
          <span>تسجيل الخروج</span>
        </a>
      </li>


    </ul>

  </aside>