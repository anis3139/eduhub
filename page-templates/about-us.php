<?php 
/**
* Template Name: About us
*/
?>
<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu");?>
<?php get_template_part("/page-templates/common/hero");?>

<section class="ftco-section ftco-no-pt ftc-no-pb">
	<div class="container">
		<div class="row">
			<div class="col-md-6 order-md-last wrap-about py-5 wrap-about bg-light">
				<div class="text px-4 ftco-animate">
					<h2 class="mb-4" id="eduhub-about-content-heading"><?php echo esc_html(get_theme_mod('eduhub_about_featured_content_heading',__('Welcome to visaHub','eduhub')));?></h2>
					<p id="eduhub-about-content"><?php echo wp_kses_post(get_theme_mod('eduhub_about_featured_content',__('On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.
Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.','eduhub')));?></p>
				</div>
			</div>
			<div class="col-md-6 wrap-about py-5 pr-md-4 ftco-animate img-fluid" id="eduhub-about-featured-image">
				<div>
					<?php 
				$about_featured_image= get_theme_mod("eduhub_about_featured_image");
				echo wp_get_attachment_image($about_featured_image,"large");
				?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section bg-light">
	<div class="row justify-content-center mb-5 pb-2 mt-5">
		<div class="col-md-10 offset-md-1 text-center heading-section ftco-animate our-history">
			<h2 class="mb-4" id="eduhub-history-heading"><?php echo esc_html(get_theme_mod('eduhub_about_history_heading',__('Our History','eduhub')));?></h2>
			<hr class="about-underline">
		</div>
	</div>
	<div class="row ftco-animate justify-content-center">
		<div class="col-md-10 offset-md-1 text-justify">
			<p id="eduhub-history-description"><?php echo wp_kses_post(get_theme_mod('eduhub_about_history_description',__('On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.
Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.','eduhub')));?></p>
		</div>
	</div>
	<div class="row justify-content-center mb-5 pb-2 mt-5">
		<div class="col-md-10 offset-md-1 text-center heading-section ftco-animate our-history">
			<h2 class="mb-4" id="eduhub-vision-heading"><?php echo esc_html(get_theme_mod('eduhub_about_vision_heading',__('Our Vision','eduhub')));?></h2>
			<hr class="about-underline">
		</div>
	</div>
	<div class="row ftco-animate justify-content-center">
		<div class="col-md-10 offset-md-1 text-justify">
			<p id="eduhub-vision-description"><?php echo wp_kses_post(get_theme_mod('eduhub_about_vision_description',__('On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.
Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.','eduhub')));?></p>
		</div>
	</div>
	
</section>

<?php get_template_part("/page-templates/template-parts/testimonials")?>
<?php get_template_part("/page-templates/common/partner")?>
<?php get_template_part("/page-templates/common/apply-now")?>


<?php get_footer();?>
