<?php 
/**
* Template Name: Success Students
*/
?>
<?php get_header();?>
<?php get_template_part("/page-templates/common/hero-blog");?>



<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row d-md-flex align-items-center justify-content-center">
			<?php
    $eduhub_gallery_posts = new WP_Query( array(
        'post_type' => 'gallery',
        'posts_per_page'      => -1,  
    ) );

 if( $eduhub_gallery_posts->have_posts() ):

 while ( $eduhub_gallery_posts->have_posts() ):
     $eduhub_gallery_posts->the_post();
$eduhub_gallery_iamge_large=get_the_post_thumbnail_url(null, "full");
$eduhub_gallery_iamge_small=get_the_post_thumbnail_url(null, "large");
    ?>
			<div class="col-md-3 ftco-animate">
				<a href="<?php echo esc_url($eduhub_gallery_iamge_large);?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo esc_url($eduhub_gallery_iamge_small);?>);">
					<div class="icon mb-4 d-flex align-items-center justify-content-center">
						<span class="icon-instagram"></span>
						
					</div>
				</a>
			</div>
			<?php 
            endwhile;
            wp_reset_query();
            endif;
            ?>
		</div>
	</div>
</section>

<?php get_template_part("/page-templates/common/faq")?>

<?php get_template_part("/page-templates/common/apply-now")?>


<?php get_footer();?>
