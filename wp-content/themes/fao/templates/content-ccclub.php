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
						echo '<video width="100%" height="100%" autoplay muted loop>';
							echo '<source src="'.$feature_media['video']['url'].'" type="video/mp4">';
							echo 'Your browser does not support the video tag.';
						echo '</video>';
					echo '</div>';
				echo '</div>';
				break;		
		endswitch;

		if( have_rows('page_module') ):
	
			// loop through the rows of data
			while ( have_rows('page_module') ) : the_row();
			
				if ( get_row_layout() == 'logo_with_text' ):
					$image = get_sub_field('image');
					$content = get_sub_field('content');
				
					echo '<div class="row module module__logo_text">';
						echo '<div class="module__logo_text-image">';
							echo '<img src="'.$image['url'].'"/>';
						echo '</div>';
					
						echo '<div class="module__logo_text-content">';
							echo $content;
						echo '</div>';
					echo '</div>';
						
				endif;
				
			endwhile;
			
		endif;
	?>
</div>