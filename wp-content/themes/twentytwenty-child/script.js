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
                dots: false,
                nextArrow: jQuery(".next"),
                prevArrow: jQuery(".prev"),
            });
        }, time);
        jQuery(".carouselna2").slick({
            autoplay: false,
            dots: false,
            slidesToShow: 5,
            nextArrow: jQuery(".next"),
            prevArrow: jQuery(".prev"),
        });
    }, 100);
});
