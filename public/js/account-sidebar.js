$(function() {
    $('.toggle span').on('click', function() {
        $('.toggle').toggleClass('is-opened');
        $('.mobile-side-bottom').toggleClass('is-opened');
        if($('.toggle').hasClass('is-opened')){
            $(this).html('&#710');
        }
        else{
            $(this).html('&#711');
        }
    });
});