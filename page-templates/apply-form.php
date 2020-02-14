<?php 
/**
* Template Name: Apply Form
*/
?>



<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu");?>
<?php get_template_part("/page-templates/template-parts/slider");?>





<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb mt-5 mb-5" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images//bg_5.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-6 py-5 px-md-5 bg-primary">
				<div class="heading-section heading-section-white ftco-animate mb-5">
					<h2 class="mb-4">Request A Quote</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
				<form action="#" class="appointment-form ftco-animate">
				<?php
					wp_nonce_field('reservation','rn');
					?>
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" id="name" class="form-control" placeholder="Name">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone" id="phone">
						</div>
					</div>					
					<div class="d-md-flex">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" id="email">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<div class="form-field">
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="persons" class="form-control">
										<option value="Select Your Country"  class=" bg-primary">Select Your Course</option>
										<option value="Art Lesson" class=" bg-primary">Art Lesson</option>
										<option value="Language Lesson" class=" bg-primary">Language Lesson</option>
										<option value="Music Lesson" class=" bg-primary">Music Lesson</option>
										<option value="Sports" class=" bg-primary">Sports</option>
										<option value="Other Services" class=" bg-primary">Other Services</option>
									</select>
								</div>
							</div>
						</div>
						
					</div>
					<div class="d-md-flex">
						<div class="form-group ml-md-4">
							<input type="submit" id="reservenow" value="Request A Quote" class="btn btn-secondary py-3 px-4">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>










<?php get_footer();?>
