@extends('users.layout.master')
@section('content')
@include('users.includes.head')
@include('users.includes.sidebar')
<main class="main" id="main">
    <div class="container">
      <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center" dir="rtl">
            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3 w-75">
                <div class="card-body" style="padding:0;">
                    <blockquote class="tiktok-embed" cite="<?php echo $link_url[0]->link_url?>" data-video-id="<?php echo $url_id[5] ?>" style="max-width: 500px;min-width: 350px;">
                        <section>
                                <a target="_blank">
                                </a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
@endsection