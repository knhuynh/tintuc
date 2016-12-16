var layoutNews = {
    slider6Item: function () {
        $('.slider-6item-js').slick({
            dots: false,
            infinite: true,
            speed: 300,
            arrows: true,
            slidesToShow: 5,
            slidesToScroll: 2,
            centerMode: true,
        });

    },
    sliderPicture: function () {
        $('.box-picture-js').slick({
            dots: false,
            infinite: true,
            speed: 300,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });

    }
    
};
$(document).ready(function () {
    layoutNews.slider6Item();
    layoutNews.sliderPicture();
});