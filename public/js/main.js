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


function jobApplication()
{

}

function attachFile()
{

}
