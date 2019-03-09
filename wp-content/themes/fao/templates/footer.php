<footer class="content-info">
	<!--<section class="link-section">-->
	<div class="container footer-container">
		<div class="row">
			<div class="col-12 hidden-md-up">
				<a href="#" class="btp">Back to Top</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu',  'menu_class' => 'footer-menu')); ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12 privacy_policy_wrapper">
				<span class="privacy_policy">
					<?php
						$privacy_page_id = icl_object_id(59, 'page', false,ICL_LANGUAGE_CODE);
					?>
					<a href="<?php echo esc_url( get_permalink($privacy_page_id) );?>" class=""><?php _e('Privacy Policy', 'FAO'); ?></a>
				</span>
				<span class="copyright">&copy; 2019 Fred Allard Office Ltd <?php _e('All rights reserved', 'FAO'); ?></span>
			</div>
		</div>
	</div>
</footer>
