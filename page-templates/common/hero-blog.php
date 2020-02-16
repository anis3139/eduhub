<?php if(is_home()) { ?>
    <?php
        $page_for_posts = get_option( 'page_for_posts' );
        $src = get_the_post_thumbnail_url( $page_for_posts, 'full' );
    ?>
<?php } else {
    $src = get_the_post_thumbnail_url($post->ID, 'full' );
}
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url( '<?php echo $src; ?>' );">
    <div class=""></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread"><?php the_title();?></h1>
                <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                <p  id="eduhub-apply-now-button"><a href="<?php echo esc_html(get_theme_mod('eduhub_apply_now_url'));?>" class="btn btn-secondary px-3 py-2 mt-5"><?php echo esc_html(get_theme_mod('eduhub_apply_now_button',__('Apply Now','eduhub')));?></a></p>
            </div>
        </div>
    </div>
</section>


