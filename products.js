$(document).ready(function() {
    $('#scrollUpButton').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 100);
        return false;
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#scrollUpButton').fadeIn();
        } else {
            $('#scrollUpButton').fadeOut();
        }
    });

    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, {
        dist: -50,
        padding: 100,
        indicators: true
    });

    var itemCount = $('.card').length;
    $('#itemCount').text(itemCount);
});
