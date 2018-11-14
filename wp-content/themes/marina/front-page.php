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

                            <!-- <?php echo $item['noi_dung'];?>-->



                            <div class="title-slide">

                                <div class="bg-white-transparent">



                                    <p><a href="http://marinahill.vn/truyen-thong/chon-dat-phong-thuy-de-duoc-dai-phu-quy-doi-doi"></a>CHỌN ĐẤT PHONG THỦY ĐỂ ĐƯỢC ĐẠI PHÚ QUÝ ĐỜI ĐỜI<br>

                                    <p class="time" >      Đất làm nhà phải là nơi tụ khí: Người xưa quan niệm vùng đất tụ khí thì phúc mới dày. Đó là vùng đất trước thấp sau cao, không gian phía trước rộng để câu khí vào. Sau khi ở, gia chủ ngày một thăng tiến và có hậu....

                                    </p>

                                </div>




                            </div>

                            <a class="btn-gradient-slide" href="http://marinahill.vn/truyen-thong/chon-dat-phong-thuy-de-duoc-dai-phu-quy-doi-doi" target="_blank" role="button">CHI TIẾT</a>

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
                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-introduct.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-introduct.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-introduct.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-tip-img rotate-right">
                        01 GIỚI THIỆU <span></span>
                    </div>
                    <a class="color-yellow float-right" target="_blank" href="https://drive.google.com/file/d/1YrOo8cc6qzFSMlSEo14EGYNRmucjZbV3/view">
                        Tải sơ đồ mặt bằng và tiện tích ngoại khu
                    </a>
                </div>
                <div class="col-lg-5 col-12 mb-4 mb-sm-4 mb-md-0 block-content">
                    <h2>GIỚI THIỆU</h2>
                    <p>
                        Marina Hill là quần thể biệt thự nghỉ dưỡng đồi đẳng cấp quốc tế với tiện ích khép kín 5 sao đầu tiên nằm trong trung tâm thành phố biển Nha Trang. Dự án không những đem đến một phong cách nghỉ dưỡng thượng lưu, một ngôi nhà thứ hai mơ ước xứng tầm đẳng cấp chủ nhân mà còn là cơ hội đầu tư bền vững cho tương lai. Với mật độ xây dựng chỉ 25%, Marina Hill  là Khu Biệt Thự nghỉ dưỡng duy nhất ở Việt Nam hiện nay được xây dựng  theo xu hướng Go Green & Go Organic. Mỗi biệt thự đều có giấy chứng nhận công trình xanh LEED/LOTUS, có giá trị toàn cầu.
                    </p>
                    <ul>
                        <li class="li">•  Tổng diện tích trên 05 ha</li>
                        <li class="li">
                            •  Tổng diện tích trên 05 ha
                        </li>
                        <li class="li">
                            •  Tổng số biệt thự: 68 căn biệt  thự hiện đại
                        </li>
                    </ul>
                    <br>
                    <img src="<?php echo ASSET_URL?>images/marina/logo-leed.png" alt="">
                    <img src="<?php echo ASSET_URL?>images/marina/logo-lotus.png" alt="">
                </div>

            </div>

            <div class="row box-introduct-ex">

                <div class="col-lg-8 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <div class="content-hill">
                        <p>
                            BIỆT THỰ ĐỒI ĐẲNG CẤP KHÁC BIỆT <br>
                            MÔI TRƯỜNG SỐNG HOÀN HẢO <br>
                            PHONG THỦY VÀNG
                        </p>
                        <a class="btn-gradient-slide" href="#" role="button">CHI TIẾT</a>
                    </div>

                    <img class="d-block img-fluid w-100" src="<?php echo ASSET_URL?>images/marina/img-hill-gray.png" alt="">
                </div>
                <div class="col-lg-4 col-12 order-lg-1 order-0 pl-0">
                    <div class="slider-intro owl-carousel owl-theme owl-loaded wow fadeInRight" >
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/girl-introduct.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/girl-introduct.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/girl-introduct.jpg" alt="">
                                </div>
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
                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-local.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-local.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-local.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-tip-img rotate-right">
                        02 VỊ TRÍ <span></span>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content">
                    <h2>VỊ TRÍ</h2>

                    <h3> MARINA HILL tọa lạc tại NHA TRANG</h3>
                   <p class="font-buc-thu">
                       Thành phố lý tưởng để an cư <br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;và tận hưởng cuộc sống
                   </p>
                    <div class="text-center">
                        <a class="btn-gradient-slide mt-3" href="#" role="button">CHI TIẾT</a>
                    </div>


            </div>
        </div>


            <div class="row box-utilities">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <h2>TIỆN ÍCH</h2>

                    <p>
                        Khu Biệt thự với an ninh khép kín với các tiện ích đẳng cấp từ những thiết bị thông minh trong nhà đến những tiện ích nội khu cần thiết cho cuộc sống hàng ngày : sân tập golf rộng gần 01 ha, sân tennis, phòng tập Gym, Yoga, Spa hiện đại, nhà hàng ẩm thực quốc tế, siêu thị tiện lợi với các thực phẩm sạch , rau quả hữu cơ , trung tâm thương mai mua sắm, hồ bơi vô cực trên sườn đồi, thư viện cà phê sách, sân khấu giải trí….
                    </p>
                    <a class="btn-gradient-slide mt-3" href="#" role="button">CHI TIẾT</a>



                </div>
                <div class="col-lg-6 col-12 order-lg-1 order-0">
                    <div class="box-tip-img tip-top">
                        03 TIỆN ÍCH <span></span>
                    </div>
                    <div class="slider-intro owl-carousel owl-theme owl-loaded wow fadeInRight">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-utilities.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-utilities.jpg" alt="">
                                </div>

                                <div class="owl-item">
                                    <img src="<?php echo ASSET_URL?>images/marina/img-utilities.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- TIỆN ÍCH NỘI KHU ĐẲNG CẤP-->
            <div id="tien-ich" class="row box-utilities-ex pb-50">
                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content wow fadeInLeft">
                    <img class="img-fluid w-100" src="<?php echo ASSET_URL?>images/marina/muti-utilities.png" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="box-yellow">
                        TIỆN ÍCH NỘI KHU ĐẲNG CẤP
                    </div>

                    <img class="w-100 img-fluid wow fadeInRight" src="<?php echo ASSET_URL?>images/marina/utilities-pro.png" alt="">
                    <div class="box-tip-img tip-bottom">
                        03 TIỆN ÍCH <span></span>
                    </div>
                </div>

            </div>
            <!-- END TIỆN ÍCH NỘI KHU ĐẲNG CẤP-->

            <div class="row box-utilities pb-100">

                <div class="col-lg-6 col-12 text-right">
                    <img class="img-fluid wow fadeInLeft" src="<?php echo ASSET_URL?>images/marina/robert-power.png" alt="">
                    <div class="box-tip-img rotate-right">
                        03 TIỆN ÍCH <span></span>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content">

                    <p>
                        Ngoài ra đặc biệt tại Marina Hill cư dân được sở hữu một tiện ích vàng cho các thế hệ con cháu kế thừa đó là các khóa học đào tạo về phát triển nhân cách và tài năng cá nhân của hệ thống trường nổi tiếng John Robert Powers (Mỹ - 1923) .

                    </p>
                    <a class="btn-gradient-slide mt-3" href="#" role="button">CHI TIẾT</a>



                </div>
            </div>

            <div class="row box-utilities pb-100">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">

                    <p>
                        Khu vực tâm linh nằm kế cận Marina Hill với nhiều công trình tâm linh đan xen vào mảng xanh yên tĩnh của núi đồi sẽ là nơi lý tưởng để thực hiện các hoạt động tâm linh, thiền định mỗi ngày, tìm thấy niềm vui an lạc và sự thư thái trong không gian thanh tịnh.
                    </p>
                    <a class="btn-gradient-slide mt-3" href="#" role="button">CHI TIẾT</a>



                </div>
                <div class="col-lg-6 col-12 order-lg-1 order-0 wow fadeInRight">
                    <img class="img-fluid " src="<?php echo ASSET_URL?>images/marina/local-hill.png" alt="">
                    <div class="box-tip-img rotate-left">
                        03 TIỆN ÍCH <span></span>
                    </div>
                </div>

            </div>

            <!-- VILLAS-->
            <div id="villas" class="row box-utilities box-villas">

                <div class="col-lg-8 col-12 text-right wow fadeInLeft">
                    <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/villas.png" alt="">
                    <div class="box-tip-img rotate-right">
                        04 VILLAS <span></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-4 mb-sm-4 mb-md-0 block-content">
                    <h2>VILLAS</h2>
                </div>
            </div>
            <!-- END VILLAS-->

            <!-- BIỆT THỰ SONG LẬP MAIA VILLA-->
            <div class="row head-review-building">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <h3>BIỆT THỰ SONG LẬP MAIA VILLA</h3>

                    <p class="font-buc-thu">
                        Một Phong Cách Sống Đáng Tự Hào
                    </p>
                    <p>
                        Nét đối xứng trong kiến trúc của biệt thự song lập dựa trên cảm nhận sâu sắc mối tâm giao của những đôi bạn doanh nhân thành đạt. Đường nét kiến trúc đương đại mang ý nghĩa kết nối bền vững, Biệt thự Maia Villa quyến rũ trong mọi góc nhìn.
                    </p>
                    <div class="text-center">
                        <a class="btn-gradient-slide mt-3" href="#" role="button">CHI TIẾT</a>
                    </div>


                </div>
                <div class="col-lg-6 order-lg-1 order-0 wow fadeInRight">
                    <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/maia-villa.png" alt="">
                    <div class="box-tip-img rotate-left">
                        04 VILLAS <span></span>
                    </div>
                </div>

            </div>

            <div class="row extend-review-building">
                <div class="col-lg-6 text-right">
                    <div class="box-img d-inline-block position-relative mr-5 wow fadeInLeft">
                        <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/mia-villa-ex1.png" alt="">
                        <div class="title-img text-right p-2">Phòng ăn MAIA VILLA</div>
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
                        <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/mia-villa-ex2.png" alt="">
                        <div class="title-img text-right p-2">Phòng ngủ MAIA VILLA</div>
                    </div>
                </div>

            </div>
            <!-- END BIỆT THỰ SONG LẬP MAIA VILLA-->


            <!-- BIỆT THỰ ĐƠN LẬP MELIA VILLA-->
            <div class="row head-review-building">

                <div class="col-lg-6 col-12 text-right wow fadeInLeft">
                    <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/melia-villa.png" alt="">
                    <div class="box-tip-img rotate-right">
                        04 VILLAS <span></span>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4 mb-sm-4 mb-md-0 block-content">
                    <h3>BIỆT THỰ ĐƠN LẬP MELIA VILLA</h3>

                    <p class="font-buc-thu">
                        Bình  Yên Giữa Thiên Nhiên
                    </p>
                    <p>
                        Một không gian trọn vẹn để thăng hoa phong cách sống đẳng cấp thượng lưu. Biệt thự đơn lập Melia Villa mang đậm dấu ấn thiên nhiên với tầm nhìn khoáng đạt và là sự kết hợp hoàn hảo của mảng xanh cùng óc sáng tạo của con người để đem đến không gian nghỉ dưỡng đáng mơ ước.
                    </p>
                    <a class="btn-gradient-slide mt-3" href="#" role="button">CHI TIẾT</a>
                </div>

            </div>

            <div class="row extend-review-building">
                <div class="col-lg-6  text-right box-padding-top wow fadeInLeft">
                    <div class="box-img d-inline-block position-relative mr-5">
                        <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/melia-villa-ex1.png" alt="">
                        <div class="title-img text-right p-2">Phòng ngủ MELIA VILLA</div>
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
                        <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/melia-villa-ex2.png" alt="">
                        <div class="title-img text-right p-2">Phòng khách MELIA VILLA</div>
                    </div>
                </div>


            </div>
            <!-- END BIỆT THỰ ĐƠN LẬP MELIA VILLA-->

            <!-- BIỆT THỰ VIP MERRIL VILLA-->
            <div class="row head-review-building">
                <div class="col-lg-6 col-12 order-lg-0 order-1 mb-4 mb-sm-4 mb-md-0 block-content">
                    <h3>BIỆT THỰ VIP MERRIL VILLA</h3>

                    <p class="font-buc-thu">
                        Nơi Hội Tụ Những Tin Hoa
                    </p>
                    <p>
                        Với thiết kế cực kỳ tinh tế và tao nhã, từng chi tiết nhỏ được chăm chút tỉ mỉ, nội thất sang trọng, Merrill Villa khẳng định đẳng cấp chủ nhân. Biệt thự sở hữu tầm nhìn bao quát toàn cảnh Marina Hill mang đến cảm giác dễ chịu, đầy thư giãn giữa không gian riêng tư và yên bình.
                    </p>

                    <a class="btn-gradient-slide mt-3" href="#" role="button">CHI TIẾT</a>



                </div>
                <div class="col-lg-6 order-lg-1 order-0 wow fadeInRight">
                    <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/merril-villa.png" alt="">
                    <div class="box-tip-img rotate-left">
                        04 VILLAS <span></span>
                    </div>
                </div>

            </div>

            <div class="row extend-review-building">
                <div class="col-lg-6 text-right">
                    <div class="box-img d-inline-block position-relative mr-5 wow fadeInLeft">
                        <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/merril-villa-ex1.png" alt="">
                        <div class="title-img text-right p-2">Phòng khách MERRIL VILLA</div>
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
                        <img class="img-fluid" src="<?php echo ASSET_URL?>images/marina/merril-villa-ex2.png" alt="">
                        <div class="title-img text-right p-2">Phòng ngủ MERRIL VILLA</div>
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

                    <iframe width="100%" height="450" class="vjs-big-play-centered" src="https://www.youtube.com/embed/yTi4m2b3s0o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                </div>

            </div>
            <!-- END VIDEO TIẾN ĐỘ -->


        </div>

    </div>


</article>

<?php get_footer();?>
