<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Main page Model
*/
class MXSAPC_Main_Page_Model extends MXSAPC_Model
{

	/*
	* Observe function
	*/
	public static function mxsapc_wp_ajax()
	{

		add_action( 'wp_ajax_mxsapc_update', [ 'MXSAPC_Main_Page_Model', 'prepare_update_database_column' ], 10, 1 );

	}

	/*
	* Prepare for data updates
	*/
	public static function prepare_update_database_column()
	{
		
		// Checked POST nonce is not empty
		if( empty( $_POST['nonce'] ) ) wp_die( '0' );

		// Checked or nonce match
		if( wp_verify_nonce( $_POST['nonce'], 'mxsapc_nonce_request' ) ) {

			$mxsapc_columns = [];

			foreach ( $_POST['form_data'] as $key => $value ) {

				if( $value['name'] == 'mxsapc_wpnonce' ) {

					continue;

				}

				$value = sanitize_text_field( $value['value'] );

				array_push( $mxsapc_columns, $value );
								
			}

			$serialize = maybe_serialize( $mxsapc_columns );

			$updated = update_option( 'mxsapc_columns', $serialize );

			echo $updated;

		}

		wp_die();

	}

	
	
	
}