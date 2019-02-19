<div class="container">
	<div class="row">
		<div class="page_feature_image">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/header-contact.jpg" class="img-fluid"/>
		</div>
	</div>
	<div class="row contact-content">
		<div class="col-md-5 address-container">
			<h3>ADDRESS</h3>
			<p>FRED ALLARD OFFICE LTD.<br />
			27/F, TOWER A, REGENT CENTRE, <br />
			63 WO YI HOP ROAD, KWAI CHUNG, <br />
			HONG KONG</p>
			
			<h3>CUSTOMER SERVICE</h3>
			<p><a href="tel:+85224802888">+852 2480 2888</a></p>
		</div>
		<div class="col-md-7">
			<h3>LEAVE US A MESSAGE</h3>
			<?php
				echo do_shortcode('[contact-form-7 id="58" title="Contact"]');
			?>
		</div>
	</div>
</div>