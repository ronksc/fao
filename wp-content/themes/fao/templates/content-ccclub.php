<div class="container">
	<?php
		$featured_img_url = get_the_post_thumbnail_url();
		
		//echo 'featured_img_url = '.$featured_img_url;
		
		if($featured_img_url){
			echo '<div class="row">';
				echo '<div class="page_feature_image">';
					echo '<img src="'.$featured_img_url.'" class="img-fluid"/>';
				echo '</div>';
			echo '</div>';
		}

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