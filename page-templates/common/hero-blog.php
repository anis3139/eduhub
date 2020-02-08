<?php 
$eduhub_banner_image=get_template_directory_uri().'/assets/images/bg_2.jpg';
$eduhub_featured_image=get_the_post_thumbnail_url(null, "large");
if(isset($eduhub_featured_image)){
$eduhub_banner_image= $eduhub_featured_image;
}
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $eduhub_banner_image;?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread"><?php the_title();?></h1>
                <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
            </div>
        </div>
    </div>
</section>
