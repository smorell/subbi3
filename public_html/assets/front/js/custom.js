// JavaScript Document

jQuery(document).ready(function(){ 

	// $('a').click(function(){
	// 	if ((this).attr('href') == '#') {
	// 		e.preventDefault();
	// 		return false;
	// 	}
	// });

	/*-----------------------------------------------------------------------------------*/
	/*	Vertical Page Scroller
	/*-----------------------------------------------------------------------------------*/

	jQuery('body').pageScroller({
		navigation: '#nav'
	});

	/*-----------------------------------------------------------------------------------*/
	/*	Button Scroll
	/*-----------------------------------------------------------------------------------*/

	jQuery('a[href*=#contact]').click(function() {

			// skip SmoothScroll on links inside sliders or scroll boxes also using anchors or if there is a javascript call
			if(jQuery(this).parent().hasClass('scrollable_navigation') || jQuery(this).attr('href').indexOf('javascript')>-1) return;

			// duration in ms
			var duration=1000;

			// easing values: swing | linear
			var easing='swing';

			// get / set parameters
			var newHash=this.hash;
			var oldLocation=window.location.href.replace(window.location.hash, '');
			var newLocation=this;

			// make sure it's the same location		
			if(oldLocation+newHash==newLocation)
			{
				// get target
				var target=jQuery(this.hash+', a[name='+this.hash.slice(1)+']').offset().top;

				// adjust target for anchors near the bottom of the page
				if(target > jQuery(document).height()-jQuery(window).height()) target=jQuery(document).height()-jQuery(window).height();			

				// set selector
				if(jQuery.browser.safari) var animationSelector='body:not(:animated)';
				else var animationSelector='html:not(:animated)';

				// animate to target and set the hash to the window.location after the animation
				jQuery(animationSelector).animate({ scrollTop: target }, duration, easing, function() {

					// add new hash to the browser location
					window.location.href=newLocation;
				});

				// cancel default click action
				return false;
			}
		});


	/*-----------------------------------------------------------------------------------*/
	/*	Countdown Timer
	/*-----------------------------------------------------------------------------------*/

	jQuery("#countdown-timer").countdown({
		date: "31 January 2013 18:00:00",
		format: "on"
	});

	/*-----------------------------------------------------------------------------------*/
	/*	prettyPhoto
	/*-----------------------------------------------------------------------------------*/

	jQuery("a[rel^='prettyPhoto']").prettyPhoto({
		show_title: false, /* true/false */
		theme: 'light_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
		overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
		social_tools: false
	});

	/*-----------------------------------------------------------------------------------*/
	/*	Screenshot Overlay
	/*-----------------------------------------------------------------------------------*/

	function fnOverlay() {
		jQuery('.screenshots a').hover( function() {
			jQuery(this).find('.overlay').fadeIn(150);
		}, function() {
			jQuery(this).find('.overlay').fadeOut(150);
		});
	}

	fnOverlay();

	/*-----------------------------------------------------------------------------------*/
	/*	Form Validation
	/*-----------------------------------------------------------------------------------*/

		// Place ID's of all required fields here.
		required = ["name", "email", "subject", "message"];

		// If using an ID other than #email or #error then replace it here
		email 		= jQuery("#email");
		errornotice = jQuery("#error");
		// The text to show up within a field when it is incorrect
		emptyerror = "Please fill out this field.";
		emailerror = "Please enter a valid e-mail.";

		$("#contact_form").submit(function(){
			//Validate required fields
			for (i=0;i<required.length;i++) {
				var input = jQuery('#'+required[i]);
				if ((input.val() == "") || (input.val() == emptyerror)) {
					input.addClass("invalid");
					input.val(emptyerror);
					errornotice.fadeIn(750);
				} else {
					input.removeClass("invalid");
				}
			}
			// Validate the e-mail.
			if (!/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
				email.addClass("invalid");
				email.val(emailerror);
			}
			//if any inputs on the page have the class 'invalid' the form will not submit
			if (jQuery(":input").hasClass("invalid")) {
				return false;
			} else {
				errornotice.hide();
				return true;
			}
		});

		// Clears any fields in the form when the user clicks on them
		jQuery(":input").focus(function(){
			if (jQuery(this).hasClass("invalid") ) {
				jQuery(this).val("");
				jQuery(this).removeClass("invalid");
			}
		});


	});