<main id="main" class="main" dir="rtl">
      <div class="pagetitle">
        <h1>الرئيسية</h1>
      </div><!-- End Page Title -->
      <section class="section dashboard">
        <div class="row">
    
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">

              <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <a href="#">
                      <h5 class="card-title">المستخدمين</h5>
      
                      <div class="d-flex align-items-center">
                        
                        <div class="ps-5">
                          <h6 id ="transaction">{{$count_users}}</h6>      
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-auto">
                          <i class="bi bi-people-fill"></i>
                        </div>
                      </div>
                    </a>
                  </div>
    
                </div>
                
              </div>
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <a href="#">
                      <h5 class="card-title">الصور</h5>
      
                      <div class="d-flex align-items-center">
                        
                        <div class="ps-5">
                          <h6 id ="transaction">{{$images}}</h6>      
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-auto">
                          <i class="bi bi-images"></i>
                        </div>
                      </div>
                    </a>
                  </div>
    
                </div>
                
              </div>
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <a href="#">
                      <h5 class="card-title">الطلبات</h5>
      
                      <div class="d-flex align-items-center">
                        
                        <div class="ps-5">
                          <h6 id ="transaction">{{$orders}}</h6>      
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-auto">
                          <i class="bi bi-receipt"></i>
                        </div>
                      </div>
                    </a>
                  </div>
    
                </div>
                
              </div>
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <a href="#">
                      <h5 class="card-title">التداولات</h5>
      
                      <div class="d-flex align-items-center">
                        
                        <div class="ps-5">
                          <h6 id ="transaction">{{$trades}}</h6>      
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-auto">
                          <i class="bi bi-cash-stack"></i>
                        </div>
                      </div>
                    </a>
                  </div>
    
                </div>
                
              </div>
              
              <!-- End Revenue Card -->
    
      
            </div>
          </div><!-- End Left side columns -->
    

    
        </div>
      </section>
    
    </main><!-- End #main -->
