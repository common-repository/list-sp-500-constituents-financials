<?php 

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// metabox creating main class
class MXSAPC_Metaboxes_Image_Upload_Class
{

	// we will use jQuery
	// So we have to register scripts

	public static function register_scrips()
	{
		add_action( 'admin_enqueue_scripts', ['MXSAPC_Metaboxes_Image_Upload_Class', 'upload_image_scrips'] );
	}

		public static function upload_image_scrips()
		{

			wp_enqueue_script( 'mxsapc_image-upload', MXSAPC_PLUGIN_URL . 'includes/admin/assets/js/image-upload.js', [ 'jquery' ], MXSAPC_PLUGIN_VERSION, false );

		}

}
