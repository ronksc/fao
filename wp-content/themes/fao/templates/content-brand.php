<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqR02hkIwAolyKNQsUCXuOZtlAqCAe3K0&language=en"></script>
<script>	
	var full_url = '<?=get_permalink()?>';
	var map;
	var marker_value = [];
	var map_marker = [];
	var location_value = [];
	var region_marker_img = {
		url: '<?=get_stylesheet_directory_uri()?>/assets/images/marker.png',
		size: new google.maps.Size(36, 53),
		labelOrigin:  new google.maps.Point(18,-26),
	};
</script>


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

	
	
	<div class="row module module__text">
		<div class="text__element">
			<?php
				the_content();
			?>
		</div>
	</div>
	
	<?php
	
		if( have_rows('page_module') ):
	
			// loop through the rows of data
			while ( have_rows('page_module') ) : the_row();
			
				if ( get_row_layout() == 'brand_logo' ):
					
				
					echo '<div class="row module module__brand-logo">';
					
						$numrows = count(get_sub_field('logo_item'));
					
						if( have_rows('logo_item') ):
							$count = 0;
							
							
							// loop through the rows of data
							while ( have_rows('logo_item') ) : the_row();
							
								$logo = get_sub_field('logo');
								$link = get_sub_field('link');
								
								if($count%2 == 0){
									echo '<div class="col-12">';
										echo '<div class="row text-center logo_row">';
								}
							
											echo '<div class="col-md-6 align-self-center"><a href="'.$link.'"><img src="'.$logo['url'].'"/></a></div>';	
								
								if($count%2 == 1 || $count == $numrows-1){	
										echo '</div>';
									echo '</div>';		
								}
								$count++;
							endwhile;
						
						endif;
						
					echo '</div>';
				endif;
				
				if ( get_row_layout() == 'text_with_image' ):
					$content = get_sub_field('content');
					$image = get_sub_field('image');
					$image_link = get_sub_field('image_link');
					$link = get_sub_field('link');
					$link_target = get_sub_field('link_target');
					$hide_blackbar = get_sub_field('hide_blackbar');
					$blackbar_margin = get_sub_field('blackbar_margin');
					
					if($blackbar_margin){
						$blackbar_margin_class = "no-margin";
					}else{
						$blackbar_margin_class = "";
					}
				
					echo '<div class="row module module__img-text margin-bottom-20">';
						if(!$hide_blackbar){
							echo '<div class="blackbar before '.$blackbar_margin_class.'"></div>';
						}
						
						echo '<div class="text__element">';
							echo $content;
						echo '</div>';
						echo '<div class="img__element">';
							if($image_link){
								echo '<a href="'.$link.'" target="'.$link_target.'"><img src="'.$image['url'].'" class="img-fluid"/></a>';
							}else{
								echo '<img src="'.$image['url'].'" class="img-fluid"/>';	
							}
						echo '</div>';
					echo '</div>';
					
				endif;
			
				if ( get_row_layout() == 'lookbook' ):
				
					$image_position = get_sub_field('image_position');
					
					$media_element = get_sub_field('media_element');				
					
				
					echo '<div class="row module module__lookbook">';
						
						if($image_position == 'left'){
							$position_class_media = '';
							$position_class_button = '';
						}else{
							$position_class_media = 'push-md-5';
							$position_class_button = 'pull-md-7';
						}
						
						
						switch($media_element['media_type']):
							case 'image':
								echo '<div class="col-12 '.$position_class_media.' col-md-7 img__element">';
									echo '<img src="'.$media_element['image']['url'].'" class="img-fluid"/>';
								echo '</div>';
								break;
							case 'video':
								echo '<div class="col-12 '.$position_class_media.' col-md-7 img__element video">';
									echo '<video width="100%" height="100%" poster="'.$media_element['video_poster_image']['url'].'" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">';
										echo '<source src="'.$media_element['video']['url'].'" type="video/mp4">';
										echo 'Your browser does not support the video tag.';
									echo '</video>';
								echo '</div>';
								break;
						endswitch;
						
						echo '<div class="col-12 '.$position_class_button.' col-md-5 lookbook__element">';
							echo '<div class="lookbook__element-wrapper">';
								echo '<div class="lookbook_element-table">';
									echo '<div class="lookbook__element-title">'.$media_element['title'].'</div>';
									echo '<div class="lookbook__element-link">';
										if(sizeof($media_element['button']) > 0):
											echo '<ul>';
											foreach( $media_element['button'] as $button ):
												$text = $button['text'];
												$link = $button['link'];
												$link_target = $button['link_target'];
												
												echo '<li><a href="'.$link.'" target="'.$link_target.'">'.$text.'</a></li>';											
											endforeach;
											echo '</ul>';
										endif;
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				
				endif;
				
				if ( get_row_layout() == 'google_map' ):
					$taxonomyName = 'store_category';
					$countries = get_sub_field('country');
					$brand = get_sub_field('brand');
					$location_value = array();
					
					/*if(count($countries) > 1){
						foreach($countries as $country):
							$country_term = get_term_by('term_id', $country, $taxonomyName);
							$cities = get_terms( $taxonomyName, array( 'parent' => $country, 'orderby' => 'term_id', 'hide_empty' => false ) );
							if(count($cities) > 0){
								foreach($cities as $city):
									$temp = array('country'=>$country_term->name, 'city'=>$city->name);
									array_push($location_value, $temp);
								endforeach;
							}else{
								$temp = array('country'=>$country_term->name, 'city'=>$country_term->name);
								array_push($location_value, $temp);
							}
						endforeach;
					}else{
						$country_term = get_term_by('term_id', $countries[0], $taxonomyName);
						$cities = get_terms( $taxonomyName, array( 'parent' => $countries[0], 'orderby' => 'term_id', 'hide_empty' => false ) );						
						if(count($cities) > 0){
							foreach($cities as $city):
								$temp = array('country'=>$country_term->name, 'city'=>$city->name);
								array_push($location_value, $temp);
							endforeach;
						}else{
							$temp = array('country'=>$country_term->name, 'city'=>$country_term->name);
							array_push($location_value, $temp);
						}
					}*/
					
					$tax_query = [];
					if(count($countries) > 1){
						$tax_country_query = array('relation'=>'OR');
						foreach($countries as $country){
							$temp_query = array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'store_category', 
									'field' => 'term_id', 
									'terms' => $country
								),
								array(
									'taxonomy' => 'store_category', 
									'field' => 'term_id', 
									'terms' => $brand
								)							
							);
							array_push($tax_country_query, $temp_query);
						}
						$tax_query = array('relation' => 'OR', $tax_country_query);
					}else{
						$tax_query = array(
							'relation' => 'AND',
							array(
								'taxonomy' => 'store_category', 
								'field' => 'term_id', 
								'terms' => $countries[0]								
							),
							array(
								'taxonomy' => 'store_category', 
								'field' => 'term_id', 
								'terms' => $brand							
							)
						);
					}
					
					//print_r($tax_query);
					
					$args = array(
						'post_type' => 'store',
						'posts_per_page' => -1,
						'tax_query' => $tax_query
					);
					$query = new WP_Query( $args );
					
					$marker_value = [];					
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							$marker_post_id = get_the_id();

							$store_name = get_field('store_name', $marker_post_id);
							
							
							$address = get_field('address', $marker_post_id);
							$opening_hour = get_field('opening_hour', $marker_post_id);
							$store_location = get_field('store_location', $marker_post_id);
							$country = get_field('country', $marker_post_id);
							$city = get_field('city', $marker_post_id);
							$brand = get_field('brand', $marker_post_id); 
							
							$marker_temp = array('map_lat'=>$store_location['lat'], 'map_lng'=>$store_location['lng'], 'country'=>$country->name, 'city'=>$city->name, 'store_name'=>$store_name, 'address'=>$address, 'hours'=>$opening_hour);
							array_push($marker_value, $marker_temp);
							
							
							$location_temp = array('country'=>$country->name, 'city'=>$city->name);
							
							$location_in_array = in_array($city->name, array_column($location_value, 'city'));
							
							if(!$location_in_array){
								array_push($location_value, $location_temp);
							}
						}
						wp_reset_postdata();
					}
					
				
					echo '<div class="row module module__storelocator">';
						echo '<div class="module__storelocator-title">';
						echo _e('STORE LOCATOR');
						echo '</div>';
						
						echo '<div class="col-12">';
							echo '<div class="row storelocator__map-row">';
								echo '<div class="col-12 col-md-6">';
									echo '<div class="storelocator__map-wrapper">';
										echo '<div id="map_div"></div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="col-12 col-md-6">';
									echo '<div class="storelocator__filter-element">';
										echo '<div class="storelocator__filter-title">';
										echo _e('Country');
										echo '</div>';
										echo '<div class="storelocator__filter-input" id="country_select">';
											//country select show here;
										echo '</div>';
									echo '</div>';
									echo '<div class="storelocator__filter-element">';
										echo '<div class="storelocator__filter-title">';
										echo _e('City');
										echo '</div>';
										echo '<div class="storelocator__filter-input" id="city_select">';
											//city select show here;
										echo '</div>';
									echo '</div>';
									echo '<div class="storelocator__filter-element">';
										echo '<div class="storelocator__filter-input">';
											echo '<a id="map_search" href="javascript:;" class="button">';
											echo _e('Search');
											echo '</a>';
										echo '</div>';
									echo '</div>';
									echo '<div class="storelocator__list-wrapper">';
										echo '<div class="storelocator__list-content">';
											echo '<div class="storelocator__list-item">';
												echo '<div class="list-item__title">Shanghai Sogo</div>';
												echo '<div class="list-item__address">CCSHOP, 2F, No.1618  West Nanjing Road, Jing\'an District, Shanghai,China</div>';
												echo '<div class="list-item__hour">';
													echo '<div class="list-item__hour-toggle">Opening hours</div>';
													echo '<div class="list-item__hour-content">10:00 - 22:00</div>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
					
					?>
						
					<script type="text/javascript">
						var inital_point = [{map_lat:'31.223238', map_lng:'121.4441133', zoom_level:17}];
				
						var location_value = <?php echo json_encode($location_value); ?>;
						
						marker_value = <?php echo json_encode($marker_value); ?>;
					</script>
					
					<?php
				endif;
			
			endwhile;
			
		endif;
		
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
										echo '<div class="col-4"><a data-fancybox data-src="#hidden-content'.$key.'" href="javascript:;"><img src="'.$image['image']['url'].'" class="img-fluid" /></a></div>';
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
							echo '<div class="module__instagram-social">';
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

