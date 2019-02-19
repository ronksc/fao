<div class="container">
<?php
	// check if the flexible content field has rows of data
	if( have_rows('page_module') ):
	
		// loop through the rows of data
		while ( have_rows('page_module') ) : the_row();
			//echo 'page_content<br>';
			
			//print_r( get_sub_field('page_content'));
			if ( get_row_layout() == 'media_text_element' ):
				$text = get_sub_field('text');
				
				$media_element = get_sub_field('media_element');
				
				echo '<div class="row module module__img-text">';
					echo '<div class="text__element">'.$text.'</div>';
					
					switch($media_element['media_type']):
						case 'image':
							echo '<div class="img__element">';
								echo '<a href="'.$media_element['link'].'" target="'.$media_element['link_target'].'"><img src="'.$media_element['image']['url'].'" class="img-fluid"/></a>';
							echo '</div>';
							break;
						case 'video':
							echo '<div class="img__element video">';
								echo '<video width="100%" height="100%" autoplay muted loop>';
									echo '<source src="'.$media_element['video']['url'].'" type="video/mp4">';
									echo 'Your browser does not support the video tag.';
								echo '</video>';
								echo '<a href="/brand/" class="video_link"></a>';
							echo '</div>';
								
							break;
					endswitch;
					
				echo '</div>';
			
			endif;
			
			if ( get_row_layout() == '' ):
			
			endif;
			
			if ( get_row_layout() == '' ):
			
			endif;
			
			if ( get_row_layout() == '' ):
			
			endif;
		
		endwhile;
		
	endif;			
?>

	
	<!--<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">OUR CCSHOP</span> MULTIBRAND RETAIL SIGNATURE CONCEPT OFFERS A PERFECT MODERN/ VERSATILE NEST TO SHOW CASE FASHION, ACCESSORIES WITH THE BEST BRAND EXPERIENCE EDITION.
		</div>
		<div class="img__element video">
			<video width="100%" height="100%" autoplay muted loop>
			  <source src="<? //=get_stylesheet_directory_uri()?>/assets/images/EQIQ 470 x 1140.mp4" type="video/mp4">
			Your browser does not support the video tag.
			</video>
			<a href="/brand/" class="video_link"></a>
		</div>
	</div>
	<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">WE DEVELOP</span> ACCESSORIES AND FASHION PRODUCT WITH OUR DESIGN TEAM THAT OFFER ALL THE STAGES OF DEVELPOMENT FROM BRAND CONSULTING ,PRODUCT DESIGN,IMAGES TO FINAL PRODUCT TO THE CONSUMERS WITH ALL THE DIGITAL AND CONVENTIONAL MARKETING SUPPORT STRATEGIES ADAPTED FOR THE ASIAN MARKET.
		</div>
		<div class="img__element">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/home/home_3.jpg" class="img-fluid"/>
		</div>
	</div>-->
	<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">WE OFFER</span> MULTIPLES PARTNERSHIPS FORMAT FOR LONG TERMS GROWTH IN GREATER CHINA JOINT VENTURES, FRANCHISE DISTRIBUTION AND MANGEMENT SERVICES. 
		</div>
		<div class="img__element video">
			<video width="100%" height="100%" autoplay muted loop>
			  <source src="<?=get_stylesheet_directory_uri()?>/assets/images/Karen Millien 370 x 1140.mp4" type="video/mp4">
			Your browser does not support the video tag.
			</video>
			<a href="/brand/" class="video_link"></a>
		</div>
	</div>
	<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">WE CREATE </span> ADAPTED BUSINESS PARTNERSHIP AND BUILD BUSINESS OPPROTUNITIES FOR GLOBAL ACCESSORIES AND FASHION BRANDS ACROSS GREATER CHINA.
		</div>
		<div class="img__element">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/home/home_5.jpg" class="img-fluid"/>
		</div>
	</div>
	<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">CURRENTLY</span> WE OPERATE IN CHINA,HONG KONG AND MACAU WITH MORE THAN 30 POS
		</div>
		<div class="img__element">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/home/home_6.jpg" class="img-fluid"/>
		</div>
	</div>
	<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">WE PROPOSE</span> A RANGE OF CUTOMIZED SERVICES FROM OPERATIONAL LOCAL MANAGEMENT AND DEVELOPMENT OF BRANDED BUSINESS.
		</div>
		<div class="img__element">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/home/home_7.jpg" class="img-fluid"/>
		</div>
	</div>
	<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">WE SET UP</span> ONLINE SITES, TMALL, JD AND VIP.COM.  WE ENGAGE TP TO OPERATE SITES ON DAY TO DAY BASIS WITH OUR ECOM SHANGHAI TEAM.
		</div>
		<div class="img__element video">
			<video width="100%" height="100%" autoplay muted loop>
			  <source src="<?=get_stylesheet_directory_uri()?>/assets/images/JESSICA 370 x 1140.mp4" type="video/mp4">
			Your browser does not support the video tag.
			</video>
			<a href="/brand/" class="video_link"></a>
		</div>
	</div>
	<div class="row module module__img-text">
		<div class="text__element">
			<span class="text__element-title">WE CONNECT</span> YOUR BRAND WITH OUR 1,5M CUSTOMERS CC CLUB MEMBERS ACROSS GREATER CHINA .WE MANAGE AND ANALIZE THROUGH OUR CRM DATA TO OPTMISE OUR DAILY TARGETED COMMUNICATION AND SALE THROUGH OUR SOCIAL COMMERCE TEAM.
		</div>
		<div class="img__element video">
			<video width="100%" height="100%" autoplay muted loop>
			  <source src="<?=get_stylesheet_directory_uri()?>/assets/images/EPISODE 370 x 1140.mp4" type="video/mp4">
			Your browser does not support the video tag.
			</video>
			<a href="/brand/" class="video_link"></a>
		</div>
	</div>
</div>