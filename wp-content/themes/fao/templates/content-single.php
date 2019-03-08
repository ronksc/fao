<?php
	//$press_page_id = 30;
	$press_page_id = icl_object_id(30, 'page', false,ICL_LANGUAGE_CODE);
	
	$hide_feature_image = get_field('hide_feature_image');
?>

<div class="container">
	<?php
		if(!$hide_feature_image){
		
			$feature_media = get_field('feature_media', $press_page_id);
			
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
		}
	?>
	
	<div class="row">
		<div class="breadcumb">
			<?php					
				if(function_exists('custom_breadcrumbs'))
				{
					custom_breadcrumbs();
				}
			?>
		
			<!--<ul>
				<li><a href="#"><i class="fas fa-home"></i></a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">The grant opening for the new CCshop</a></li>
			</ul>-->
		</div>
	</div>
	
	<div class="row">
		<?php while (have_posts()) : the_post(); ?>
		  <!--<article <?php post_class(); ?>>
			<header>
			  <h1 class="entry-title"><?php the_title(); ?></h1>
			  <?php //get_template_part('templates/entry-meta'); ?>
			</header>
			<div class="entry-content">
			  <?php //the_content(); ?>
			</div>
			<footer>
			  <?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
			</footer>
			<?php //comments_template('/templates/comments.php'); ?>
		  </article>-->
		  
		  <div class="press-content">
			<h2><?php the_title(); ?></h2>
			
			<div class="date">
				<?php
				  if(ICL_LANGUAGE_CODE=='zh-hans' || ICL_LANGUAGE_CODE=='zh-hant') {
					  echo get_the_date('Y年m月j日');
				  } else { 
					  echo get_the_date('F j, Y');
				  } ?>
			</div>
			
			<?php $content = get_the_content(); 
			
				echo apply_filters('the_content', $content);
			?>
			
		  </div>
		<?php endwhile; ?>
	</div>
	
	<?php
		
		
		if( have_rows('global_module', $press_page_id) ):
	
			// loop through the rows of data
			while ( have_rows('global_module', $press_page_id) ) : the_row();
				
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
												case 'weibo':
													echo '<li><a href="'.$social_media['link'].'" target="_blank"><i class="fab fa-weibo"></i></a></li>';
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
				
					$form_shortcode = get_sub_field('form_shortcode');
					
					echo '<div class="row module module__newsletter justify-content-md-center">';
						echo '<div class="col-10 module__newsletter-wrapper">';
							echo '<div class="row">';
								echo '<div class="col-12 col-md-4 col-lg-5 newsletter-title">';
								echo _e('Enter your e-mail to subscribe to our newsletters');
								echo '</div>';
								echo '<div class="col-12 col-md-8 col-lg-7">';
									echo do_shortcode($form_shortcode);
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
					
				endif;
			
			endwhile;
			
		endif;	
	
	?>
</div>