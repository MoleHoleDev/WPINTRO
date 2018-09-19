// autoodswiezanie podkreslenia navbara

( function( $ ) {

  wp.customize( 'nav_bottom_color', function( value ) {
		value.bind( function( newval ) {
			$( '.navlink' ).css( 'border-bottom-color', newval );
		} );
	} );

} )( jQuery );
