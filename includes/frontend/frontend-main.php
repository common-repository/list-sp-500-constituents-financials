<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSAPC_FrontEnd_Main
{

	/*
	* MXSAPC_FrontEnd_Main constructor
	*/
	public function __construct()
	{

	}

	/*
	* Additional classes
	*/
	public function mxsapc_additional_classes()
	{

		// enqueue_scripts class
		mxsapc_require_class_file_frontend( 'enqueue-scripts.php' );

		MXSAPC_Enqueue_Scripts_Frontend::mxsapc_register();

		// add shortcodes
		mxsapc_require_class_file_frontend( 'add-shortcodes.php' );

		MXSAPC_Add_Shortcodes::shortcodes_init();

	}

}

// Initialize
$initialize_admin_class = new MXSAPC_FrontEnd_Main();

// include classes
$initialize_admin_class->mxsapc_additional_classes();