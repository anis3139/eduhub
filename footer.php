<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6 col-lg-3 eduhub-footer">
				<div class="ftco-footer-widget mb-5">
					<?php 
                         if ( is_active_sidebar( "footer-sidebar-1" ) ) {
                        dynamic_sidebar( "footer-sidebar-1" );
                    }
                    ?>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 eduhub-footer">
				<div class="ftco-footer-widget mb-5">
					<?php 
                         if ( is_active_sidebar( "footer-sidebar-2" ) ) {
                        dynamic_sidebar( "footer-sidebar-2" );
                    }
                    ?>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 eduhub-footer">
				<div class="ftco-footer-widget mb-5 ml-md-4">
					<?php 
                         if ( is_active_sidebar( "footer-sidebar-3" ) ) {
                        dynamic_sidebar( "footer-sidebar-3" );
                    }
                    ?>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 eduhub-footer">
				<div class="ftco-footer-widget mb-5">
					<?php 
                         if ( is_active_sidebar( "footer-sidebar-4" ) ) {
                        dynamic_sidebar( "footer-sidebar-4" );
                    }
                    ?>
				</div>

			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12 row text-center">
				<div class="col-md-8 text-white">
					<?php echo _e('Copyright ©2020 All rights reserved | This template is made with by  ', 'jurist') ?><a href="http://www.rainyforest.xyz">
						<span class="copyright">
							<?php _e('Anis Arronno','jurist'); ?>
						</span>
					</a>

				</div>
				<div class="col-md-4 text-white">
					<?php _e('Powered by','jurist');?> <a href="http://www.rainyforest.xyz">
						<span class="copyright">
							<?php _e('Rainy Forest','jurist') ;?>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

<?php wp_footer();?>

</body>

</html>
