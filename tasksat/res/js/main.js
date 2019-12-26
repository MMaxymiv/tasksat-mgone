jQuery(document).ready(function ($) {
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            items: 2,
            center: true,
            margin: 20,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                1024: {
                    items: 2,
                    nav: true
                }
            }
        });

        $('.toggle__header').click(function () {
            $('header').toggleClass('header__show');
        })
    });
});