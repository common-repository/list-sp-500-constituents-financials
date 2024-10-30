<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSAPC_Main_Page_Controller extends MXSAPC_Controller
{
	
	public function settings_menu_item_action()
	{

		return new MXSAPC_View( 'settings-page' );

	}

}