<div class="container">
	<div class="row">
		<div class="page_feature_image">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/header-press.jpg" class="img-fluid"/>
		</div>
	</div>
	
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
			
			<div class="date"><?= get_the_date(); ?></div>
			
			<?php $content = get_the_content(); 
			
				echo apply_filters('the_content', $content);
			?>
			
		  </div>
		<?php endwhile; ?>
	</div>
	
	<?php
		$press_page_id = 30;
		
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