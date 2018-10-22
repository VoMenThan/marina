<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        <?php wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo ASSET_URL;?>images/marina/favicon.png">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();?>

</head>
<body>
<header class="headroom">
    <nav id="navbar" class="<?php if(uri_segment(0)== '' || uri_segment(0)== 'contact-us')echo 'fixed-top home'; else echo ' normal ';?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 navbar navbar-expand-lg <?php echo (uri_segment(0)== 'contact-us'? 'circle': '');?>">
                    <div class="site-logo">
                        <a class="navbar-brand" href="<?php echo get_home_url();?>">
                            <img src="<?php echo ASSET_URL;?>images/marina/logo-marina-hill.png" class="img-fluid">
                        </a>
                    </div>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBanVien" aria-controls="navbarBanVien" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarBanVien">
                        <ul class="navbar-nav main-menu">
                            <li class="nav-item active">
                                <a href="#gioi-thieu" class="nav-link waves-effect waves-light">
                                    GIỚI THIỆU
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#vi-tri" class="nav-link waves-effect waves-light">
                                    VỊ TRÍ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tien-ich" class="nav-link waves-effect waves-light">
                                    TIỆN ÍCH
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#villas" class="nav-link waves-effect waves-light">
                                    VILLAS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tien-do" class="nav-link waves-effect waves-light">
                                    TIẾN ĐỘ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo get_home_url();?>/truyen-thong" class="nav-link waves-effect waves-light">
                                    TRUYỀN THÔNG
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#lien-he" class="nav-link waves-effect waves-light">
                                    LIÊN HỆ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>