    <section class="home-slider owl-carousel">
 
      <?php
    $eduhub_sliders_posts = new WP_Query( array(
        'post_type' => 'slider',
        'posts_per_page'      => -1,  
    ) );

 if( $eduhub_sliders_posts->have_posts() ):

 while ( $eduhub_sliders_posts->have_posts() ):
     $eduhub_sliders_posts->the_post();
$eduhub_slider_iamge=get_the_post_thumbnail_url(null, "full");
    ?>
      <div class="slider-item" style="background-image:url(<?php echo esc_url($eduhub_slider_iamge);?>);">
      	<div class="overlay"></div>
        <div class="container">
         
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4 animated zoomIn"><?php bloginfo('description')?></h1>
             <p class="animated fadeInUp"><?php echo esc_html(wp_trim_words(get_the_excerpt(),27));?></p>
          </div>
        </div>
        </div>
      </div>
            <?php 
            endwhile;
            wp_reset_query();
            endif;
            ?>
     
    </section>