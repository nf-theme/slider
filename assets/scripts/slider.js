(function($) {
    if ($('div').hasClass('vc-type-slick')) {
        $('.vc-slider-run.vc-type-slick').slick();
    }
    if ($('div').hasClass('vc-type-owl')) {
        $('.vc-slider-run.vc-type-owl').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items: 1,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    };
})(jQuery)