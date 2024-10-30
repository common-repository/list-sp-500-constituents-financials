<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// require Route-Registrar.php
require_once MXSAPC_PLUGIN_ABS_PATH . 'includes/core/Route-Registrar.php';

/*
* Routes class
*/
class MXSAPC_Route
{

	public function __construct()
	{
		// ...
	}
	
	public static function mxsapc_get( ...$args )
	{

		return new MXSAPC_Route_Registrar( ...$args );

	}
	
}