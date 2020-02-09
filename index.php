<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu")?>
<?php get_template_part("/page-templates/common/hero-blog")?>

<?php 
$eduhub_layout_class="col-md-8";
$eduhub_layout_class_second="col-md-6 col-lg-6 mb-4 mb-lg-6";
if(!is_active_sidebar("sidebar-blog")){
    $eduhub_layout_class="col-md-12";
    $eduhub_layout_class_second="col-md-4 col-lg-4 mb-4 mb-lg-4";
};

?>


<section <?php post_class();?> class="ftco-section bg-light">
    <div class="container  blog-section ">
        <div class="row">

            <?php 
                if(is_active_sidebar("sidebar-blog")):
            ?>
            <div class="col-md-4 col-lg-4">
                <?php 
                         if ( is_active_sidebar( "sidebar-blog" ) ) {
                        dynamic_sidebar( "sidebar-blog" );
                            }
                          ?>
            </div>
             <?php endif; ?>


            <div class="<?php echo esc_attr($eduhub_layout_class); ?> row">


                <?php 
                while(have_posts()):
                the_post();
                    ?>
                <div class="<?php echo esc_attr($eduhub_layout_class_second); ?> blog-box ftco-animate">
                    <div class="blog-entry ">
                        <a href="<?php the_permalink();?>">
                            <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("eduhub-blog-image",array("class"=>"img-fluid"));
                        }
                        ?>
                        </a>
                       
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php echo excerpt('30'); ?></p>
                           
                        </div>
                    </div>
                </div>
                 <?php endwhile;?>
            </div>
           
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
</section>

<?php get_footer();?>

<?php wp_footer();?>

