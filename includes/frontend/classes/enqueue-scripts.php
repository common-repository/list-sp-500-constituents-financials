<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSAPC_Enqueue_Scripts_Frontend
{

	/*
	* MXSAPC_Enqueue_Scripts_Frontend
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
		add_action( 'wp_enqueue_scripts', [ 'MXSAPC_Enqueue_Scripts_Frontend', 'mxsapc_enqueue' ] );

	}

		public static function mxsapc_enqueue()
		{

			wp_enqueue_style( 'mxsapc_font_awesome', MXSAPC_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );
			
			wp_enqueue_style( 'mxsapc_style', MXSAPC_PLUGIN_URL . 'includes/frontend/assets/css/style.css', [ 'mxsapc_font_awesome' ], MXSAPC_PLUGIN_VERSION, 'all' );

			// add style
			wp_enqueue_style( 'mxsapc_style_vue', MXSAPC_PLUGIN_URL . 'includes/frontend/assets/css/app.02610d83.css', ['mxsapc_style'], MXSAPC_PLUGIN_VERSION, 'all' );			
			
			wp_enqueue_script( 'mxsapc_script', MXSAPC_PLUGIN_URL . 'includes/frontend/assets/js/script.js', [ 'jquery' ], MXSAPC_PLUGIN_VERSION, false );

			// add JS
			wp_enqueue_script( 'mxsapc_script_vue1', MXSAPC_PLUGIN_URL . 'includes/frontend/assets/js/chunk-vendors.94ca894d.js', ['mxsapc_script'], MXSAPC_PLUGIN_VERSION, true );

			wp_enqueue_script( 'mxsapc_script_vue2', MXSAPC_PLUGIN_URL . 'includes/frontend/assets/js/app.ddaa44e9.js', ['mxsapc_script_vue1'], MXSAPC_PLUGIN_VERSION, true );

			wp_localize_script( 'mxsapc_script_vue2', 'mxsapc_data_obj_front', [

				'plugin_url' => MXSAPC_PLUGIN_URL

			] );				
		
		}

}