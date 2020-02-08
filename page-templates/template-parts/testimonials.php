<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4 text-dark" id="eduhub-testimonials-heading"><?php echo esc_html(get_theme_mod('eduhub_testimonials_heading',__('What Parents Says About Us','eduhub')));?></h2>
                <p id="eduhub-testimonials-description"><?php echo esc_html(get_theme_mod('eduhub_testimonials__description'));?></p>
            </div>
        </div>

        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                           <?php
                        $eduhub_testimonials_posts = new WP_Query( array(
                        'post_type' => 'eduhub_testimonials',
                        'posts_per_page'      => -1,  
                        ) );
                        if( $eduhub_testimonials_posts->have_posts() ):
                        while ( $eduhub_testimonials_posts->have_posts() ):
                        $eduhub_testimonials_posts->the_post();
                        $eduhub_testimonials_iamge=get_the_post_thumbnail_url(null, "full");
                    $eduhub_testimonials_meta= get_post_meta(get_the_ID(),'jurist_testimonials',true);
                    ?>
                    <div class="item">
                     
                        <div class="testimony-wrap d-flex">
                           
                            <div class="user-img mr-4" style="background-image: url(<?php echo esc_url($eduhub_testimonials_iamge);?>)">
                            </div>
                            <div class="text ml-2 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(),30));?></p>
                                <p class="name"><?php the_title();?></p>
                                <span class="position"><?php 
                                    echo esc_html($eduhub_testimonials_meta['t_designation']);?></span>
                            </div>
                           
                        </div>
                    </div>
                     <?php 
                        endwhile;
                        wp_reset_query();
                        endif;
                    ?>
                </div>
            </div>
        </div>
        
    </div>
</section>
