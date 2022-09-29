<main id="main" class="main" dir="rtl">
      <div class="pagetitle">
        <h1>الرئيسية</h1>
      </div><!-- End Page Title -->
      <div class="alert alert-warning mt-4" role="alert">
        سيتم أضافة المبالغ الى رصيدك بعد المراجعة والتأكد من إنجاز المهام
    </div>
    
      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card ">
                  <div class="card-body">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#test">
                      <h5 class="card-title info-card"></h5>

                      <div class="d-flex align-items-center">

                        <div class="ps-5">
                          <h6 id ="transaction"> لشحن الرصيد المحفظه</h6>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-auto">
                          <i class="bi bi-check-circle-fill"></i>
                        </div>
                      </div>
                    </a>

                  </div>







                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" dir="rtl" id="test" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-12 mb-3">
                              <h4 class="text-center">اختر احدي طرق الدفع</h4>
                            </div>
                            <div class="col-12 mb-3">
                              <a class="btn btn-primary col-12" href="{{route('paypal-form-charge')}}" style="background: #F2BA36; border:none;" role="button">
                                <img src="{{asset('images/payments-logo/paypal.png')}}" width="20%" class="me img-fluid" alt=""></a>
                            </div>
                            <div class="col-12 mb-3">
                              <a class="btn btn-primary col-12" style="background: white; border-color:black;" href="{{route('vodafone-cash-charge')}}" role="button"><img src="{{asset('images/payments-logo/vodafone.PNG')}}" width="20%" class="img-fluid" alt=""></a>
                            </div>
                            <div class="col-12 mb-3">
                              <a class="btn btn-primary col-12" style="background: white; border-color:black;" href="{{route('bank-transfer-charge')}}" role="button"><img src="{{asset('images/payments-logo/NBE.svg')}}" width="20%" class="img-fluid" alt=""> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
        <div class="row">
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <a href="#">
                      <h5 class="card-title"></h5>
      
                      <div class="d-flex align-items-center">
                        
                        <div class="ps-5">
                          <h6 id ="transaction"> الرصيد :  {{Auth::user()->balance }} EGP</h6>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-auto">
                          <i class="bi bi-currency-dollar"></i>
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
                    <a href="{{route('bag')}}">
                      <h5 class="card-title">قائمه المشتريات</h5>

                      <div class="d-flex align-items-center">

                        <div class="ps-5">
                          <h6 id ="transaction">{{$payments}}</h6>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-auto">
                          <i class="bi bi-bag"></i>
                        </div>
                      </div>
                    </a>
                  </div>

                </div>

              </div>
        </div>
              {{--
              <div class="col-xxl-4 col-md-4">
                <div class="card i
                nfo-card revenue-card">
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
              --}}
              <!-- End Revenue Card -->
    
      
            </div>
          </div><!-- End Left side columns -->
    

    
        </div>
      </section>
    
    </main><!-- End #main -->
