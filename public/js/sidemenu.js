(function () {
    $('.hamburger1').on('click', function() {
        $('.bar').toggleClass('animate');
        $('.site-nav').toggleClass('active');
        return false;
    });
})();