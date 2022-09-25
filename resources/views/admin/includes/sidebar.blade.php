<aside id="sidebar" class="sidebar" dir="rtl">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
          <i class="bi bi-grid ms-2"></i>
          <span>الرئيسية</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tasks-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt ms-2"></i><span>المهام</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="tasks-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('add.tasks')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>اضافة مهمة  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('all.tasks')}}">
              <i class="bi bi-card-list ms-2" style="font-size: 20px;"></i>
              <span> المهام الحالية  </span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#compettion-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt ms-2"></i><span>المسابقات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="compettion-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('add.new.competition')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>اضافة مسابقة  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('competitions')}}">
              <i class="bi bi-card-list ms-2" style="font-size: 20px;"></i>
              <span> المسابقات الحالية  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('show.competition.messages')}}">
              <i class="bi bi-chat-left-text ms-2" style="font-size: 20px;"></i>
              <span>  رسائل المتسابقين  </span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt ms-2"></i><span>الخدمات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="services-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('add.service.category')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>اضافة قسم  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('add.service.subCategory')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>اضافة نوع للخدمات  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('add.service')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>اضافة خدمة  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('service.categories')}}">
              <i class="bi bi-card-list ms-2" style="font-size: 20px;"></i>
              <span> الاقسام الحالية  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('service.subCategory')}}">
              <i class="bi bi-card-list ms-2" style="font-size: 20px;"></i>
              <span> انواع الخدمات الحالية  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('services.list')}}">
              <i class="bi bi-card-list ms-2" style="font-size: 20px;"></i>
              <span> الخدمات الحالية  </span>
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
            <a class="nav-link collapsed" href="{{route('add.metal')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>  اضافة  معدن  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('show.metal')}}">
              <i class="bi bi-receipt ms-2" style="font-size: 20px;"></i>
              <span>  عرض المعادن </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('add.trade')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>  اضافة عنصر تداول  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('admin.pending.trades')}}">
              <i class="bi bi-cash-stack ms-2" style="font-size: 20px;"></i>
              <span>   التداولات الحالية  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('show.traders.messages')}}">
              <i class="bi bi-chat-left-text ms-2" style="font-size: 20px;"></i>
              <span>    رسائل المتداولين  </span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#images-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-images ms-2"></i><span>الصور</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="images-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('pending.images')}}">
              <i class="bi bi-images ms-2" style="font-size: 20px;"></i>
              <span> الصور المعلقة  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('accepted.images')}}">
              <i class="bi bi-images ms-2" style="font-size: 20px;"></i>
              <span>  الصور المقبولة  </span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt ms-2"></i><span>الطلبات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="orders-nav" class="nav-content collapse " style="margin-right: 1rem" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" href="{{route('ShowOrders')}}">
              <i class="bi bi-receipt ms-2" style="font-size: 20px;"></i>
              <span> الطلبات المعلقة  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('ShowAcceptedOrders')}}">
              <i class="bi bi-receipt ms-2" style="font-size: 20px;"></i>
              <span>  الطلبات المقبولة  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('ShowDeclinedOrders')}}">
              <i class="bi bi-receipt ms-2" style="font-size: 20px;"></i>
              <span>  الطلبات المرفوضة  </span>
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
          <li>
            <a class="nav-link collapsed" href="{{route('admin.create.adcategory')}}">
              <i class="bi bi-plus-lg ms-2" style="font-size: 20px;"></i>
              <span>  اضافة  قسم  </span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" href="{{route('pending.ads')}}">
              <i class="bi bi-badge-ad-fill ms-2"  style="font-size: 20px;"></i>
              <span>عرض الاعلانات المعلقة</span>
            </a>
          </li>
        </ul>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('users')}}">
          <i class="bi bi-people-fill ms-2"></i>
          <span> المستخدمين </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('show.messages')}}">
          <i class="bi bi-chat-left-text ms-2"></i>
          <span>رسائل الشركاء</span>
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