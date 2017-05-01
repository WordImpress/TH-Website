/**
 * NAUSA Landing Page JS
 */

jQuery.noConflict();
(function ( $ ) {
	$( function () {

		//trigger first name field on load
		$( '#email' ).focus();

		//fire up validation
		$( '.cta-form' ).bootstrapValidator( {
			message      : 'This value is not valid',
			live         : 'disabled',
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
		} ).on( 'success.form.bv', function ( e ) {

			var challengeField = $( "input#recaptcha_challenge_field" ).val();
			var responseField = $( "input#recaptcha_response_field" ).val();

			//Validate Recaptcha
			$.ajax( {
				type   : 'POST',
				url    : 'assets/validateform.php',
				data   : encodeURI( 'form=signup&recaptcha_challenge_field=' + challengeField + '&recaptcha_response_field=' + responseField ),
				async  : false,
				success: function ( resp ) {

					if ( resp === 'success' ) {

						//SUCCESS
						//Proceed with AJAX submission

						/**
						 * AJAX Form Submission upon validation
						 */

							// Prevent form submission
						e.preventDefault();

						$( '.loading-img' ).fadeIn();

						var $form = $( 'form.cta-form' );


						var $form_data = JSON.parse( '{"' + decodeURI( $form.serialize() ).replace( /"/g, '\\"' ).replace( /&/g, '","' ).replace( /=/g, '":"' ) + '"}' );

						//Messages Calls => https://mandrillapp.com/api/docs/messages.html
						$.ajax( {
							type: 'POST',
							url : 'https://mandrillapp.com/api/1.0/messages/send.json',
							data: {
								'key'    : '2utd509ohKWbqfaoacNsJA',
								'message': {
									'from_email': decodeURIComponent( $form_data.email ),
									'to'        : [
										{
											'email': 'test@needausaddress.com',
											'name' : '',
											'type' : 'to'
										}
									],
									'autotext'  : 'true',
									'subject'   : 'New Buffalo LP Lead Submission',
									'html'      : '<p><strong>Email:</strong> ' + $form.find( '#e-mail' ).val() + '</p>'
								}
							}
						} ).success(function ( response ) {

							//Redirect user to step 2
							window.location = '';

						} ).fail( function ( e ) {
							$( '.loading-img' ).fadeOut();
							console.log( 'Whoops! Your email failed to send due to: ' + e.status + ' ' + e.statusText + '.' );
						} );


					}
					else {
						//FAILED CAPTCHA
						$( '#captcha-status' ).html( "<small class='help-block'>The security code you entered did not match. Please try again.</small>" );
						Recaptcha.reload();
					}
				}
			} );
			return false;


		} );

		//Phone mask
		//@see: http://stackoverflow.com/questions/11633726/phone-mask-with-jquery

		$( '#phone-number', '.cta-form' )

			.keydown( function ( e ) {
				var key = e.charCode || e.keyCode || 0;
				$phone = $( this );

				// Auto-format- do not expose the mask as the user begins to type
				if ( key !== 8 && key !== 9 ) {
					if ( $phone.val().length === 4 ) {
						$phone.val( $phone.val() + ')' );
					}
					if ( $phone.val().length === 5 ) {
						$phone.val( $phone.val() + ' ' );
					}
					if ( $phone.val().length === 9 ) {
						$phone.val( $phone.val() + '-' );
					}
				}

				// Allow numeric (and tab, backspace, delete) keys only
				return (key == 8 ||
					key == 9 ||
					key == 46 ||
					(key >= 48 && key <= 57) ||
					(key >= 96 && key <= 105));
			} )

			.bind( 'focus click', function () {
				$phone = $( this );

				if ( $phone.val().length === 0 ) {
					$phone.val( '(' );
				}
				else {
					var val = $phone.val();
					$phone.val( '' ).val( val ); // Ensure cursor remains at the end
				}
			} )

			.blur( function () {
				$phone = $( this );

				if ( $phone.val() === '(' ) {
					$phone.val( '' );
				}
			} );


		//Recaptcha
		$( window ).load( function () {
			$( '#recaptcha_response_field' ).attr( 'tabindex', '3' );
		} );


	} );
})( jQuery );