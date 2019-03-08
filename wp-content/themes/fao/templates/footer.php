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
					<a href="/privacy-policy/" class=""><? _e('Privacy Policy'); ?></a>
				</span>
				<span class="copyright">&copy; 2019 Fred Allard Office Ltd <? _e('All rights reserved'); ?></span>
			</div>
		</div>
	</div>
</footer>
