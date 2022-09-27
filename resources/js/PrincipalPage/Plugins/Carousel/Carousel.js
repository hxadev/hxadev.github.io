export const Carousel = function() {
    function configCarousel() {
        $("#slider").owlCarousel({
            margin: 15,
            autoWidth: false,
            nav: true,
            loop: true,
            items: 4,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        });
    }
    return {
        init: function() {
            configCarousel();
        }
    };
};
