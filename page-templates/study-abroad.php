<?php 
/**
* Template Name: Study Abroad
*/
?>


<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu");?>
<?php get_template_part("/page-templates/common/hero");?>




<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="col-md-6">
				<button type="button" class="btn btn-danger btn-lg btn-block">Block level button</button>
				
				
				
			</div>
			<div class="col-md-6">
				<?php 
				$about_study_abroad_image= get_theme_mod("eduhub_study_abroad_image");
				echo wp_get_attachment_image($about_study_abroad_image,"large");
				?>
			</div>
		</div>
	</div>
</section>










<?php get_footer();?>
