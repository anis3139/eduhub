 <!--CLIENT AREA-->
 <section class="ftco-section">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  text-center heading-section ftco-animate">
                 <h2 class="mb-4 text-center mb-3" id="eduhub-partners-heading"><?php echo esc_html(get_theme_mod('eduhub_partners_heading',__('Add Partner Images','eduhub')));?></h2>
                 <p class=" mb-4 text-center mb-5" id="eduhub-partners-section-desc"><?php echo esc_html(get_theme_mod('eduhub_partners_description'));?></p>
             </div>
         </div>
     </div>
     <div class="client-area  padding-bottom mt100 sm-mt10 xs-mt0">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                     <div class="client-slider owl-carousel">
                         <?php
                     $eduhub_partners_posts = new WP_Query( array(
                         'post_type' => 'partners',
                         'posts_per_page'      => -1,  
                     ) );

                        if( $eduhub_partners_posts->have_posts() ):

                        while ( $eduhub_partners_posts->have_posts() ):
                            $eduhub_partners_posts->the_post();
                        $eduhub_partners_iamge=get_the_post_thumbnail_url(null, "eduhub-blog-image");
                           ?>

                         <div class="single-client">
                             <img src="<?php echo esc_url($eduhub_partners_iamge);?>" alt="">
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
     </div>
 </section>
 <!--CLIENT AREA END-->
