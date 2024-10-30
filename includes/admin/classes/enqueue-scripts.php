<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSAPC_Enqueue_Scripts
{

	/*
	* MXSAPC_Enqueue_Scripts
	*/
	public function __construct()
	{

	}

	/*
	* Registration of styles and scripts
	*/
	public static function mxsapc_register()
	{

		// register scripts and styles
		add_action( 'admin_enqueue_scripts', [ 'MXSAPC_Enqueue_Scripts', 'mxsapc_enqueue' ] );

	}

		public static function mxsapc_enqueue()
		{

			wp_enqueue_style( 'mxsapc_font_awesome', MXSAPC_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( 'mxsapc_admin_style', MXSAPC_PLUGIN_URL . 'includes/admin/assets/css/style.css', [ 'mxsapc_font_awesome' ], MXSAPC_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( 'mxsapc_admin_script', MXSAPC_PLUGIN_URL . 'includes/admin/assets/js/script.js', [ 'jquery' ], MXSAPC_PLUGIN_VERSION, false );

			wp_localize_script( 'mxsapc_admin_script', 'mxsapc_admin_localize', [

				'ajaxurl' 			=> admin_url( 'admin-ajax.php' )

			] );

		}

}