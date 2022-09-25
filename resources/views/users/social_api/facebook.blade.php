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
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div id="fb-root "></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0&appId=1309131736259010&autoLogAppEvents=1" nonce="3MbwWWun"></script>
                            <div class="fb-page w-100" data-href="<?php echo $link_url[0]->link_url?>" data-tabs="timeline" data-width="500px" data-height="730px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="<?php echo $link_url[0]->link_url?>" class=" fb-xfbml-parse-ignore ">
                                    <a href="<?php echo $link_url[0]->link_url?>">CodingPost</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
@endsection