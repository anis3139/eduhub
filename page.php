<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu")?>
<?php get_template_part("/page-templates/common/hero")?>



<section <?php post_class();?> class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            


            <div class="col-md-10 offset-md-1">


                <?php 
                while(have_posts()):
                the_post();
                    ?>
                <div class="co<?php echo esc_attr($eduhub_layout_class_second); ?>  blog-section ftco-animate">
                    <div class="blog-entry">
                        <a href="<?php the_permalink();?>">
                            <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("full",array("class"=>"img-fluid"));
                        }
                        ?>
                        </a>
                        
                        <div class="text bg-white p-4">
                           
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

