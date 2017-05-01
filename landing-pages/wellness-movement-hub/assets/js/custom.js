/**
 * RAH Landing Page JS
 */

jQuery.noConflict();
(function ( $ ) {
	$( function () {

		//Hover Image Effect
		var masonry_item = $( '.item' );

		masonry_item.each( function ( e ) {

			var hover_wrap = $( this ).find( '.hover-wrap' );
			var hover_wrap_height = hover_wrap.outerHeight();

			hover_wrap.css( {
				bottom: '-' + hover_wrap_height + 'px'
			} );


			$( this ).hover( function () {

				hover_wrap.stop( true, true ).animate( {
					bottom: '0px',
					opacity: '1'
				} );

			}, function () {
				hover_wrap.animate( {
					bottom: '-' + hover_wrap_height + 'px',
					opacity: '0'
				} );

			} );

		} );


		//fire up validation
		$( '.cta-form' ).bootstrapValidator( {
			live         : 'disabled',
			message      : 'This value is not valid',
			feedbackIcons: {
				valid     : 'glyphicon glyphicon-ok',
				invalid   : 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields       : {
				email: {
					validators: {
						notEmpty    : {
							message: 'The email is required and cannot be empty'
						},
						emailAddress: {
							message: 'The input is not a valid email address'
						}
					}
				}
			}
		} );


	} );
})( jQuery );