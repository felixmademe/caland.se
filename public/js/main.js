var setFileName = function ()
{
    var fileName = $( '#fileInput' ).val();
    var set = fileName.split( '/' );
    console.log('saker');
    $( '#fileName' ).html( fileName );
};

$( '#fileLabel' ).on( 'click', function()
{
    $( '#fileInput' ).click();
    setInterval(setFileName, 2000);
} );

var items = $( '.jobs .list-group .list-group-item' )

items.on( 'click', function()
{
    var item = $( this );
    var text = item.html();
    var position = $( 'input[name="position"]' );
    position.val( text );
    var form = $( '.job-application' )[0];
    form.scrollIntoView( { block: 'end',  behavior: 'smooth' } );
} );
