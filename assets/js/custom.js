/* =================== Load Function =================== */
jQuery(window).load(function() {
	"use strict";
	/* ----------- Page Loader ----------- */
	jQuery(".loader-item").delay(700).fadeOut();
	jQuery("#pageloader").delay(1000).fadeOut("slow");						
	/* ----------- Pretty Photo ----------- */
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
 		deeplinking: false
 	});
	initPortfolioGrid();
});
/* =================== Load Function Ends =================== */


/* =================== Ready Function =================== */
	jQuery(document).ready(function() {
							   
	
	
	/* ----------- Scroll Navigation ----------- */
	jQuery(function() {
		"use strict";
		jQuery('.scroll').bind('click', function(event) {
			var $anchor = jQuery(this);
			var headerH = jQuery('#navigation-menu').outerHeight();
				jQuery('html, body').stop().animate({					
					scrollTop : jQuery($anchor.attr('href')).offset().top  - 45 + "px"
				}, 1200, 'easeInOutExpo');		
			event.preventDefault();
		});
	});
	
	/* ----------- Animation ----------- */
	jQuery(function() {
		"use strict";
		jQuery('.animated').appear(function() {
			var elem = jQuery(this);
			var animation = elem.data('animation');
			if ( !elem.hasClass('visible') ) {
				var animationDelay = elem.data('animation-delay');
				if ( animationDelay ) {			
					setTimeout(function(){
					 elem.addClass( animation + " visible" );
					}, animationDelay);				
				} else {
					elem.addClass( animation + " visible" );
				}
			}
		});
	});
	
	/* ----------- Active Navigation ----------- */		
	jQuery(function() {
		"use strict";
		jQuery('body').scrollspy({ 
			target: '#nav',
			offset: 95
		});
	});
	
	
	/* ----------- Menus hide after click -- mobile devices ----------- */	
	jQuery(function() {
		"use strict";
		jQuery('.nav li a').click(function () {
			jQuery('.navbar-collapse').removeClass('in');
		});
	});
	
	/* ========== Background image height equal to the browser height.==========*/
	jQuery('.text-slider,.video-bg').css({ 'height': jQuery(window).height() });
  	 jQuery(window).on('resize', function() {
        jQuery('.text-slider,.video-bg').css({ 'height': jQuery(window).height() });
  	 });
	
	/*------Text slider------*/					   
	jQuery(".home-text-slider").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		autoPlay: 5000,
		paginationSpeed : 400,
		singleItem: true,
		navigation: false,
		pagination: true,
		items : 1
  	});
	
	/*------Text slider 2 ( Without Pagination  )------*/					   
	jQuery(".home-text-slider2").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		autoPlay: 5000,
		paginationSpeed : 400,
		singleItem: true,
		navigation: false,
		pagination: false,
		transitionStyle : "fade",
		items : 1
  	});
	
	/*------Testimonial slider------*/					   
	jQuery("#testimonials-slider").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		autoPlay: 3000,
		paginationSpeed : 400,
		singleItem: true,
		navigation: false,
		pagination: true,
		items : 1
  	});
	
	/*------Clients slider------*/					   
	jQuery("#clients-slider").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		autoPlay: 3000,
		paginationSpeed : 400,
		singleItem: false,
		navigation: false,
		pagination: false,
		items : 5,
		itemsDesktop : [1199, 5],
		itemsDesktopSmall : [980, 5],
		itemsTablet : [768, 3],
		itemsTabletSmall : [480, 2],
		itemsMobile : [479, 2]
  	});
	
	/*------Counter------*/		
	jQuery(".count-number").appear(function(){
		jQuery('.count-number').each(function(){
			datacount = jQuery(this).attr('data-count');
			jQuery(this).find('.counter').delay(6000).countTo({
				from: 10,
				to: datacount,
				speed: 3000,
				refreshInterval: 50,
			});
		});
	});
	
	/*------Progress Bar-----*/
	var bar = jQuery('.progress-bar');
		jQuery(bar).appear(function() {
		bar_width = jQuery(this).attr('aria-valuenow');
		jQuery(this).width(bar_width + '%');
		jQuery(this).find('span').fadeIn(500);
	});
	
	
		
	/*------Tool Tip-----*/
	jQuery(function () {
  		jQuery('[data-toggle="tooltip"]').tooltip()
	})
	
	 /* -------- Background Slider -------- */
		jQuery(function() {
		  jQuery('#slides').superslides({
			inherit_width_from: '.wide-container',
			inherit_height_from: '.wide-container'
		  });
		});
	
	/* -----------------Typed Text Slider-------------- */
	jQuery(".element").each(function(){
		var $this = jQuery(this);
		$this.typed({
		strings: $this.attr('data-elements').split(','),
		loop: true,
		typeSpeed: 100, // typing speed
		backDelay: 3000 // pause before backspacing
		});
	});
	  
	 /* ----------- Video Bg ----------- */
	 jQuery(function(){
		jQuery(".movie").mb_YTPlayer();
	  });
	 
	/*------Contact form-----*/
	jQuery('#contactform').bootstrapValidator({
			container: 'tooltip',
			feedbackIcons: {
				valid: 'fa fa-check',
				invalid: 'fa fa-times',
				validating: 'fa fa-refresh'
			},
			fields: {            
				contact_name: {
					validators: {
						notEmpty: {
							message: 'Name is required. Please enter name.'
						}
					}
				},
				contact_number: {
					validators: {
						notEmpty: {
							message: 'Phone is required. Please enter phone number.'
						}
					}
				},
				contact_email: {
					validators: {
						notEmpty: {
							message: 'Email is required. Please enter email.'
						},
						emailAddress: {
							message: 'Please enter a correct email address.'
						}
					}
				},
				contact_message: {
					validators: {
						notEmpty: {
							message: 'Message is required. Please enter your message.'
						}                    
					}
				}
			}
		})
		.on('success.form.bv', function(e) {
						
			var data = jQuery('#contactform').serialize();
			
			$.ajax({
					type: "POST",
					url: "process.php",					
					data: jQuery('#contactform').serialize(),
					success: function(msg){						
						jQuery('.form-message').html(msg);
						jQuery('.form-message').show();
						submitButton.removeAttr("disabled");
						resetForm(jQuery('#contactform'));						
					},
					error: function(msg){						
						jQuery('.form-message').html(msg);
						jQuery('.form-message').show();
						submitButton.removeAttr("disabled");
						resetForm(jQuery('#contactform'));
					}
			 });
			 
			return false;
		});
		function resetForm($form) {
			$form.find('input:text, input:password, input, input:file, select, textarea').val('');
			$form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
			$form.find('.form-control-feedback').css('display', 'none');
		}
		
		/* ----------- Google Map ----------- */	
	jQuery(function() {
		"use strict";		
		function initialize() {
			var myLatlng = new google.maps.LatLng(53.8768115, 27.5683182);
			var mapOptions = {
				zoom: 14,  
				disableDefaultUI: true,
				scrollwheel: true,
				draggable: true,
				center: myLatlng
			};
			var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
			var contentString = '<div id="map-content">'+
			'<p>Название</p>'+
			'<div> Улица,</div>'+
			'<div> Город, Страна,</div>'+
			'<div>Эхэхэ - xxxxx </div>'
			'</div>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			var marker = new google.maps.Marker({
				position: map.getCenter(),
				icon: {
					path: google.maps.SymbolPath.CIRCLE,
					scale: 10
				},
				map: map
			});
		
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
		}
		jQuery('.map').each(function() {
     		google.maps.event.addDomListener(window, 'load', initialize);
		});
    });
	
});
// Portfolio Filter Js 
function initPortfolioGrid() {
  jQuery('.project-grid').each(function(){  
	   var $port_container = jQuery(this);  
	 		
		var filter_selector = $port_container.parent().find('.project-filters a.active').data('filter');  
		
		$port_container.isotope({			
			itemSelector: '.item',
			filter: filter_selector,
			animationEngine: "css",
			masonry: {
				columnWidth: '.grid-sizer'
			}
		});	  
  
		// Portfolio Filter Items
		jQuery('.project-filters a').click(function(){
		
			jQuery(this).parent().parent().find('a.active').removeClass('active');    
			jQuery(this).addClass('active');
			var selector = jQuery(this).parent().parent().find('a.active').attr('data-filter');  
			jQuery(this).parents().find('.project-grid').isotope({ filter: selector, animationEngine : "css" });
		
			return false; 
		});
	});
}

