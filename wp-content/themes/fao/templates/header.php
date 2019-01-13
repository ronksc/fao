<header class="banner" role="banner">
  <div class="container header-container">
  	<div class="row">
		<div class="col-7 col-md-5">
			<a class="brand" href="<?= esc_url(home_url('/')); ?>">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo.gif" class="img-fluid"/><?php //bloginfo('name'); ?>
			</a>	
		</div>
		<div class="col-5 col-md-7 text-right">
			
			<div class="navbar-header">
			  <a href="javascript:;" class="nav_toggle"><i class="fas fa-bars"></i></a>
			  <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" style="display:none;"><?php bloginfo('name'); ?></a>
			</div>
			<div class="lang">
				<select>
					<option>ENG</option>
					<option>繁</option>
					<option>簡</option>
				</select>
			</div>
		</div>
    
    </div>
	<nav class="collapse navbar-collapse" role="navigation">
	  <?php
		if (has_nav_menu('primary_navigation')) :
		  wp_nav_menu(array('depth' => 1, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
		endif;
		
		if (has_nav_menu('brand-menu')) :
		  wp_nav_menu(array('depth' => 1, 'theme_location' => 'brand-menu', 'menu_class' => 'nav navbar-nav'));
		endif;
	  ?>
	</nav>
  </div>
</header>
<div class="main-menu-wrapper">
	<a href="javascript:;" class="btn_close"><i class="fal fa-times"></i></a>

	<div class="row justify-content-md-center">
		<div class="col-md-4 text-center">
			<div class="logo_container">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo-white.gif" />
			</div>
			<nav class="main-menu">
				<div class="row">
				<?php
					if (has_nav_menu('primary_navigation')) :
						echo '<div class="col-6">';
						wp_nav_menu(array('depth' => 2, 'theme_location' => 'primary_navigation'/*, 'menu_class' => 'nav navbar-nav'*/));
						echo '</div>';
					endif;
					
					if (has_nav_menu('brand-menu')) :
						echo '<div class="col-6">';
						wp_nav_menu(array('depth' => 2, 'theme_location' => 'brand-menu', 'menu_class' => 'nav navbar-nav'));
						echo '</div>';
					endif;
				?>
				</div>
			</nav>
		</div>
	</div>
</div>