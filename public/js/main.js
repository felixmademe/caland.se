$(document).ready(function ()
{
    let clientSwiper = new Swiper ( '.client-swiper',
    {
        loop: true,
        speed: 20000,
        slidesPerView: 2,


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
