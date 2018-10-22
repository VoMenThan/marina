<?php
/**
 * Created by PhpStorm.
 * User: mrtha
 * Date: 10/22/2018
 * Time: 3:26 PM
 */




$args = array(
        'posts_per_page' => 3,
        'offset'=> 0,
        'post_type' => 'tin_tuc',
        'orderby' => 'menu_order',
        'order' =>'asc'
        );
$news_related = get_posts( $args );
$terms_post = get_the_terms( $post->ID, 'danh_muc_tin_tuc' );

get_header();
?>

<section class="category_page">
    <div class="container">
         <?php include(INC."breadcrumb.php");?>


        <article class="content-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <ul class="nav flex-column text-center list-share-social">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10">
                        <div class="content-page">
                            <div class="date-time"><?php echo get_the_date();?></div>
                            <h1><?php echo $post->post_title;?></h1>
                            <h3 class="category"><?php echo $terms_post[0]->name;?></h3>

                            <div class="content-news">
                                <?php echo $post->post_content;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>


        <article class="list-news">
            <div class="title-news-related">TIN KHÁC</div>
            <div class="row">
                <?php foreach ($news_related as $item):
                        $image_featured = get_the_post_thumbnail_url($item->ID);
                        $terms_post = get_the_terms( $item->ID, 'danh_muc_tin_tuc' );
                    ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $image_featured?>" alt="Card image cap">
                            <div class="card-body">
                                <div class="date"><?php echo get_the_date();?></div>
                                <a href="<?php echo get_home_url()."/truyen-thong/". $item->post_name; ?>"><h5 class="card-title"><?php echo $item->post_title;?></h5></a>
                                <span class="category-name"><?php echo $terms_post[0]->name;?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
             <div class="text-center p-5">
                <a class="btn-gradient-slide load-more" href="#" role="button">TẢI THÊM +</a>
            </div>
        </article>

    </div>





</section>

<?php
get_footer();
?>