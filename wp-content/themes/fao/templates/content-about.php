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
	?>
	
	<div class="row about-content">
		<div class="text__element">
			<?php
				the_content();
			?>
		</div>
		
		<?php
	
		if( have_rows('page_module') ):
	
			// loop through the rows of data
			while ( have_rows('page_module') ) : the_row();
			
				if ( get_row_layout() == 'text_section' ):
					$content = get_sub_field('content');
				
				
					echo '<div class="row about__text-section">';
						echo '<div class="col-12">';
							echo $content;
						echo '</div>';
					echo '</div>';
				
				endif;
				
			endwhile;
	
		endif;
		
		?>
	</div>
</div>