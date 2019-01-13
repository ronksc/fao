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
			$('.nav_toggle').click(function(){
				$('.main-menu-wrapper').fadeIn();
			});
			
			$('.btn_close').click(function(){
				$('.main-menu-wrapper').fadeOut();						   
			});
		}
		initNavToggle();
		
		function initialize(inital_point){			
			var location = new google.maps.LatLng(inital_point.map_lat, inital_point.map_lng);
	
			var mapCanvas = document.getElementById('map_div');
			var mapOptions = {
				center: location,
				zoom: inital_point.zoom_level,
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
			
			switch(markerVar.marker_type){
				case 'region':
				  marker = new google.maps.Marker({
					  map: map,
					  id: markerVar.marker_id,
					  type: markerVar.marker_type,
					  position:markerLatlng,
					  icon: region_marker_img,
					  filter_type: markerVar.type,
					  filter_status: markerVar.status,
					  url:markerVar.url,
					  zIndex:25,
					  /*label: {
						  text: markerVar.markerlabel,
						  color: "#2c2c2c",
						  fontSize: "14px",
						  fontWeight: "600",
						  fontFamily: "Montserrat"
					  },*/
					  optimized : false
				  });
				  break;
				  
				case 'property':
				  marker = new google.maps.Marker({
					  map: map,
					  id: markerVar.marker_id,
					  type: markerVar.marker_type,
					  position:markerLatlng,
					  icon: property_marker_img,
					  filter_type: markerVar.type,
					  filter_status: markerVar.status,
					  url:markerVar.url,
					  zIndex:25,
					  optimized : false
				  });
				  
				  $('#property-list ul').append('<li data-markerid="' + markerVar.marker_id + '"><a class="marker-link" data-markerid="' + index + '" href="#">' + markerVar.infoboxText + '</a></li>');
				  
				  var boxText = document.createElement("div");
				  boxText.id = markerVar.marker_id;
				  boxText.className = "markerOverlay";
				  boxText.innerHTML = '<div class="item--svg-clip-path-svg"><svg width="324" height="232"><image xlink:href="'+markerVar.infoboxImage+'" width="324" height="232" /></svg></div><div class="iw-subTitle"><div>'+markerVar.infoboxText+'</div><a href="'+markerVar.url+'"></a></div>';
				  
				  var myOptions = {
						content: boxText,
						disableAutoPan: false,
						maxWidth: 0,
						pixelOffset: new google.maps.Size(-162, -249),
						zIndex: null,
						infoBoxClearance: new google.maps.Size(1, 1),
						isHidden: false,
						pane: "floatPane",
						closeBoxURL: "",
						enableEventPropagation: false
					};
					
					var infowindow = new InfoBox(myOptions);
					infowindows[marker.id] = infowindow;
					
				  break;
			}
			
			map_marker.push(marker);
			
			google.maps.event.addListener(map_marker[map_marker.length - 1], 'click', function() {
				switch(this.type){
					case 'region':
						if(this.url){
							window.location.href = this.url;
						}
						
						break;
					case 'property':
						if(active_info){
							infowindows[active_info].close();	
						}
						
						infowindows[this.id].open(map, this);
						active_info = this.id;
						
						$('#property-list ul a').removeClass('current');
						$('#property-list ul a').eq(index).addClass('current');
						
						break;
				}
			});
			
			google.maps.event.addListener(map, 'click', function() {				
				if(infowindow){
					infowindow.close();
				}
				
				$('#property-list ul a').removeClass('current');
			});
		}
		
		
		
		var googleMapSetup = function(){
			if($('#map_div').length > 0){
				$.when(initialize(inital_point[0])).done(function(){
					for(var i=0; i<marker_value.length; i++){
						codeAddress(marker_value[i], i);
					}
				}).done(function(){
					/*initMapFiltering();
					hideAllMarker();
					initPropertylistMarkerTriggle();
					
					for(var j=0; j<map_marker.length; j++){
						if(map_marker[j].filter_type === 'development' || map_marker[j].filter_type === 'hospitality'){
							map_marker[j].setVisible(true);
							$('#property-list ul li[data-markerid="'+map_marker[j].id+'"]').show();
						}
					}*/
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
