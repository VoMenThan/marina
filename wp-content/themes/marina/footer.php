
<footer id="footer">

    <div id="lien-he" class="row title-footer">
        <h2 class="col-4 offset-lg-4 offset-6">LIÊN HỆ</h2>
    </div>
    <div class="row content-footer">
        <div class="footer-image col-lg-4 col-md-6 color-sm-12">
            <img class="img-fluid img-footer" src="<?php echo ASSET_URL?>images/marina/img-footer.jpg" alt="">
        </div>
        <div class="col-lg-8 p-lg-0 p-5">
            <p>
                CHỦ ĐẦU TƯ NHA TRANG GREEN HILL CO., LTD <br>
                VP Nha Trang: 117 Nguyễn Xiển, Xã Vĩnh Ngọc, Thành phố Nha Trang. <br>
                VP TP. HCM: 50-52 Hồ Văn Huê, Phường 9, Quận Phú Nhuận, TP. Hồ chí Minh.
            </p>
            <br>


            <a href="tel:(028)38458846">Điện Thoại: (028) 3845 8846</a> <br>
            <a href="tel:0942955399">Hotline: 0942.955.399</a> <br>
            <a href="mailto:marinahillnt@gmail.com">Email: marinahillnt@gmail.com</a>
        </div>
    </div>

    <div class="row content-copyright">
        <div class="col-lg-4 order-lg-0 order-1">
            <p class="copyright-text">
                © Green Hill 2018. All rights reserved.
            </p>
        </div>
        <div class="col-lg-8 order-lg-1 order-0">
            <ul class="nav list-social-footer">
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://www.instagram.com/media.marinahill/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://www.facebook.com/bietthunghiduongtrendoinhatrang/?_rdc=1&_rdr"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://www.youtube.com/channel/UCp5lFfV6-9p9dvYjb4Rmnkw/featured"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer();?>

<script type="text/javascript">

    /*wowjs*/
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
    /*end wowjs*/


    // menu roll
    var myElement = document.querySelector("header");
    var headroom  = new Headroom(myElement);
    headroom.init();

    $(window).scroll(function(){
        if ($(window).scrollTop() >= 100) {
            $('nav#navbar').addClass('fixed-top');
        }
        else {
            $('nav#navbar').removeClass('fixed-top');
        }
    });



    /*============auto open modal=================*/
    $('#modal-notmiss').modal({
        autoOpen: true
    });

    $(document).ready(function () {

        var loop = false;
        if ($(".carousel-main .owl-item").size() > 1){
            loop = true;
        }
        $(".carousel-main").owlCarousel({
            items:1,
            margin:0,
            stagePadding: 0,
            smartSpeed: 1000,
            loop: true,
            nav: false,
            dots: true,
            autoplay: false,
            autoplayTimeout: 5000,
            navClass: ["btn-prev", "btn-next"],
            responsiveClass:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });

        $(".slider-intro").owlCarousel({
            items:1,
            margin:0,
            stagePadding: 0,
            smartSpeed: 1000,
            loop: true,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            navClass: ["btn-prev", "btn-next"],
            responsiveClass:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });

        $('.list-news .card-body').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });

    });

    /*croll js*/
    $(".main-menu .nav-item a[href^='#']").on('click', function(e) {
        // prevent default anchor click behavior
        e.preventDefault();
        // store hash
        var hash = this.hash;
        if($(hash).length <= 0) window.location.href = "<?php echo get_home_url();?>"+hash;
        $("html, body").animate({ scrollTop: $(e.target.hash).offset().top - 40 }, 'slow');

    });




</script>
</body>
</html>