<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu")?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri()?>./assets/images/404_not_found.png');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="search text-danger font-weight-bold"><?php _e('Search Results...','eduhub');?></h1>
            </div>
        </div>
    </div>
</section>

<section <?php post_class();?> class="ftco-section bg-light">
    <div class="container">
        <div class="row">




            <div class="col-md-10 offset-md-1">


                <div class="col-lg-12 ftco-animate p-5 m-5">
                    <h1 class="text-uppercase" data-aos="fade-up" data-aos-delay="300">
                        <?php
        _e( "Sorry! We couldn't find what you were looking for", "eduhub" );
   ?>
                    </h1>

                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer();?>

<?php wp_footer();?>
