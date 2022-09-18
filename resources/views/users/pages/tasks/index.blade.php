@extends('users.layout.app')
@section('content')
    <br>
    <div class="container">
        <style>
            .container{
                margin-left: 3000px;
            }
            .card-primary:not(.card-outline)>.card-header {
                background-color: #e9ecef;
                border-bottom: 0;
            }
        </style>
        <h3 class="card-title-left" style="color:black">المهام اليومية</h3>
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">

                @foreach($user_tasks as $t)
                    @if($t->link_type == 'facebook')
                        <div id="link_url<?php echo $t->link_id;?>" >

                            <a href="{{route('facebook',$t->link_id)}}"  class="link-success link text-decoration-none">
                                <div class="card mb-3 bg-primary text-white fs-3">
                                    <div class="card-body">
                                        <span class="text-dark fw-bold">  المطلوب : </span><?php echo $t->link_name ?>
                                    </div>

                                    <div class="card-body">
                                        <span class="text-dark fw-bold">  سعر المهمة : </span><?php echo $t->link_price ?>$
                                    </div>

                                </div>
                            </a>

                        </div>
                        <br>
                    @elseif($t->link_type == 'tiktok')
                            <div id="link_url<?php echo $t->link_id;?>" >

                                <a href="{{route('tiktok',$t->link_id)}}"  class="link-success link text-decoration-none">
                                    <div class="card mb-3 bg-primary text-white fs-3">
                                        <div class="card-body">
                                            <span class="text-dark fw-bold">  المطلوب : </span><?php echo $t->link_name ?>
                                        </div>

                                        <div class="card-body">
                                            <span class="text-dark fw-bold">  سعر المهمة : </span><?php echo $t->link_price ?>$
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <br>
                    @elseif($t->link_type == 'youtube_video')
                        <div id="link_url<?php echo $t->link_id;?>" >

                            <a href="{{route('youtube.video',$t->link_id)}}"  class="link-success link text-decoration-none">
                                <div class="card mb-3 bg-primary text-white fs-3">
                                    <div class="card-body">
                                        <span class="text-dark fw-bold">  المطلوب : </span><?php echo $t->link_name ?>
                                    </div>

                                    <div class="card-body">
                                        <span class="text-dark fw-bold">  سعر المهمة : </span><?php echo $t->link_price ?>$
                                    </div>

                                </div>
                            </a>

                        </div>
                        <br>

                    @else
                        <div id="link_url<?php echo $t->link_id;?>" >

                            <a href=""  class="link-success link text-decoration-none">
                                <div class="card mb-3 bg-primary text-white fs-3">
                                    <div class="card-body">
                                        <span class="text-dark fw-bold">  المطلوب : </span><?php echo $t->link_name ?>
                                    </div>

                                    <div class="card-body">
                                        <span class="text-dark fw-bold">  سعر المهمة : </span><?php echo $t->link_price ?>$
                                    </div>

                                </div>
                            </a>

                        </div>
                        <br>
                    @endif

                @endforeach
            </div>
        </div>
    </div>

@endsection

