$(function() {
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        var footer = $('footer').offset().top;

        if(scrollTop > (footer-650)){
            $('.group').each(function(i) {
                setTimeout(function() {
                     $('.group').eq(i).addClass('is-showing');
                }, 150 * (i+1));
            })
        }
    });
});