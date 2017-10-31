$(function () {
    

    $('.dprice').on('click', function() {
        if(!$(this).children('form').hasClass('is-opened')){
            $('.dprice form.is-opened, .dprice.is-opened, .dprice hr.is-opened').removeClass('is-opened');
            $(this).addClass('is-opened');
            $(this).children('form').addClass('is-opened');
            $(this).children('hr').addClass('is-opened');
        }else{
            return false;
        }

        
    });
});