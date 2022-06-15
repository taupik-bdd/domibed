jQuery(document).ready(function () {
    console.log(jQuery(".elementor-editor-active").length);
    setTimeout(function () {
        var el_editor = jQuery(".elementor-editor-active").length;
        if (el_editor < 1) {
            var time = 100;
        } else {
            var time = 4000;
        }

        setTimeout(function () {
            jQuery(".carouselna").slick({
                autoplay: false,
                dots: true,
                nextArrow: jQuery(".carouselna-next"),
                prevArrow: jQuery(".carouselna-prev"),
            });
        }, time);
        jQuery(".carouselna2").slick({
            autoplay: false,
            dots: false,
            slidesToShow: 5,
            nextArrow: jQuery(".next"),
            prevArrow: jQuery(".prev"),
        });
        setTimeout(function () {
            jQuery(
                ".slider-product-sale .elementor-widget-container .product_list_widget"
            ).slick({
                autoplay: false,
                dots: false,
                slidesToShow: 3,
                nextArrow: jQuery(".next"),
                prevArrow: jQuery(".prev"),
            });
        });
    }, 100);
});
