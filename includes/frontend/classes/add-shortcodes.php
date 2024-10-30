<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

class MXSAPC_Add_Shortcodes
{

	public static function shortcodes_init()
	{

		// display companies
		add_shortcode('mx_display_s_and_p_500', ['MXSAPC_Add_Shortcodes', 'mx_display_s_and_p_500_func']);
	}

	public static function mx_display_s_and_p_500_func()
	{

		ob_start(); ?>

		<?php

		$get_options = get_option('mxsapc_columns');

		$options = [];

		if ($get_options) {

			$options = maybe_unserialize($get_options);
		}

		?>

		<noscript><strong>We're sorry but list-sp-500-constituents-financials doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>

		<script>
			window.mxsapc_option_columns = [

				<?php foreach ($options as $key => $value) {

					echo '"' . $value . '",';
				} ?>

			];
		</script>

		<div id="mx_s_and_p_app" class="s-and-p-500-constituents-financials"></div>

<?php return ob_get_clean();
	}
}
