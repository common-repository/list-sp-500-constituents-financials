<div class="mx-main-page-text-wrap">
	
	<h1><?php echo __( 'Settings Page', 'mxsapc-domain' ); ?></h1>

	<div class="mx-block_wrap">

		<form id="mxsapc_form_update" class="mx-settings" method="post" action="">

			<h2>Default script</h2>
			<textarea name="mxsapc_some_string" id="mxsapc_some_string"><?php echo $data->mx_name; ?></textarea>

			<p class="mx-submit_button_wrap">
				<input type="hidden" id="mxsapc_wpnonce" name="mxsapc_wpnonce" value="<?php echo wp_create_nonce( 'mxsapc_nonce_request' ) ;?>" />
				<input class="button-primary" type="submit" name="mxsapc_submit" value="Save" />
			</p>

		</form>

	</div>

</div>