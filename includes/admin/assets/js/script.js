jQuery( document ).ready( function( $ ) {

	$( '#mxsapc_form_update' ).on( 'submit', function( e ) {

		e.preventDefault();

		var nonce = $( this ).find( '#mxsapc_wpnonce' ).val();

		var form_data = $( this ).serializeArray()

		var data = {

			'action': 'mxsapc_update',
			'nonce': nonce,
			'form_data': form_data

		};

		jQuery.post( mxsapc_admin_localize.ajaxurl, data, function( response ){

			if( response === '1' ) {

				alert( 'Data saved!' );

			} else {

				alert( 'You should make changes on the settings page!' );

			}

		} );

	} );

} );