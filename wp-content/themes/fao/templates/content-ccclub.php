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
		
		$apply_now_button = get_field('apply_now_button');

		if( have_rows('page_module') ):
	
			// loop through the rows of data
			while ( have_rows('page_module') ) : the_row();
			
				if ( get_row_layout() == 'logo_with_text' ):
					$image = get_sub_field('image');
					$content = get_sub_field('content');
					$apply_now = get_sub_field('apply_now');
				
					echo '<div class="row module module__logo_text">';
						echo '<div class="module__logo_text-image">';
							echo '<img src="'.$image['url'].'"/>';
							if($apply_now){
								switch(ICL_LANGUAGE_CODE):
									case 'en':
										echo '<div class="apply_now"><a href="'.$apply_now_button['url'].'?your-action=Membership%20Application" class="button">'.$apply_now_button['button_text'].'</a></div>';
										break;
									case 'zh-hans':
										echo '<div class="apply_now"><a href="'.$apply_now_button['url'].'?your-action=会员登记" class="button">'.$apply_now_button['button_text'].'</a></div>';
										break;								
								endswitch;
							}
						echo '</div>';
					
						echo '<div class="module__logo_text-content">';
							echo $content;
						echo '</div>';
					echo '</div>';
						
				endif;
				
			endwhile;
			
		endif;
		
		echo '<div class="row">';
		echo '<a href="mailto:'.$apply_now_button['email'].'" class="button">'.$apply_now_button['button_text'].'</a>';
		echo '</div>';
	?>
</div>