<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// create table class
require_once MXSAPC_PLUGIN_ABS_PATH . 'includes/core/create-table.php';

class MXSAPC_Basis_Plugin_Class
{

	private static $table_slug = MXSAPC_TABLE_SLUG;

	public static function activate()
	{

		self::create_option_for_activation();
		

	}

	public static function deactivate()
	{

		// Rewrite rules
		flush_rewrite_rules();

	}

	/*
	* This function sets the option in the table for CPT rewrite rules
	*/
	public static function create_option_for_activation()
	{

		// add_option( 'mxsapc_flush_rewrite_rules', 'go_flush_rewrite_rules' );

		$get_options = get_option( 'mxsapc_columns' );

	    if( ! $get_options ) {

	    	$mxsapc_columns = [
	    		'Symbol',
		        'Name',
		        'Price',
		        'Sector'
	    	];

	    	$serialize = maybe_serialize( $mxsapc_columns );

			$updated = update_option( 'mxsapc_columns', $serialize );

	    }

	}

}