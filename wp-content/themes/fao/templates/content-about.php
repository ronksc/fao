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
	
	<div class="row">
		
		<div class="row about-content">
			<div class="text__element col-12">
				<?php
					the_content();
				?>
			</div>
		</div>
		<?php
	
		if( have_rows('page_module') ):
	
			// loop through the rows of data
			while ( have_rows('page_module') ) : the_row();
			
				if ( get_row_layout() == 'text_section' ):
					$content = get_sub_field('content');
				
				
					echo '<div class="row about__text-section no-gutters">';
						echo '<div class="col-12 ">';
							echo $content;
						echo '</div>';
					echo '</div>';
				
				endif;
				
			endwhile;
	
		endif;
		
		?>
	</div>
</div>