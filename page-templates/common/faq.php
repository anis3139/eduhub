<section class="ftco-section ftco-counter img statistics" id="section-faq" data-stellar-background-ratio="0.5">
    <div class="container">
        <!-- Heading-->
        <div class="row mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate justify-content-center">
                <h2 class="mb-4" id="eduhub-faq-heading"><?php echo esc_html(get_theme_mod('eduhub_faq_heading',__('Frequently Asked Questions','eduhub')));?></h2>
                <p class="mb-4" id="eduhub-faq-section-desc"><?php echo esc_html(get_theme_mod('eduhub_faq_description'));?></p>
            </div>
        </div>
        <!-- Accordion Starts-->
        <div class="row acc">
            <?php
        $eduhub_faq_posts = new WP_Query( array(
            'post_type' => 'faq',
            'posts_per_page'      => -1,  
            ) );
            if( $eduhub_faq_posts->have_posts() ):
            while ( $eduhub_faq_posts->have_posts() ):
            $eduhub_faq_posts->the_post();
        ?>

            <div class="acc col-md-10 offset-md-1 ftco-animate">
                <h3><?php the_title();?></h3>
                <div class="content">
                    <div class="content-inner">
                        <p><?php the_content();?></p>
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
</section>
