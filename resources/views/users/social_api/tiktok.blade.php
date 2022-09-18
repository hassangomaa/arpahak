@extends('users.layout.app')
@section('content')
    <style>
        blockquote{
            border-left-color: white;
        }
    </style>

    <!--tiktok-->
    <blockquote class="tiktok-embed" cite="<?php echo $link_url[0]->link_url?>" data-video-id="<?php echo $url_id[5] ?>" style="max-width: 500px;min-width: 350px;">
    <section>
            <a target="_blank">
            </a>
        </section>
    </blockquote>


    <script async src="https://www.tiktok.com/embed.js"></script>


@endsection
