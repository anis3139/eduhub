<?php 
/**
* Template Name: Study Abroad
*/
?>


<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu");?>
<?php get_template_part("/page-templates/common/hero");?>




<section class="ftco-section ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="text-center heading-section ftco-animate">
			<h2 class="mb-4" id="eduhub-study-abroad-heading"><?php echo esc_html(get_theme_mod('eduhub_study_abroad_heading',__('Welcome To Eduhub','eduhub')));?></h2>
			<p id="eduhub-study-abroad-description"><?php echo esc_html(get_theme_mod('eduhub_study_abroad_description'));?></p>
		</div>

		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="col-md-6 p-5">
				<?php
                        $eduhub_study_abroad_posts = new WP_Query( array(
                        'post_type' => 'study-abroad',
                        'posts_per_page'      => -1,  
                        ) );
                        if( $eduhub_study_abroad_posts->have_posts() ):
                        while ( $eduhub_study_abroad_posts->have_posts() ):
                        $eduhub_study_abroad_posts->the_post();
                   	?>
				<button type="button" class="btn btn-danger btn-lg btn-block">
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</button>

				<?php 
                        endwhile;
                        wp_reset_query();
                        endif;
                    ?>

			</div>
			<div class="col-md-6 p-5" id="eduhub-study-abroad-image">
				<?php 
				$about_study_abroad_image= get_theme_mod("eduhub_study_abroad_image");
				echo wp_get_attachment_image($about_study_abroad_image,"large");
				?>
			</div>
		</div>
	</div>
</section>



<?php get_template_part("/page-templates/template-parts/statistics")?>
<?php get_template_part("/page-templates/common/partner")?>
<?php get_template_part("/page-templates/common/apply-now")?>






<?php get_footer();?>
