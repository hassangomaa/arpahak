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
              <div class="card mb-3 w-100">
                <div class="card-body" style="padding:0;">
                    <div class="row justify-content-center">
                        <div class="col-12 ">
                            <div class="ratio ratio-16x9"  id="player"></div>
                        </div>
                    </div>
                    <script>
                        var id = {!! json_encode($video_id[1]) !!} ;
                        // 2. This code loads the IFrame Player API code asynchronously.
                        var tag = document.createElement('script');
                        
                
                        tag.src = "https://www.youtube.com/iframe_api";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                
                        // 3. This function creates an <iframe> (and YouTube player)
                        //    after the API code downloads.
                        var player;
                        function onYouTubeIframeAPIReady() {
                            player = new YT.Player('player', {
                                videoId: id,
                                playerVars: {
                                    'playsinline': 1
                                },
                                events: {
                                    'onReady': onPlayerReady,
                                    'onStateChange': onPlayerStateChange
                                }
                            });
                        }
                
                        // 4. The API will call this function when the video player is ready.
                        function onPlayerReady(event) {
                            event.target.playVideo();
                        }
                
                        // 5. The API calls this function when the player's state changes.
                        //    The function indicates that when playing a video (state=1),
                        //    the player should play for six seconds and then stop.
                        var done = false;
                        function onPlayerStateChange(event) {
                            if (event.data == YT.PlayerState.PLAYING && !done) {
                                setTimeout(stopVideo, 60*1000);
                                done = true;
                            }
                        }
                        function stopVideo() {
                            player.stopVideo();
                        }
                    </script>


                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
@endsection