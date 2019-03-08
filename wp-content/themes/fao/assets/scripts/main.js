/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
		
		function initNavToggle(){
			$('.brand-toggle>a').click(function(){
				if($(this).hasClass('opened')){
					$('.brand-toggle').find('.sub-menu').hide();
					$(this).removeClass('opened');
				}else{
					$('.brand-toggle').find('.sub-menu').show();	
					$(this).addClass('opened');
				}
			});
			
			$('.nav_toggle').click(function(){
				$('.main-menu-wrapper').fadeIn();
			});
			
			$('.btn_close').click(function(){
				$('.main-menu-wrapper').fadeOut();						   
			});
			
			if($(window).width() <= 768){
				$('.main-menu-container').css('height',$(window).height());	
			}else{
				$('.main-menu-container').css('height','auto');
			}
			
			$(window).resize(function(){
				if($(window).width() <= 768){
					$('.main-menu-container').css('height',$(window).height());	
				}else{
					$('.main-menu-container').css('height','auto');
				}							  
			});
		}
		initNavToggle();
		
		function initialize(inital_point){			
			var location = new google.maps.LatLng(inital_point.map_lat, inital_point.map_lng);
	
			var mapCanvas = document.getElementById('map_div');
			var mapOptions = {
				center: location,
				zoom: 17,
				panControl: false,
				disableDefaultUI: true,
				//scrollwheel: false,
				navigationControl: false,
				mapTypeControl: false,
				//scaleControl: false,
				//disableDoubleClickZoom: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: [
				  {
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#f5f5f5"
					  }
					]
				  },
				  {
					"elementType": "labels.icon",
					"stylers": [
					  {
						"visibility": "off"
					  }
					]
				  },
				  {
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#616161"
					  }
					]
				  },
				  {
					"elementType": "labels.text.stroke",
					"stylers": [
					  {
						"color": "#f5f5f5"
					  }
					]
				  },
				  {
					"featureType": "administrative.land_parcel",
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#bdbdbd"
					  }
					]
				  },
				  {
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#eeeeee"
					  }
					]
				  },
				  {
					"featureType": "poi",
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#757575"
					  }
					]
				  },
				  {
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#e5e5e5"
					  }
					]
				  },
				  {
					"featureType": "poi.park",
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#9e9e9e"
					  }
					]
				  },
				  {
					"featureType": "road",
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#ffffff"
					  }
					]
				  },
				  {
					"featureType": "road.arterial",
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#757575"
					  }
					]
				  },
				  {
					"featureType": "road.highway",
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#dadada"
					  }
					]
				  },
				  {
					"featureType": "road.highway",
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#616161"
					  }
					]
				  },
				  {
					"featureType": "road.local",
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#9e9e9e"
					  }
					]
				  },
				  {
					"featureType": "transit.line",
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#e5e5e5"
					  }
					]
				  },
				  {
					"featureType": "transit.station",
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#eeeeee"
					  }
					]
				  },
				  {
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
					  {
						"color": "#c9c9c9"
					  }
					]
				  },
				  {
					"featureType": "water",
					"elementType": "geometry.fill",
					"stylers": [
					  {
						"color": "#c8d7d4"
					  },
					  {
						"visibility": "on"
					  }
					]
				  },
				  {
					"featureType": "water",
					"elementType": "labels.text.fill",
					"stylers": [
					  {
						"color": "#9e9e9e"
					  }
					]
				  }
				]
			};
			map = new google.maps.Map(mapCanvas, mapOptions);
		}
		
		function codeAddress(markerVar, index) {
			
			var markerLatlng = new google.maps.LatLng(markerVar.map_lat, markerVar.map_lng);
			var marker;
			
			marker = new google.maps.Marker({
				  map: map,
				  id: markerVar.marker_id,
				  //type: markerVar.marker_type,
				  position:markerLatlng,
				  icon: region_marker_img,
				  //filter_type: markerVar.type,
				  //filter_status: markerVar.status,
				  //url:markerVar.url,
				  zIndex:25,
				  optimized : false
			  });
			
			map_marker.push(marker);
		}
		
		var centerByCity = function(cityVal){
			var lookup = {};
			for(var i=0; i<location_value.length; i++){
				lookup[location_value[i].city] = location_value[i];
			}
			
			var bounds = new google.maps.LatLngBounds();
			
			$('.storelocator__list-content').html('');
			var shop_address='', zoom_count=0, zoom_level;
			for(var j=0; j<marker_value.length; j++){
				
				if(marker_value[j].city === lookup[cityVal].city){
					zoom_count++;
					var marker_pos = new google.maps.LatLng(marker_value[j].map_lat, marker_value[j].map_lng);
					bounds.extend(marker_pos);
					
					shop_address +='<div class="storelocator__list-item">';
						shop_address +='<div class="list-item__title">'+marker_value[j].store_name+'</div>';
						shop_address +='<div class="list-item__address">'+marker_value[j].address+'</div>';
						shop_address +='<div class="list-item__hour">';
							shop_address +='<div class="list-item__hour-toggle"><?php echo _e("Opening hours");?></div>';
							shop_address +='<div class="list-item__hour-content">'+marker_value[j].hours+'</div>';
						shop_address +='</div>';
					shop_address +='</div>';
				}
			}
			
			if(zoom_count === 1){
				zoom_level = 17;
			}
			
			$('.storelocator__list-content').html(shop_address);
			
			map.fitBounds(bounds); //auto-zoom
			map.panToBounds(bounds); //auto-center
			
			var listener = google.maps.event.addListener(map, "idle", function () {
				if(zoom_level){
					map.setZoom(zoom_level);
				}
				google.maps.event.removeListener(listener);
			});
		};
		
		var cityOption = function(countryVal){
			$('#city_select').html('');
			
			var select_city = [];
			for(i = 0; i< location_value.length; i++){    
				if(location_value[i].country === countryVal){
					select_city.push(location_value[i].city);	
				}
			}
			
			$('#city_select').append(function(){
				var elem = $('<select id ="city_option">');
				for (var i = 0; i < select_city.length; i++) {
					 
					 elem.append('<option value="' + select_city[i] + '">' + select_city[i] + '</option>');
				}
				return elem;	 
			});	
		};
		
		var area_selector = function(){
			var unique_country = [];
			for(i = 0; i< location_value.length; i++){    
				if(unique_country.indexOf(location_value[i].country) === -1){
					unique_country.push(location_value[i].country);        
				}        
			}
			
			//console.log(unique_country);
			
			$('#country_select').append(function(){
				var elem = $('<select id ="country_option">');
				for (var i = 0; i < unique_country.length; i++) {
					 
					 elem.append('<option value="' + unique_country[i] + '">' + unique_country[i] + '</option>');
				}
				return elem;
			});
			
			$('#country_option').change(function(){
				console.log($(this).val());
				cityOption($(this).val());
			});
			
			//first country 's city
			cityOption(unique_country[0]);
			
			centerByCity($('#city_option').val());
			
			$('#map_search').click(function(){
				var selected_country = $('#country_option').val();
				var selected_city = $('#city_option').val();
				
				centerByCity(selected_city);
			});
		};
		
		
		var googleMapSetup = function(){
			if($('#map_div').length > 0){
				$.when(initialize(inital_point[0])).done(function(){
					for(var i=0; i<marker_value.length; i++){
						codeAddress(marker_value[i], i);
					}
				}).done(function(){
					area_selector();
				});
			}
		};
		
		googleMapSetup();
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
	'page_template_template_press':{
	  init: function(){
		var year_select = function(){
			$('#year_select').change(function(){
				if(this.value !== ''){
					window.location.href=this.value;
				}
			});
		};
		year_select();
		
		function load_news(page, category){
			var ajaxurl = '/wp-admin/admin-ajax.php';
			
			switch(category){
				case 'press-release':
					var data = {
					  page: press_page ? press_page:1,
					  per_page : 5,
					  yearData: year_value,
					  categoryData: category, 
					  action: "load-press"
					};
					
					$.post(ajaxurl, data, function(response) {
					  //$('#news_container').html('');
					  $response = $(response);
					  $response.hide();
					  $("#press_container").append($response);
					  
					  $response.fadeIn(500);
					  
					  if(press_lastpage){
						$('.press_loadmore').hide();  
					  }
					});
					break;
				case 'editorial':
					var data = {
					  page: editorial_page ? editorial_page:1,
					  per_page : 5,
					  yearData: year_value,
					  categoryData: category, 
					  action: "load-press"
					};
					
					$.post(ajaxurl, data, function(response) {
					  //$('#news_container').html('');
					  $response = $(response);
					  $response.hide();
					  $("#editorial_container").append($response);
					  
					  $response.fadeIn(500);
					  
					  if(editorial_lastpage){
						$('.editorial_loadmore').hide();  
					  }
					});
					break;	
			}
	  	}
		
		$('.press_loadmore').click(function(){
			press_page++;
			
			load_news(press_page, 'press-release');
		});
		
		$('.editorial_loadmore').click(function(){
			editorial_page++;
			
			load_news(editorial_page, 'editorial');
		});
      }	
	}
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
