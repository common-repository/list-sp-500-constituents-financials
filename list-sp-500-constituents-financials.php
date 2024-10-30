<?php
/*
Plugin Name: List the S&P 500 Constituents Financials
Plugin URI: https://github.com/Maxim-us/SP-500-Constituents-Financials-plugin
Description: The plugin display the list of S&P 500 companies
Author: Maksym Marko
Version: 1.3
Author URI: https://markomaksym.com.ua/
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Unique string - MXSAPC
*/

/*
* Define MXSAPC_PLUGIN_PATH
*
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\list-sp-500-constituents-financials\list-sp-500-constituents-financials.php
*/
if ( ! defined( 'MXSAPC_PLUGIN_PATH' ) ) {

	define( 'MXSAPC_PLUGIN_PATH', __FILE__ );

}

/*
* Define MXSAPC_PLUGIN_URL
*
* Return http://my-domain.com/wp-content/plugins/list-sp-500-constituents-financials/
*/
if ( ! defined( 'MXSAPC_PLUGIN_URL' ) ) {

	define( 'MXSAPC_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

/*
* Define MXSAPC_PLUGN_BASE_NAME
*
* 	Return list-sp-500-constituents-financials/list-sp-500-constituents-financials.php
*/
if ( ! defined( 'MXSAPC_PLUGN_BASE_NAME' ) ) {

	define( 'MXSAPC_PLUGN_BASE_NAME', plugin_basename( __FILE__ ) );

}

/*
* Define MXSAPC_TABLE_SLUG
*/
if ( ! defined( 'MXSAPC_TABLE_SLUG' ) ) {

	define( 'MXSAPC_TABLE_SLUG', 'mxsapc_mx_table' );

}

/*
* Define MXSAPC_PLUGIN_ABS_PATH
* 
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\list-sp-500-constituents-financials/
*/
if ( ! defined( 'MXSAPC_PLUGIN_ABS_PATH' ) ) {

	define( 'MXSAPC_PLUGIN_ABS_PATH', dirname( MXSAPC_PLUGIN_PATH ) . '/' );

}

/*
* Define MXSAPC_PLUGIN_VERSION
*/
if ( ! defined( 'MXSAPC_PLUGIN_VERSION' ) ) {

	// version
	define( 'MXSAPC_PLUGIN_VERSION', '1.3' ); // Must be replaced before production on for example '1.0'

}

/*
* Define MXSAPC_MAIN_MENU_SLUG
*/
if ( ! defined( 'MXSAPC_MAIN_MENU_SLUG' ) ) {

	// version
	define( 'MXSAPC_MAIN_MENU_SLUG', 'mxsapc-list-sp-500-constituents-financials-menu' );

}

/**
 * activation|deactivation
 */
require_once plugin_dir_path( __FILE__ ) . 'install.php';

/*
* Registration hooks
*/
// Activation
register_activation_hook( __FILE__, [ 'MXSAPC_Basis_Plugin_Class', 'activate' ] );

// Deactivation
register_deactivation_hook( __FILE__, [ 'MXSAPC_Basis_Plugin_Class', 'deactivate' ] );


/*
* Include the main MXSAPCSAndPConstituents-financials class
*/
if ( ! class_exists( 'MXSAPCSAndPConstituents-financials' ) ) {

	require_once plugin_dir_path( __FILE__ ) . 'includes/final-class.php';

	/*
	* Translate plugin
	*/
	add_action( 'plugins_loaded', 'mxsapc_translate' );

	function mxsapc_translate()
	{

		load_plugin_textdomain( 'mxsapc-domain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	}

}