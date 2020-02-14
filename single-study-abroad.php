<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu");?>
<?php get_template_part("/page-templates/template-parts/slider");?>


<?php 
global $eduhub_section_id;
$eduhub_section_meta        = get_post_meta( $eduhub_section_id, 'eduhub_study_abroad', true );
$eduhub_section             = get_post( $eduhub_section_id );
$eduhub_section_title       = $eduhub_section->post_title;
$eduhub_section_description = $eduhub_section->post_content;

?>




<section class="ftco-section ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="text-center heading-section ftco-animate">
			<h2 class="section-title mb-3">
				<?php echo esc_html($eduhub_section_title);?>
			</h2>
			<p class="lead text-justify" data-aos="fade-up" data-aos-delay="100">
				<?php echo apply_filters(the_content(),$eduhub_section_description);?>
			</p>
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<iframe height="500px" width="100%" src="https://www.newwayuk.com/study-in-uk/" frameborder="0"></iframe>
			</div>
			<div class="col-md-6">
				<iframe width="100%" height="500px" src="https://www.youtube.com/embed/9piIwBat1i4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			
		</div>


	</div>
</section>



<?php get_template_part("/page-templates/common/faq")?>






<?php get_template_part("/page-templates/common/apply-now")?>






<?php get_footer();?>
