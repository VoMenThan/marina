<?php get_header();?>


<section class="slider-homepage">
    <div class="carousel-main owl-carousel owl-theme owl-loaded">

        <div class="owl-stage-outer">

            <div class="owl-stage">

                <?php

                $banner_slider = get_field("list-slide", $post->ID);

                foreach ($banner_slider as $item):



                    ?>

                    <div class="owl-item">

                        <div class="row">

                            <div class="col-lg-8 offset-lg-4 col-md-12 offset-md-0">

                                <img src="<?php echo $item['hinh_slide'];?>" alt="">

                            </div>

                        </div>



                        <div class="box-info-slider">

                             <?php echo $item['noi_dung'];?>

                        </div>

                    </div>



                <?php endforeach;?>



            </div>

        </div>

    </div>

    <a href="#" class="arrow-bottom animated fadeInDown">
        <span class="text-rotate">Kéo xuống để xem tiếp</span>
    </a>
</section>

<article class="home_page">

    <div class="block-about-us">
        <div class="container-fluid">
            <div id="gioi-thieu" class="row box-introduct">
                <div class="col-lg-7 col-12 pl-0">
                    <div class="slider-intro owl-carousel owl-theme owl-loaded wow fadeInLeft ">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">

                                <?php
                                    $about_slider = get_field("slide_introduct", $post->ID);
                                    foreach ($about_slider as $item):
                                ?>
                                <div class="owl-item">
                                    <img src="<?php echo $item['url'];?>" alt="">
                                </div>
                                <?php endforeach;?>

                            </div>
                        </div>
                    </div>
                    <div class="box-tip-img rotate-right">
                        01 GIỚI THIỆU <span></span>
                    </div>
                    <a class="color-yellow float-right" target="_blank" href="<?php echo get_field("link_map", $post->ID);?>">
                        Tải sơ đồ mặt bằng và tiện tích ngoại khu
                    </a>
                </div>
                <div class="col-lg-5 col-12 mb-4 mb-sm-4 mb-md-0 block-content">

                    <?php echo get_field("introduct_content", $post->ID);?>

                </div>

            </div>

            <div class="row box-introduct-ex">

                <div class="col-lg-8 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <div class="content-hill">
                        <?php echo get_field("introduct_content_ex", $post->ID);?>
                    </div>

                    <img class="d-block img-fluid w-100" src="<?php echo ASSET_URL?>images/marina/img-hill-gray.png" alt="">
                </div>
                <div class="col-lg-4 col-12 order-lg-1 order-0 pl-0">
                    <div class="slider-intro owl-carousel owl-theme owl-loaded wow fadeInRight" >
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php
                                $about_slider_ex = get_field("slide_introduct_ex", $post->ID);
                                foreach ($about_slider_ex as $item):
                                    ?>
                                    <div class="owl-item">
                                        <img src="<?php echo $item['url'];?>" alt="">
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="box-tip-img tip-bottom">
                        01 GIỚI THIỆU <span></span>
                    </div>
                </div>

            </div>

            <div id="vi-tri" class="row box-location">
                <div class="col-lg-6 col-12">
                    <div class="slider-intro owl-carousel owl-theme owl-loaded wow fadeInLeft">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php
                                $slide_local = get_field("slide_local", $post->ID);
                                foreach ($slide_local as $item):
                                    ?>
                                    <div class="owl-item">
                                        <img src="<?php echo $item['url'];?>" alt="">
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="box-tip-img rotate-right">
                        02 VỊ TRÍ <span></span>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content">
                    <?php echo get_field("local_content", $post->ID);?>
                </div>
        </div>


            <div class="row box-utilities">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <?php echo get_field("utilities_content", $post->ID);?>
                </div>
                <div class="col-lg-6 col-12 order-lg-1 order-0">
                    <div class="box-tip-img tip-top">
                        03 TIỆN ÍCH <span></span>
                    </div>
                    <div class="slider-intro owl-carousel owl-theme owl-loaded wow fadeInRight">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <?php
                                $slide_utilities = get_field("slide_utilities", $post->ID);
                                foreach ($slide_utilities as $item):
                                    ?>
                                    <div class="owl-item">
                                        <img src="<?php echo $item['url'];?>" alt="">
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- TIỆN ÍCH NỘI KHU ĐẲNG CẤP-->
            <div id="tien-ich" class="row box-utilities-ex pb-50">
                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content wow fadeInLeft">
                    <img class="img-fluid w-100" src="<?php echo get_field("utilities_local1", $post->ID);?>" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="box-yellow">
                        TIỆN ÍCH NỘI KHU ĐẲNG CẤP
                    </div>

                    <img class="w-100 img-fluid wow fadeInRight" src="<?php echo get_field("utilities_local12", $post->ID);?>" alt="">
                    <div class="box-tip-img tip-bottom">
                        03 TIỆN ÍCH <span></span>
                    </div>
                </div>

            </div>
            <!-- END TIỆN ÍCH NỘI KHU ĐẲNG CẤP-->

            <div class="row box-utilities pb-100">

                <div class="col-lg-6 col-12 text-right">
                    <img class="img-fluid wow fadeInLeft" src="<?php echo get_field("utilities_local13", $post->ID);?>" alt="">
                    <div class="box-tip-img rotate-right">
                        03 TIỆN ÍCH <span></span>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content">

                    <?php echo get_field("utilities_local_content3", $post->ID);?>



                </div>
            </div>

            <div class="row box-utilities pb-100">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">

                    <?php echo get_field("utilities_local_content4", $post->ID);?>



                </div>
                <div class="col-lg-6 col-12 order-lg-1 order-0 wow fadeInRight">
                    <img class="img-fluid " src="<?php echo get_field("utilities_local4", $post->ID);?>" alt="">
                    <div class="box-tip-img rotate-left">
                        03 TIỆN ÍCH <span></span>
                    </div>
                </div>

            </div>

            <!-- VILLAS-->
            <div id="villas" class="row box-utilities box-villas">

                <div class="col-lg-8 col-12 text-right wow fadeInLeft">
                    <img class="img-fluid" src="<?php echo get_field("image_villas", $post->ID);?>" alt="">
                    <div class="box-tip-img rotate-right">
                        04 VILLAS <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-4 mb-sm-4 mb-md-0 block-content">
                    <?php echo get_field("villas_content", $post->ID);?>
                </div>
            </div>
            <!-- END VILLAS-->

            <!-- BIỆT THỰ SONG LẬP MAIA VILLA-->
            <div class="row head-review-building">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <?php echo get_field("content_villas_1", $post->ID);?>


                </div>
                <div class="col-lg-6 order-lg-1 order-0 wow fadeInRight">
                    <img class="img-fluid" src="<?php echo get_field("image_villas_1", $post->ID);?>" alt="">
                    <div class="box-tip-img rotate-left">
                        04 VILLAS <span></span>
                    </div>
                </div>

            </div>

            <div class="row extend-review-building">
                <div class="col-lg-6 text-right">
                    <div class="box-img d-inline-block position-relative mr-5 wow fadeInLeft">
                        <img class="img-fluid" src="<?php echo get_field("image_villas_11", $post->ID);?>" alt="">
                        <div class="title-img text-right p-2"><?php echo get_field("title_villas_11", $post->ID);?></div>
                        <div class="box-tip-img rotate-right">
                            04 VILLAS <span></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 box-padding-top">

                    <div class="box-img d-inline-block position-relative ml-5 wow fadeInRight">
                        <div class="box-tip-img rotate-top">
                            04 VILLAS <span></span>
                        </div>
                        <img class="img-fluid" src="<?php echo get_field("image_villas_12", $post->ID);?>" alt="">
                        <div class="title-img text-right p-2"><?php echo get_field("title_villas_12", $post->ID);?></div>
                    </div>
                </div>

            </div>
            <!-- END BIỆT THỰ SONG LẬP MAIA VILLA-->


            <!-- BIỆT THỰ ĐƠN LẬP MELIA VILLA-->
            <div class="row head-review-building">

                <div class="col-lg-6 col-12 text-right wow fadeInLeft">
                    <img class="img-fluid" src="<?php echo get_field("image_villas_2", $post->ID);?>" alt="">
                    <div class="box-tip-img rotate-right">
                        04 VILLAS <span></span>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content">
                    <?php echo get_field("content_villas_2", $post->ID);?>
                </div>

            </div>

            <div class="row extend-review-building">
                <div class="col-lg-6  text-right box-padding-top wow fadeInLeft">
                    <div class="box-img d-inline-block position-relative mr-5">
                        <img class="img-fluid" src="<?php echo get_field("image_villas_21", $post->ID);?>" alt="">
                        <div class="title-img text-right p-2"><?php echo get_field("title_villas_21", $post->ID);?></div>
                        <div class="box-tip-img rotate-right">
                            04 VILLAS <span></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="box-img d-inline-block position-relative ml-5 wow fadeInRight">
                        <div class="box-tip-img rotate-top">
                            04 VILLAS <span></span>
                        </div>
                        <img class="img-fluid" src="<?php echo get_field("image_villas_22", $post->ID);?>" alt="">
                        <div class="title-img text-right p-2"><?php echo get_field("title_villas_22", $post->ID);?></div>
                    </div>
                </div>


            </div>
            <!-- END BIỆT THỰ ĐƠN LẬP MELIA VILLA-->

            <!-- BIỆT THỰ VIP MERRIL VILLA-->
            <div class="row head-review-building">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <?php echo get_field("content_villas_3", $post->ID);?>
                </div>
                <div class="col-lg-6 order-lg-1 order-0 wow fadeInRight">
                    <img class="img-fluid" src="<?php echo get_field("image_villas_3", $post->ID);?>" alt="">
                    <div class="box-tip-img rotate-left">
                        04 VILLAS <span></span>
                    </div>
                </div>

            </div>

            <div class="row extend-review-building">
                <div class="col-lg-6 text-right">
                    <div class="box-img d-inline-block position-relative mr-5 wow fadeInLeft">
                        <img class="img-fluid" src="<?php echo get_field("image_villas_31", $post->ID);?>" alt="">
                        <div class="title-img text-right p-2"><?php echo get_field("title_villas_31", $post->ID);?></div>
                        <div class="box-tip-img rotate-right">
                            04 VILLAS <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 box-padding-top">
                    <div class="box-img d-inline-block position-relative ml-5 wow fadeInRight">
                        <div class="box-tip-img rotate-top">
                            04 VILLAS <span></span>
                        </div>
                        <img class="img-fluid" src="<?php echo get_field("image_villas_32", $post->ID);?>" alt="">
                        <div class="title-img text-right p-2"><?php echo get_field("title_villas_32", $post->ID);?></div>
                    </div>
                </div>

            </div>
            <!-- END BIỆT THỰ VIP MERRIL VILLA-->


            <!-- VIDEO TIẾN ĐỘ -->
            <div id="tien-do" class="row box-video-review">
                <div class="col-lg-12 block-content text-center">
                    <h2>TIẾN ĐỘ</h2>
                </div>
                <div class="col-lg-12 wow fadeInUp">

                    <!--                    <video width="100%" controls>-->
                    <!--                        <source src="--><?php //echo ASSET_URL?><!--/video/Flycam-Nha-Trang-Hoaprox-2018.mp4" type="video/mp4">-->
                    <!--                        Your browser does not support the video tag.-->
                    <!--                    </video>-->

                    <!--    <video class="video-js vjs-fluid vjs-default-skin vjs-big-play-centered"
                                  controls
                                  preload="auto"
                                  crossorigin="anonymous"
                                  data-setup='{"techOrder": ["youtube", "html5"]}'>
                              <source src="https://youtu.be/yTi4m2b3s0o" type='video/mp4' /></video> -->

                    <iframe width="100%" height="450" class="vjs-big-play-centered" src="<?php echo get_field("link_youtube", $post->ID);?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                </div>

            </div>
            <!-- END VIDEO TIẾN ĐỘ -->


        </div>

    </div>


</article>

<?php get_footer();?>
