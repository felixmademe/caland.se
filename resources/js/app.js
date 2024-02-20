'use strict';

console.log("Designed and developed by felix made me.")
console.log("https://felixmade.me")

const observer = lozad();
observer.observe();

$( '#list-tab a' ).on('click', function ( e )
{
    $( this ).tab( 'show' )
} );

$( document ).on('click', '[data-toggle="lightbox"]', function(event)
{
    event.preventDefault();
    $(this).ekkoLightbox(
    {
        maxWidth: 9999
    } );

} );

$(document).ready(function(e)
{        
    if (window.location.toString().includes('#'))
    {
        var windowTab = GetTabFromWindow()
        TabToOpen(windowTab, e);
    }

    $(".dropdown-item").click(function(event)
    {
        var tab = GetTabFromAnchor($(this));
        TabToOpen(tab, event);
    });
    
    function GetTabFromWindow()
    {
        var href = window.location.href.toString();
        var array = href.split('#');
        return array[array.length - 1];
    }

    function GetTabFromAnchor($element)
    {
        var href = $element.attr('href');
        var array = href.split('#');
        return array[array.length - 1];
    }

    function TabToOpen(tabToClick)
    {
        $('#' + tabToClick + '-tab').click();
    }
});

