$(document).ready(function ()
{
    var clientSwiper = new Swiper ( '.client-swiper',
    {
        autoplay:
        {
            delay: 0,
        },
        slidesPerView: 4,
        loop: true,
        freeMode: true,
        speed: 20000,
        spaceBetween: 50,
    } );

    function infinite()
    {
        clientSwiper.slideTo( clientSwiper.slides.length );
        clientSwiper.once( 'transitionEnd', function()
        {
            clientSwiper.slideTo( clientSwiper.params.slidesPerView, 0, false );
            setTimeout(function ()
            {
                infinite();
            }, 0 );
        });
    }
    infinite();
} );
