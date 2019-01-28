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
	<div class="row">
		<div class="page_feature_image">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/header-press.jpg" class="img-fluid"/>
		</div>
	</div>
	
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
	
	<div class="row module module__instagram">
		<div class="blackbar before"></div>
		<div class="col-12 col-md-3 module__instagram-text">
			
			<h3><i class="fab fa-instagram"></i><br />CONNECT CCSHOP ON INSTAGRAM</h3>
			<p>Get featured by tagging #eqiqpure</p>
			<a href="#">View Gallery</a>
		</div>
		<div class="col-12 col-md-9">
			<div class="row module__instagram-gallery">
				<div class="col-md-4"><a data-fancybox data-src="#hidden-content1" href="javascript:;"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/img_ig_1.jpg" class="img-fluid" /></a></div>
				<div class="instagram-popup" id="hidden-content1">
					<div class="row">
						<div class="col-md-6">
							<a href="https://www.instagram.com/p/BmICEZ1hn9i/?taken-by=eqiq_pure" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/eqiq_pure_FW18_website_ig_01.jpg" class="img-fluid" /></a>
						</div>
						<div class="col-md-6">
							<p class="p1">eqiq_purePlaid fever .</p>
							<p><span><a href="https://www.instagram.com/p/BmICEZ1hn9i/?taken-by=eqiq_pure" target="_blank" class="instaname">@eqiq_pure</a></span> // <span class="fdate">17/08/2018</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4"><a data-fancybox data-src="#hidden-content2" href="javascript:;"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/img_ig_2.jpg" class="img-fluid" /></a></div>
				<div class="instagram-popup" id="hidden-content2">
					<div class="row">
						<div class="col-md-6">
							<a href="https://www.instagram.com/p/BmICEZ1hn9i/?taken-by=eqiq_pure" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/eqiq_pure_FW18_website_ig_01.jpg" class="img-fluid" /></a>
						</div>
						<div class="col-md-6">
							<p class="p1">eqiq_purePlaid fever .</p>
							<p><span><a href="https://www.instagram.com/p/BmICEZ1hn9i/?taken-by=eqiq_pure" target="_blank" class="instaname">@eqiq_pure</a></span> // <span class="fdate">17/08/2018</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4"><a data-fancybox data-src="#hidden-content3" href="javascript:;"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/img_ig_3.jpg" class="img-fluid" /></a></div>
				<div class="instagram-popup" id="hidden-content3">
					<div class="row">
						<div class="col-md-6">
							<a href="https://www.instagram.com/p/BmICEZ1hn9i/?taken-by=eqiq_pure" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/eqiq_pure_FW18_website_ig_01.jpg" class="img-fluid" /></a>
						</div>
						<div class="col-md-6">
							<p class="p1">eqiq_purePlaid fever .</p>
							<p><span><a href="https://www.instagram.com/p/BmICEZ1hn9i/?taken-by=eqiq_pure" target="_blank" class="instaname">@eqiq_pure</a></span> // <span class="fdate">17/08/2018</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="module__instagram-social text-right">
				<ul>
					<li>Follow eqiqpure!</li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-weixin"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="blackbar after"></div>
	</div>
	
	<div class="row module module__newsletter justify-content-md-center">
		<div class="col-10 module__newsletter-wrapper">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-5 newsletter-title">Enter Your e-mail to subscribe to Our newsletters</div>
				<div class="col-12 col-md-5 col-lg-5"><input type="email" placeholder="your email address" /></div>
				<div class="col-12 col-md-3 col-lg-2"><input class="button" type="submit" value="Submit" /></div>
			</div>
		</div>
	</div>
</div>