<script>	
	var full_url = '<?=get_permalink()?>';
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATPxXUfuRPFk71eoJyHd5Fn0Z_unFmDkE"></script>


<div class="container">
	<div class="row">
		<div class="page_feature_image">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/home/home_1.jpg" class="img-fluid"/>
		</div>
	</div>
	
	<div class="row module module__text">
		<div class="text__element">
			<p><span class="text__element-title">OUR CCSHOP</span> MULTIBRAND RETAIL SIGNATURE CONCEPT OFFERS A PERFECT MODERN/ VERSATILE NEST TO SHOW CASE FASHION, ACCESSORIES WITH THE BEST BRAND EXPERIENCE EDITION.</p>
		</div>
	</div>
	<div class="row module module__brand-logo">
		<div class="col-12">
			<div class="row text-center logo_row">
				<div class="col-md-6 align-self-center"><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo/logo_karen_millen.png"/></a></div>
				<div class="col-md-6 align-self-center"><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo/logo_address.png"/></a></div>
			 </div>
			 
			 <div class="row text-center logo_row">
				<div class="col-md-6 align-self-center"><a href="/brand/"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo/logo_eqiq.png"/></a></div>
				<div class="col-md-6 align-self-center"><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo/logo_enzo_angiolini.png"/></a></div>
			 </div>
			 
			 <div class="row text-center logo_row">
				<div class="col-md-6 align-self-center"><a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo/logo_dune_london.png"/></a></div>
			 </div>
		</div>
	</div>	
	<div class="row module module__img-text">
		<div class="blackbar before"></div>
		
		<div class="text__element">
			<p><span class="text__element-title">WHAT’S CCSHOP?</span> CCSHOP IS A MULTI-BRAND CONCEPT STOCKING THE NEWEST READY-TO-WEAR AND ACCESSORIES TRENDS FROM LEADING EUROPEAN BRANDS. A GO-TO PLACE FOR THE FRESHEST STYLES OFF THE RUNWAY OR ON THE STREET, CCSHOP OFFERS A MULTITUDE OF SEASONAL FASHION AND ACCESSORIES, WITH A CONSISTENT FOCUS ON UPDATING CORE AND FASHION STAPLES.</p>
			<p>STATIONED IN THE CENTER OF APAC MARKET POPULATED WITH MOBILE-FIRST AND DIGITAL-SAVVY FASHIONISTAS, CCSHOP TAKES ADVANTAGE OF ITS HUGE CUSTOMER AND FAN BASE CROSS ASIA, USING VARIOUS ONLINE CHANNELS TO RECRUIT AND ENGAGE WITH NEW AND EXISTING MEMBERS. SOCIAL COMMERCE, IN PARTICULAR, PLAYS A CRITICAL ROLE IN SUPPORTING CUSTOMER RELATIONSHIP. THIS INNOVATIVE BUSINESS APPROACH HAS BEEN PROVEN EFFECTIVE BY WAY OF REGULAR ONE-ON-ONE COMMUNICATION THROUGH THE CC CLUB DATABASE CONSISTING OF OVER 1.5 MILLION MEMBERS IN ASIA-PACIFIC REGION. CCSHOP’S SUCCESS ALSO LIES IN THE WELL-ESTABLISHED WECHAT STORE WHERE RESPONSIVE CONTENTS ARE MADE AVAILABLE EVERY DAY TO FEED THE APPETITE OF FASHIONISTAS OF ALL AGES AND STYLES.</p>
		</div>
		<div class="img__element">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/banner-ccshop.jpg" class="img-fluid"/>
		</div>
	</div>
	
	<div class="row module module__storelocator">
		<div class="module__storelocator-title">STORE LOCATOR</div>
		
		<div class="col-12">
			<div class="row storelocator__map-row">
				<div class="col-6">
					<div class="storelocator__map-wrapper">
						<div id="map_div"></div>
					</div>
				</div>
				<div class="col-6">
					<div class="storelocator__filter-element">
						<div class="storelocator__filter-title">Country</div>
						<div class="storelocator__filter-input">
							<select>
								<option>China</option>
							</select>
						</div>
					</div>
					<div class="storelocator__filter-element">
						<div class="storelocator__filter-title">City</div>
						<div class="storelocator__filter-input">
							<select id="storelocator_area">
								<option value="1">ShangHai</option>
								<option value="2">TianJin</option>
								<option value="3">SuZhou</option>
								<option value="4">HangZhou</option>
								<option value="5">NingBo</option>
								<option value="6">WuHan</option>
								<option value="7">Chengdu</option>
								<option value="8">Changzhou</option>
							</select>
						</div>
					</div>
					<div class="storelocator__filter-element">
						<div class="storelocator__filter-input">
							<input class="button" type="submit" value="Search" />
						</div>
					</div>
					<div class="storelocator__list-wrapper">
						<div class="storelocator__list-content">
							<div class="storelocator__list-item">
								<div class="list-item__title">Shanghai Sogo</div>
								<div class="list-item__address">CCSHOP, 2F, No.1618  West Nanjing Road, Jing'an District, Shanghai,China</div>
								<div class="list-item__hour">
									<div class="list-item__hour-toggle">Opening hours</div>
									<div class="list-item__hour-content">10:00 - 22:00</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row module module__img-text">
		<div class="blackbar before"></div>
		
		<div class="text__element">
			<p><span class="text__element-title">CCSHOP Online</span></p>
		</div>
		<div class="img__element">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/img_ccshop_online.png" class="img-fluid"/>
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