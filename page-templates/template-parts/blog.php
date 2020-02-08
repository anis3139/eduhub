
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
                             <?php
    $eduhub_popular_posts = new WP_Query( array(
        'posts_per_page'      => 3,
        'ignore_sticky_posts' => 1,
    ) );
    while ( $eduhub_popular_posts->have_posts() ):
        $eduhub_popular_posts->the_post();
    ?> 

            <div class="col-md-6 col-lg-4 ftco-animate blog-box">
                 <div class="blog-entry">
                        <a href="<?php the_permalink();?>">
                            <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("eduhub-blog-image",array("class"=>"img-fluid"));
                        }
                        ?>
                        </a>
                        <?php 
                     $eduhub_post_thumbnail= get_the_post_thumbnail();
                    ?>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php echo excerpt('30'); ?></p>
                            
                        </div>
                    </div>
            </div>
             <?php 
        endwhile;
        wp_reset_query();
        ?>
        </div>
    </div>
</section>
