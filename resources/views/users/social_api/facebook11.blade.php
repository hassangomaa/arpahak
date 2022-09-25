@extends('users.layout.app')
@section('content')
    <style>
        .fb-page{
            margin-right: 470px;
        }


    </style>
{{--    <h1 class="">مهام الفيسبوك</h1>--}}


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0&appId=1309131736259010&autoLogAppEvents=1" nonce="3MbwWWun"></script>

    <div class="fb-page" data-href="<?php echo $link_url[0]->link_url?>" data-tabs="timeline" data-width="500px" data-height="730px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="<?php echo $link_url[0]->link_url?>" class="fb-xfbml-parse-ignore">
            <a href="<?php echo $link_url[0]->link_url?>">CodingPost</a>
        </blockquote>
    </div>



<!--tiktok-->
{{--<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@ahmedselim910/video/7128410168903077125" data-video-id="7128410168903077125" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@ahmedselim910" href="https://www.tiktok.com/@ahmedselim910?refer=embed">@ahmedselim910</a> <p>هتعرفي تبقي رقيقة معاه  هي :</p> <a target="_blank" title="♬ original sound - Ahmed Selim" href="https://www.tiktok.com/music/original-sound-7128410226555177733?refer=embed">♬ original sound - Ahmed Selim</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>--}}

@endsection

