$(function() {
    $('.payment-method-toggle').on('click', function() {
        $(this).toggleClass('is-opened');
        $('.payment-method').toggleClass('is-opened');
    });
});