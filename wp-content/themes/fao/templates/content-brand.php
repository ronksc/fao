<script>	
	var full_url = '<?=get_permalink()?>';
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGf4_LayRs8FAHXa2Mh2GbHSE6c5ZnhjU"></script>



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
						echo '<video width="100%" height="100%" autoplay muted loop>';
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
					
				
					echo '<div class="row module module__img-text margin-bottom-30">';
						echo '<div class="blackbar before"></div>';
						
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
									echo '<video width="100%" height="100%" autoplay muted loop>';
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
				
					echo '<div class="row module module__storelocator">';
						echo '<div class="module__storelocator-title">STORE LOCATOR</div>';
						
						echo '<div class="col-12">';
							echo '<div class="row storelocator__map-row">';
								echo '<div class="col-6">';
									echo '<div class="storelocator__map-wrapper">';
										echo '<div id="map_div"></div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="col-6">';
									echo '<div class="storelocator__filter-element">';
										echo '<div class="storelocator__filter-title">Country</div>';
										echo '<div class="storelocator__filter-input">';
											echo '<select>';
												echo '<option>China</option>';
											echo '</select>';
										echo '</div>';
									echo '</div>';
									echo '<div class="storelocator__filter-element">';
										echo '<div class="storelocator__filter-title">City</div>';
										echo '<div class="storelocator__filter-input">';
											echo '<select id="storelocator_area">';
												echo '<option value="1">ShangHai</option>';
												echo '<option value="2">TianJin</option>';
												echo '<option value="3">SuZhou</option>';
												echo '<option value="4">HangZhou</option>';
												echo '<option value="5">NingBo</option>';
												echo '<option value="6">WuHan</option>';
												echo '<option value="7">Chengdu</option>';
												echo '<option value="8">Changzhou</option>';
											echo '</select>';
										echo '</div>';
									echo '</div>';
									echo '<div class="storelocator__filter-element">';
										echo '<div class="storelocator__filter-input">';
											echo '<input class="button" type="submit" value="Search" />';
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
					var map;
					var active_info;
					var marker_value = [];
					var map_marker = [];
					var infowindows = [];
					var inital_point = [{map_lat:'31.223238', map_lng:'121.4441133', zoom_level:17}];
				
					var region_marker_img = {
						url: '<?=get_stylesheet_directory_uri()?>/assets/images/marker.png',
						size: new google.maps.Size(36, 53),
						labelOrigin:  new google.maps.Point(18,-26),
					};
					
					var location_value = [
						{id:1, map_lat:"31.223238", map_lng:"121.4441133", zoom_level:17, country:'China', city:'ShangHai'},
						{id:2, map_lat:"39.119161", map_lng:"117.194417", zoom_level:17, country:'China', city:'TianJin'},
						{id:3, map_lat:"31.321398", map_lng:"120.71351", zoom_level:17, country:'China', city:'SuZhou'},
						{id:4, map_lat:"30.268407", map_lng:"120.161403", zoom_level:17, country:'China', city:'HangZhou'},
						{id:5, map_lat:"29.966577", map_lng:"121.359059", zoom_level:10, country:'China', city:'NingBo'},
						{id:6, map_lat:"30.580552", map_lng:"114.267118", zoom_level:17, country:'China', city:'WuHan'},
						{id:7, map_lat:"30.644637", map_lng:"104.081304", zoom_level:13, country:'China', city:'Chengdu'},
						{id:8, map_lat:"31.774856", map_lng:"119.960649", zoom_level:17, country:'China', city:'Changzhou'}
					]
				
					marker_value = [
						{map_lat:'31.223238', map_lng:'121.4441133', country:'China', city:'ShangHai', brand:'CCShop', store_name:'Shanghai Sogo', address:"CCSHOP, 2F, No.1618  West Nanjing Road, Jing'an District, Shanghai,China", hours:'10:00 - 22:00'},
						{map_lat:"39.119161", map_lng:"117.194417", country:"China", city:"TianJin", brand:"CCShop", store_name:"Tianjin Isetan", address:"CCSHOP, 2F, No.108 Nanjing Road, Heping District, Tianjin,China", hours:"10:00 - 22:00"},
						{map_lat:"31.321398", map_lng:"120.71351", country:"China", city:"SuZhou", brand:"CCShop", store_name:"Suzhou Sogo", address:"CCSHOP, 1A-17, 1/F, No.268 Wangdun Road, Sogo, Suzhou, China", hours:"10:00 - 22:00"},
						{map_lat:"30.268407", map_lng:"120.161403", country:"China", city:"HangZhou", brand:"CCShop", store_name:"Hangzhou Intime Wulin", address:"CCSHOP, B1, No.530, Yan’an Rroad, Hangzhou, China", hours:"10:00 - 22:00"},
						{map_lat:"29.869438", map_lng:"121.551921", country:"China", city:"NingBo", brand:"CCShop", store_name:"Ningbo Intime Tianyi", address:"CCSHOP, 1F,No.188, East Zhongshan Road , Ningbo, China", hours:"10:00 - 22:00"},
						{map_lat:"30.0288275", map_lng:"121.1285858", country:"China", city:"NingBo", brand:"CCShop", store_name:"Ningbo Intime Wulin", address:"CCSHOP, 1F,No.909,Siming Road Ningbo, China", hours:"10:00 - 22:00"},
						{map_lat:"30.580552", map_lng:"114.267118", country:"China", city:"WuHan", brand:"CCShop", store_name:"Wuhan Plaza", address:"CCSHOP, 3F, No.688 Jiefang Avenue, Wuhan, China", hours:"10:00 - 22:00"},
						{map_lat:"30.580144", map_lng:"114.267309", country:"China", city:"WuHan", brand:"CCShop", store_name:"Wuhan Internation Plaza", address:"CCSHOP, 4F, No.690 Jiefang Avenue, Wuhan, China", hours:"10:00 - 22:00"},
						{map_lat:"30.658783", map_lng:"104.078411", country:"China", city:"Chengdu", brand:"CCShop", store_name:"Chengdu Wangfujing 1", address:"CCSHOP, 2F, No.15, Zongfu Road, Chengdu, China", hours:"10:00 - 22:00"},
						{map_lat:"30.61997", map_lng:"104.073671", country:"China", city:"Chengdu", brand:"CCShop", store_name:"Chengdu Wangfujing 2", address:"CCSHOP, 1F, No.2 Kehua Middle Road, Wuhou District, Chengdu, China", hours:"10:00 - 22:00"},
						{map_lat:"31.774856", map_lng:"119.960649", country:"China", city:"Changzhou", brand:"CCShop", store_name:"Changzhou Shopping Center", address:"CCSHOP, B1, No.1, West Yanling Road Changzhou, China", hours:"10:00 - 22:00"},
					];
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

