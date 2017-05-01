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
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function ( $ ) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
	var Roots = {
		// All pages
		common  : {
			init: function () {

				//Responsive Nav
				var anchor = $( '.lines-button' );
				var open = false;

				anchor.on( 'click', function ( event ) {

					event.preventDefault();
					if ( !open ) {
						this.classList.add( 'close' );
						open = true;
					}
					else {
						this.classList.remove( 'close' );
						open = false;
					}
				} );


			}
		},
		// Home page
		home    : {
			init: function () {

				//preloader
				$( window ).load( function () { // makes sure the whole site is loaded
					$( '.loading' ).fadeOut( 'normal' ); // will first fade out the loading animation
					$( '.th-main-logo' ).delay( 300 ).addClass( 'downeffect' ); //fade in logo nicely
					$( '.introduction-wrap .border-heading' ).delay( 300 ).addClass( 'upeffect' ); //fade in logo nicely

					$( '#loading-wrap' ).delay( 350 ).fadeOut( 'slow', function () {

					} ); // will fade out the white DIV that covers the website.

					$( 'body' ).delay( 350 ).css( {'overflow': 'visible'} );
				} );


				//Window widget/height stuffs
				var windowWidth = $( window ).width();
				var windowHeight = $( window ).height();

				//scroll down from first slide on click
				$( '.arrow-down' ).on( 'click', function () {

					var scroll_to = "#" + $( this ).data( 'scroll-to' );

					$( 'html,body' ).animate( {
						scrollTop: $( scroll_to ).offset().top
					}, 1200, 'easeOutCubic' );

				} );

				//Typing functionality
				$( window ).on( 'load', function () {
					$( ".typed-js" ).typed( {
						strings  : ["" +
						"Results",
							"Relationships",
							"Buy-In",
							"Customers",
							"Local Sales",
							"Business",
							"Unit Economics",
							"Web Experience",
							"Stories"
						],
						typeSpeed: 30, // typing speed
						backDelay: 2500, // pause before backspacing
						loop     : true // loop on or off (true or false)
					} );
				} );

				//Slide 3
				$( ".diamondswrap" ).diamonds( {
					size: 250, // Size of the squares
					gap : 2 // Pixels between squares
				} );

				//Diamonds click event
				$( '.diamond-inner .absolute-center' ).on( 'click', function () {
					//check width
					windowWidth = $( window ).width();
					//this is the hidden text to display
					var text_reveal = $( this ).parent().parent().find( 'p.hidden' ).text();
					// this is the text heading, section title, text
					var text_description = $( this ).find( '.square-outline' ).text();
					//combine them into some nice html
					text_reveal = '<span class="reveal-title">' + text_description + ':</span> ' + text_reveal + '<br><a href="#" class="back-btn"></a>';
					//grab height of current slide
					var current_height = $( '#we-understand .slide-inner' ).height();

					if ( windowWidth > 590 ) {
						$( '.diamondswrap' ).fadeOut( 'normal', function () {

							$( '.diamond-text-display' ).height( current_height ).fadeIn( 'normal', function () {

								$( this ).find( '.reveal-txt' ).empty().html( text_reveal ).fadeIn( 'fast' );

							} );

						} );
					} else {

						// From an element with ID #popup
						$.magnificPopup.open( {
							items: {
								src : text_reveal,
								type: 'inline'
							}
						} );
					}

				} );
				//Diamond back
				$( document ).on( 'click', '.back-btn', function ( e ) {

					e.preventDefault();
					$( '.diamond-text-display' ).fadeOut( 'normal', function () {

						$( this ).find( '.reveal-txt' ).empty();

						$( '.diamondswrap' ).fadeIn( 'normal' );
					} );

				} );


				//Hexagons
				$( '.hexagon' ).on( 'click', function () {

					var text_reveal = $( this ).find( 'p.hidden' ).text();
					var text_description = $( this ).find( '.yellow-txt' ).text();
					text_reveal = '<span class="reveal-title">' + text_description + ':</span> ' + text_reveal + '<br><a href="#" class="back-btn"></a>';
					var current_height = $( '.hexagon-wrap' ).height();

					//If window view is higher than
					if ( windowWidth > 590 ) {
						$( '.hexagon-inner' ).fadeOut( 'normal', function () {

							$( '.hexagon-text-display' ).height( current_height ).fadeIn( 'normal', function () {

								$( this ).find( '.reveal-txt' ).empty().html( text_reveal ).fadeIn( 'fast' );

							} );

						} );
					} else {

						// From an element with ID #popup
						$.magnificPopup.open( {
							items: {
								src : text_reveal,
								type: 'inline'
							}
						} );
					}


				} );
				$( document ).on( 'click', '.back-btn', function ( e ) {

					e.preventDefault();

					$( '.hexagon-text-display' ).fadeOut( 'normal', function () {

						$( this ).find( '.reveal-txt' ).empty();

						$( '.hexagon-inner' ).fadeIn( 'normal' );
					} );

				} );


				$( '#introduction, #why-we-exist' ).css( {
					width : windowWidth,
					height: windowHeight
				} );

				//window load slide degration
				$( window ).on( 'load resize', function () {
					var windowWidth = $( window ).width();
					var windowHeight = $( window ).height();

					$( '#introduction, #why-we-exist' ).css( {
						width : windowWidth,
						height: windowHeight
					} );

					if ( windowWidth < 590 ) {
						$( '.diamondswrap' ).diamonds( 'destroy' );
					}

					//no Ad Tubular
					var video = $( 'iframe#tubular-player' );
					var video_height = video.height();
					var video_width = video.width();

					video.css( {
						width: video_width + 200
					} );

				} );


			}
		},
		// About us page, note the change from about-us to about_us.
		about_us: {
			init: function () {
				// JavaScript to be fired on the about us page
			}
		}
	};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
	var UTIL = {
		fire      : function ( func, funcname, args ) {
			var namespace = Roots;
			funcname = (funcname === undefined) ? 'init' : funcname;
			if ( func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function' ) {
				namespace[func][funcname]( args );
			}
		},
		loadEvents: function () {
			UTIL.fire( 'common' );

			$.each( document.body.className.replace( /-/g, '_' ).split( /\s+/ ), function ( i, classnm ) {
				UTIL.fire( classnm );
			} );
		}
	};

	$( document ).ready( UTIL.loadEvents );

})( jQuery ); // Fully reference jQuery after this point.
