@extends('users.layout.app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- <div class="alert alert-primary mt-4" role="alert">
            قم بدعوة صديق وسيتم اضافة 1 دولارات فى حسابك
            </div> -->

        <h1 class="mt-4">الرئيسية</h1>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item printhide"><a href="index.php">الرئيسية</a></li>
        </ol> -->
        <div class="alert alert-warning mt-4" role="alert">
            سيتم أضافة المبالغ الى رصيدك بعد المراجعة والتأكد من إنجاز المهام
        </div>
                    <h2 class="h2" id="balance"> الرصيد : 0$</h2>
{{--        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">--}}
{{--            <h1 class="h2">قائمة المهام</h1>--}}
{{--            <h2 class="h2" id="ajax"> الرصيد : 0$</h2>--}}
{{--        </div>--}}

{{--        @foreach($links as $link)--}}

{{--            <div id="link_url<?php echo $link->link_id;?>">--}}
{{--                <a href="{{route('youtube.video')}}"  class="link-success link text-decoration-none">--}}
{{--                    <a href="javascript:void(0)" onclick="this.style.display = 'none'; document.getElementById('hidden').style.display = 'block'">--}}
{{--                    <div class="card mb-3 bg-primary text-white fs-3">--}}
{{--                        <div class="card-body">--}}
{{--                            <span class="text-dark fw-bold">  المطلوب : </span><?php echo $link->link_name ?>--}}
{{--                        </div>--}}

{{--                        <div class="card-body">--}}
{{--                            <span class="text-dark fw-bold">  سعر المهمة : </span><?php echo $link->link_price ?>$--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <input type="hidden" id="user_email<?php echo $link->link_id;?>" name="user_email" class="form-control" value="<?php echo Auth::user()?>">--}}
{{--            <input type="hidden" id="link_id<?php echo $link->link_id;?>" class="linkid" name="linkid" class="form-control" value="<?php echo $link->link_id;?>">--}}
{{--            <input type="hidden" id="link_price<?php echo $link->link_price;?>" class="linkprice" name="linkprice" class="form-control" value="<?php echo $link->link_price;?>">--}}

{{--        @endforeach--}}

{{--        <script>--}}
{{--            --}}{{--$(document).ready(function(){--}}
{{--            --}}{{--    $('#link_url<?php echo $link->link_id;?>').on('click',function (){--}}
{{--            --}}{{--        // alert("ok");--}}
{{--            --}}{{--        $('#link_url<?php echo $link->link_id;?>').hide();--}}

{{--            --}}{{--    });--}}
{{--            --}}{{--});--}}

{{--            --}}{{--$(document).ready(function(){--}}
{{--            --}}{{--    $('#link_url<?php echo $link->link_id;?>').click(function () {--}}
{{--            --}}{{--        $(this).remove(); // remove element which is being clicked--}}
{{--            --}}{{--    });--}}
{{--            --}}{{--});--}}


{{--            ////////////////////////////////////////////////--}}

{{--            // var all_hrefs = document.querySelectorAll("a");--}}
{{--            // dd(all_hrefs);--}}
{{--            //--}}
{{--            //--}}
{{--            // // :visited - selector is controlled by browser and you--}}
{{--            // // .visited - class selector is controlled only by you--}}
{{--            // all_hrefs.forEach(function(single_href) {--}}
{{--            //--}}
{{--            //     single_href.addEventListener('click', function(){--}}
{{--            //--}}
{{--            //         this.classList.add('visited');--}}
{{--            //--}}
{{--            //     })--}}
{{--            // });--}}

{{--            /////////////////////////////////////////////////////--}}

{{--            // document.querySelector('a')--}}
{{--            //     .addEventListener('click', function() {--}}
{{--            //         if ( ! this.classList.contains('clicked')) {--}}
{{--            //             this.classList.add('clicked');--}}
{{--            //         }--}}
{{--            //     });--}}
{{--            // function func(e){--}}
{{--            //--}}
{{--            //--}}
{{--            // }--}}
{{--        </script>--}}


    </main>

@endsection
