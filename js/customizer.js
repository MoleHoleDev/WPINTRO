// autoodswiezanie podkreslenia navbara

( function( $ ) {
  wp.customize( 'nav_bottom_color', function( value ) {
		value.bind( function( newval ) {
			$( '.navlink' ).css( 'border-bottom-color', newval );
      $( '.navlink.active' ).css( 'background-color', newval );
      $( '.bd-sweep-to-top:before' ).css( 'background-color', newval );
		} );
	} );

} )( jQuery );
