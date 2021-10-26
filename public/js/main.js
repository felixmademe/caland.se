'use strict';

const observer = lozad();
observer.observe();

$( '#list-tab a' ).on('click', function ( e )
{
    $( this ).tab( 'show' )
} );

if( window.location.hash )
{
    var hash = window.location.hash.substring(1);
    if( hash == 'asbest' )
    {
        var container = $( '.underline' )[ 0 ];
        $( '#asbestsanering-tab' ).click();
        container.scrollIntoView( {
                inline: 'end',
                behavior: 'smooth',
        } );
    }
}

$( document ).on('click', '[data-toggle="lightbox"]', function(event)
{
    event.preventDefault();
    $(this).ekkoLightbox(
    {
        maxWidth: 9999
    } );
} );
