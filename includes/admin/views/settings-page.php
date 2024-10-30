<div class="mx-main-page-text-wrap">
	
	<h1><?php echo __( 'S&P 500 settings page.', 'mxsapc-domain' ); ?></h1>

	<div class="mx-block_wrap">

		<form id="mxsapc_form_update" class="mx-settings" method="post" action="">

			<h2>Display columns</h2>

			<?php

				$columns = [
			        'Symbol',
			        'Name',
			        'Price',
			        'Sector',
			        '52 Week High',
			        '52 Week Low',
			        'Dividend Yield',
			        'EBITDA',
			        'Earnings/Share',
			        'Market Cap',
			        'Price/Book',
			        'Price/Earnings',
			        'Price/Sales',
			        'SEC Filings'
				];

			    $get_options = get_option( 'mxsapc_columns' );

			    $options = [];

			    if( $get_options ) {

			      	$options = maybe_unserialize( $get_options );

			    }

			?>

			<?php foreach ( $columns as $key => $column ) : ?>

				<?php

					$id = str_replace( ' ', '_', $column );
					$id = str_replace( '/', '_', $id );
					$id = strtolower( $id );

				?>

				<p>

					<?php

						$checked = in_array( $column, $options ) ? 'checked' : '';

					?>
					
					<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $id; ?>" value="<?php echo $column; ?>" <?php echo $checked; ?> />

					<label for="<?php echo $id; ?>"><?php echo $column; ?></label>

				</p>

			<?php endforeach; ?>

			<p class="mx-submit_button_wrap">
				<input type="hidden" id="mxsapc_wpnonce" name="mxsapc_wpnonce" value="<?php echo wp_create_nonce( 'mxsapc_nonce_request' ) ;?>" />
				<input class="button-primary" type="submit" name="mxsapc_submit" value="Save" />
			</p>

		</form>

	</div>

</div>