jQuery( function( $ ) {

	$(document).ready(function() {
	  $('body').removeClass('no-js');
	});

	$( '.toggle-menu' ).click( function() {
		$( '.slideout' ).toggleClass( 'active' );
		$( 'body' ).toggleClass( 'menu-open' );
	});

});
