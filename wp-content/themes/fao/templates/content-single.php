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