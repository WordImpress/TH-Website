/**
 * RAH Landing Page JS
 */

jQuery.noConflict();
(function ( $ ) {
	$( function () {

		//trigger first name field on load
		$( '#f-name' ).focus();

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
								'email': 'leads@rightathome.net',
								'name' : 'RAH Veteran Lead Submission',
								'type' : 'to'
							},
							{
								'email': 'rightathome@franconnect.com',
								'name' : 'RAH Veteran Lead Submission',
								'type' : 'to'
							}
						],
						'autotext'  : 'true',
						'subject'   : 'New Veterans LP Lead Submission',
						'html'      : '<p><strong>First Name:</strong> ' + $form_data.name + '</p>' +
							'<p><strong>Last Name:</strong> ' + $form_data.l_name + '</p>' +
							'<p><strong>Email:</strong> ' + $form.find( '#e-mail' ).val() + '</p>' +
							'<p><strong>Phone:</strong> ' + $form_data.phone + '</p>'
					}
				}
			} ).done(function ( response ) {


			} ).success(function ( response ) {

				window.location = 'http://www.rightathomefranchise.com/contact/thanks/';

			} ).fail( function ( e ) {
				$( '.loading-img' ).fadeOut();
				console.log( 'Whoopsie! Your email failed to send due to: ' + e.status + ' ' + e.statusText + '.' );
			} );
		} );

		//Phone mask
		$('#phone-number').mask('(000) 000-0000');


	} );
})( jQuery );