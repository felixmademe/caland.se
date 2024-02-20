'use strict';

console.log("Designed and developed by felix made me.")
console.log("https://felixmade.me")

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

if (/#asbestsanering/.test(window.location.href)) {
    $('#asbestsanering-tab').click();
}
if (/#rivning/.test(window.location.href)) {
    $('#rivning-tab').click();
}
if (/#slipning/.test(window.location.href)) {
    $('#slipning-tab').click();
}
if (/#maskinpark/.test(window.location.href)) {
    $('#maskinpark-tab').click();
}
if (/#transport/.test(window.location.href)) {
    $('#transport-tab').click();
}