<?php

	if( isset($_GET['y']) ){
		$blog_year = $_GET['y'];
	}else{
		$blog_year = '';
	}	
	
	$full_uri = get_permalink();
?>
<script type="text/javascript">
	var year_value = '<?=$blog_year;?>';
	var page = 1;
	var lastpage = false;
</script>
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
	
	<div class="row">
		<div class="press-container">
			<h3>Explore what FAO is all about.</h3>
			<!--<form class="my-filter" method="GET" action="">-->
			<?php
				$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
				
			?>
			<select id="year_select" class="year_select">
				<option value=""> Year published </option>
				<?php foreach($years as $year) : 
					if($blog_year == $year){
						$selected = 'selected="selected"';
					}else{
						$selected = '';
					}
				?>
					<option value="<?php echo $full_uri .'?y='.$year ?>" <?=$selected?>><?php echo '<ul><li class"list-unstyled">' . $year .'</li></ul>';?></option>
				<?php endforeach; ?>    
			</select>
			<!--</form>-->
			
			<?php 
			query_posts( 'post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged').'&year='.$blog_year );
			
			 if (have_posts()) : 
			 	
				echo '<div id="press_container" class="press-list">';
				
				while (have_posts()) : the_post(); ?>
			
				
					<div class="press-list-item">
						<div class="press-date"><? the_date(); ?></div>
						<a class="press-title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>		
				
			
			<?php endwhile; 
			
				echo '</div>';
			
				//global $wp_query; // you can remove this line if everything works for you
	 
				// don't display the button if there are not enough posts
				if (  $wp_query->max_num_pages > 1 )
					echo '<div class="button white margin-bottom-30 press_loadmore">See more</div>'; // you can use <a> as well
				
				wp_reset_query();
			
			endif; 
			
			?>
			
		</div>
	</div>
	
	<?php
		if( have_rows('global_module') ):
	
			// loop through the rows of data
			while ( have_rows('global_module') ) : the_row();
				
				if ( get_row_layout() == 'instagram' ):
					
					$title = get_sub_field('title');
					$content = get_sub_field('content');
					$gallery = get_sub_field('gallery');
					
					echo '<div class="row module module__instagram">';
						echo '<div class="blackbar before"></div>';
						echo '<div class="col-12 col-md-3 module__instagram-text">';
							echo '<h3><i class="fab fa-instagram"></i><br />'.$title.'</h3>';
							echo $content;
						echo '</div>';
						echo '<div class="col-12 col-md-9">';
							echo '<div class="row module__instagram-gallery">';
								if(sizeof($gallery['image']) > 0):
									foreach( $gallery['image'] as $key => $image ):										
										echo '<div class="col-md-4"><a data-fancybox data-src="#hidden-content'.$key.'" href="javascript:;"><img src="'.$image['image']['url'].'" class="img-fluid" /></a></div>';
										echo '<div class="instagram-popup" id="hidden-content'.$key.'">';
											echo '<div class="row">';
												echo '<div class="col-md-6">';
													echo '<a href="'.$image['link'].'" target="_blank"><img src="'.$image['image']['url'].'" class="img-fluid" /></a>';
												echo '</div>';
												echo '<div class="col-md-6">';
													echo $image['popup_content'];
												echo '</div>';
											echo '</div>';
										echo '</div>';
									endforeach;
								endif;
							echo '</div>';
							echo '<div class="module__instagram-social text-right">';
								echo '<ul>';
									echo '<li>'.$gallery['follow_text'].'</li>';
									if(sizeof($gallery['social_media']) > 0):
										foreach( $gallery['social_media'] as $social_media ):
											switch($social_media['type']):
												case 'instagram':
													echo '<li><a href="'.$social_media['link'].'" target="_blank"><i class="fab fa-instagram"></i></a></li>';
													break;
												case 'facebook':
													echo '<li><a href="'.$social_media['link'].'" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';
													break;
												case 'weixin':
													echo '<li><a href="'.$social_media['link'].'" target="_blank"><i class="fab fa-weixin"></i></a></li>';
													break;
											endswitch;
										endforeach;
									endif;
								echo '</ul>';
							echo '</div>';
						echo '</div>';
						echo '<div class="blackbar after"></div>';
					echo '</div>';
					
				endif;
				
				if ( get_row_layout() == 'newsletter' ):
					
					echo '<div class="row module module__newsletter justify-content-md-center">';
						echo '<div class="col-10 module__newsletter-wrapper">';
							echo '<div class="row">';
								echo '<div class="col-12 col-md-4 col-lg-5 newsletter-title">Enter Your e-mail to subscribe to Our newsletters</div>';
								echo '<div class="col-12 col-md-5 col-lg-5"><input type="email" placeholder="your email address" /></div>';
								echo '<div class="col-12 col-md-3 col-lg-2"><input class="button" type="submit" value="Submit" /></div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
					
				endif;
			
			endwhile;
			
		endif;	
	
	?>
</div>