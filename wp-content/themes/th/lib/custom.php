<?php
/**
 * Custom functions
 */

// filter the Gravity Forms button type
add_filter( "gform_submit_button_1", "form_submit_button_1", 10, 2 );
function form_submit_button_1( $button, $form ) {
	return "<button type='submit' id='gform_submit_button_{$form["id"]}' class='square-btn square-btn-white gform_button' tabindex='6'><span>Start the Convo</span></button>";
}

// filter ALL the Gravity Forms button type
add_filter( "gform_submit_button", "form_submit_button", 10, 2 );
function form_submit_button( $button, $form ) {
	return "<button type='submit' id='gform_submit_button_{$form["id"]}' class='square-btn gform_button' tabindex='2'><span>Submit</span></button>";
}


//Gravity Forms WordPress style AJAX Spinner
add_filter("gform_ajax_spinner_url", "spinner_url", 10, 2);
function spinner_url($image_src, $form){

	$wp_spinner_url = admin_url().'/images/spinner.gif';

    return $wp_spinner_url;
}


/**
 * Fix Gravity Form Tabindex Conflicts
 * http://gravitywiz.com/fix-gravity-form-tabindex-conflicts/
 */
add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
    $starting_index = 1000; // if you need a higher tabindex, update this number
    if( $form )
        add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
    return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}

/**
 * Browser Detection
 */

$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;


/**
 * SSL Fix
 */
/**
 *
 *  Force http/s for images in WordPress
 *
 *  Source:
 *  https://core.trac.wordpress.org/ticket/15928#comment:63
 *
 *  @param $url
 *  @param $post_id
 *
 *  @return string
 */
function ssl_post_thumbnail_urls( $url, $post_id ) {

	//Skip file attachments
	if ( ! wp_attachment_is_image( $post_id ) ) {
		return $url;
	}

	//Correct protocol for https connections
	list( $protocol, $uri ) = explode( '://', $url, 2 );

	if ( is_ssl() ) {
		if ( 'http' == $protocol ) {
			$protocol = 'https';
		}
	} else {
		if ( 'https' == $protocol ) {
			$protocol = 'http';
		}
	}

	return $protocol . '://' . $uri;
}

add_filter( 'wp_get_attachment_url', 'ssl_post_thumbnail_urls', 10, 2 );
