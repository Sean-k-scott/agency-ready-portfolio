jQuery( function( $ ) {

	$(document).ready(function() {
	  $('body').removeClass('no-js');
	});

	$( '.toggle-menu' ).click( function() {
		$( '.slideout' ).toggleClass( 'active' );
		$( 'body' ).toggleClass( 'menu-open' );
	});

	$( '.row1' ).click( function() {
  $( '.row1' ).toggleClass( 'collapsed' );
    $( '.content1' ).toggleClass( 'collapse' );
	});

$( '.row2' ).click( function() {
  $( '.row2' ).toggleClass( 'collapsed' );
    $( '.content2' ).toggleClass( 'collapse' );
	});

$( '.row3' ).click( function() {
  $( '.row3' ).toggleClass( 'collapsed' );
    $( '.content3' ).toggleClass( 'collapse' );
	});

$( '.row4' ).click( function() {
  $( '.row4' ).toggleClass( 'collapsed' );
    $( '.content4' ).toggleClass( 'collapse' );
	});

});
