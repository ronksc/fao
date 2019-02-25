<div class="container">
<?php
	// check if the flexible content field has rows of data
	if( have_rows('page_module') ):
	
		// loop through the rows of data
		while ( have_rows('page_module') ) : the_row();
			//echo 'page_content<br>';
			
			//print_r( get_sub_field('page_content'));
			if ( get_row_layout() == 'media_text_element' ):
				$text = get_sub_field('text');
				
				$media_element = get_sub_field('media_element');
				
				echo '<div class="row module module__img-text">';
					echo '<div class="text__element">'.$text.'</div>';
					
					switch($media_element['media_type']):
						case 'image':
							echo '<div class="img__element">';
								echo '<a href="'.$media_element['link'].'" target="'.$media_element['link_target'].'"><img src="'.$media_element['image']['url'].'" class="img-fluid"/></a>';
							echo '</div>';
							break;
						case 'video':
							echo '<div class="img__element video">';
								echo '<video width="100%" height="100%" poster="'.$media_element['video_poster_image']['url'].'" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">';
									echo '<source src="'.$media_element['video']['url'].'" type="video/mp4">';
									echo 'Your browser does not support the video tag.';
								echo '</video>';
								echo '<a href="'.$media_element['link'].'" class="video_link"></a>';
							echo '</div>';
								
							break;
					endswitch;
					
				echo '</div>';
			
			endif;
		
		endwhile;
		
	endif;			
?>
</div>