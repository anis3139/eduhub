<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu")?>
<?php get_template_part("/page-templates/common/hero")?>



<section <?php post_class();?> class="ftco-section bg-light">
    <div class="container">
        <div class="text-center mt-3">
            <?php
        echo get_search_form();
        ?>
        </div>
        <div class="search-result text-center mt-3">
            <?php
        if(is_search()){
        ?>
            <h3><span class="text-primary"><?php _e("You searched for:","eduhub") ?></span> <?php the_search_query(); ?></h3>
            <?php
         }
        ?>
        </div>
        <div class="posts single-page">
            <?php
        if ( ! have_posts() ):
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 p-3 text-center">
                        <h4 class=" bg-gradient-warning text-danger font-weight-bold">
                            <?php _e('No result found','eduhub'); ?>
                        </h4>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">


                <?php 
                while(have_posts()):
                the_post();
                    ?>
                <div class="co<?php echo esc_attr($eduhub_layout_class_second); ?>  blog-section ftco-animate">
                    <div class="blog-entry">


                        <div class="text bg-white p-4">
                            <a href="<?php the_permalink();?>"><h2 class="text-center text-primary"><?php the_title();?></h2></a>
                            <p class="text-justify mt-5"><?php the_content();?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>

        </div>
    </div>
</section>

<?php get_footer();?>

<?php wp_footer();?>
