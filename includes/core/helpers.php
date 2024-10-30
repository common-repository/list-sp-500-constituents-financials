<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Require class for admin panel
*/
function mxsapc_require_class_file_admin( $file ) {

	require_once MXSAPC_PLUGIN_ABS_PATH . 'includes/admin/classes/' . $file;

}


/*
* Require class for frontend panel
*/
function mxsapc_require_class_file_frontend( $file ) {

	require_once MXSAPC_PLUGIN_ABS_PATH . 'includes/frontend/classes/' . $file;

}

/*
* Require a Model
*/
function mxsapc_use_model( $model ) {

	require_once MXSAPC_PLUGIN_ABS_PATH . 'includes/admin/models/' . $model . '.php';

}

/*
* Debugging
*/
function mxsapc_debug_to_file( $content ) {

	$content = mxsapc_content_to_string( $content );

	$path = MXSAPC_PLUGIN_ABS_PATH . 'mx-debug' ;

	if( ! file_exists( $path ) ) :

		mkdir( $path, 0777, true );

		file_put_contents( $path . '/mx-debug.txt', $content );

	else :

		file_put_contents( $path . '/mx-debug.txt', $content );

	endif;

}
	// pretty debug text to the file
	function mxsapc_content_to_string( $content ) {

		ob_start();

		var_dump( $content );

		return ob_get_clean();

	}