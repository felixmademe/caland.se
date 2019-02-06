$( '#list-tab a' ).on('click', function ( e )
{
    e.preventDefault()
    $( this ).tab( 'show' )
})

var items = $( '.jobs .list-group .list-group-item' );

items.on( 'click', function()
{
    var item = $( this );
    var text = item.html();
    var position = $( 'input[name="position"]' );
    position.val( text );
    var form = $( '.job-application' )[0];
    var name = $( 'input[name="name"]' );
    form.scrollIntoView( { block: 'end',  behavior: 'smooth' } );
    setTimeout( function()
    {
        name.focus();
    }, 500);
} );
