<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Error Handle calss
*/
class MXSAPC_Display_Error
{

	/**
	* Error notice
	*/
	public $mxsapc_error_notice = '';

	public function __construct( $mxsapc_error_notice )
	{

		$this->mxsapc_error_notice = $mxsapc_error_notice;

	}

	public function mxsapc_show_error()
	{
		
		add_action( 'admin_notices', function() { ?>

			<div class="notice notice-error is-dismissible">

			    <p><?php echo $this->mxsapc_error_notice; ?></p>
			    
			</div>
		    
		<?php } );

	}

}