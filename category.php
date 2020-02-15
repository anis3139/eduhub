<?php get_header();?>
<?php get_template_part("/page-templates/common/hero-blog")?>



<section <?php post_class();?> class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title pt-5"><span class="text-primary"><?php _e('Post Under: ')?></span><?php single_cat_title();?></h2>
                    </div>
                </div>

                <?php 
                while(have_posts()):
                the_post();
                    ?>
                <div class="">
                    <div class="blog-entry">


                        <div class="text bg-white">

                            <h3 class="bg-light text-dark text-center"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
            <div class="row no-gutters my-5">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="block-27 text-center">
                        <?php the_posts_pagination(
                        array(
                        screen_reader_text=>" ",
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>

<?php wp_footer();?>
