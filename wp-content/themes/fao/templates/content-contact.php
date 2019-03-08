<div class="container">
	<?php
		$feature_media = get_field('feature_media');
			
		switch($feature_media['media_type']):
			case 'image':
				echo '<div class="row">';
					echo '<div class="page_feature_image">';
						echo '<img src="'.$feature_media['image']['url'].'" class="img-fluid"/>';
					echo '</div>';
				echo '</div>';	
				break;
			case 'video':
				echo '<div class="row">';
					echo '<div class="page_feature_image video">';
						echo '<video width="100%" height="100%" poster="'.$feature_media['video_poster_image']['url'].'" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">';
							echo '<source src="'.$feature_media['video']['url'].'" type="video/mp4">';
							echo 'Your browser does not support the video tag.';
						echo '</video>';
					echo '</div>';
				echo '</div>';
				break;		
		endswitch;
	?>
	<div class="row contact-content">
		<div class="col-md-5 address-container no-padding">			
			<?php
				the_content();
			?>
		</div>
		<div class="col-md-7 no-padding">
			<h3><?php _e('LEAVE US A MESSAGE'); ?></h3>
			<?php
				switch(ICL_LANGUAGE_CODE){
					case 'en':
						//echo 'EN';
						echo do_shortcode('[contact-form-7 id="58" title="Contact"]');
						break;
					case 'zh-hans':
						//echo '簡';
						echo do_shortcode('[contact-form-7 id="1341" title="Contact CN"]');
						break;	
				}
			?>
		</div>
	</div>
</div>