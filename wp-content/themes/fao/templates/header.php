<header class="banner" role="banner">
  <div class="container header-container">
  	<div class="row">
		<div class="col-7 col-md-5">
			<a class="brand" href="<?= esc_url(home_url('/')); ?>">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo.gif" class="img-fluid"/><?php //bloginfo('name'); ?>
			</a>	
		</div>
		<div class="col-5 col-md-7 text-right">
			<div class="lang">
				<select>
					<option>ENG</option>
					<option>繁</option>
					<option>簡</option>
				</select>
			</div>
			<div class="navbar-header" style="display:inline-block;">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" style="display:none;"><?php bloginfo('name'); ?></a>
			</div>
		
			
		</div>
    
    </div>
	<nav class="collapse navbar-collapse" role="navigation">
	  <?php
		if (has_nav_menu('primary_navigation')) :
		  wp_nav_menu(array('depth' => 1, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
		endif;
	  ?>
	</nav>
  </div>
</header>
