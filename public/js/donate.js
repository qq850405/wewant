$(function () {
    
    var x = 200;

    $('.dprice').on('click', function() {
        if(!$(this).hasClass('is-opened')){
            $('.dprices .is-opened').removeClass('is-opened');
            $(this).addClass('is-opened');
        }else{
            return false;
        }

        if($(this).offset().top > x){
            //alert(this.nodeName);
            $(this).closest('.dprice-group').prev().css({'height': 'auto', 'margin-bottom': '20px'});
            x = $(this).offset().top;
        }else if($(this).offset().top < x){
            $(this).closest('.dprice-group').animate({'height': '540px', 'margin-bottom': '0'}, 300);
            x = $(this).offset().top;
        }else{
            $(this).closest('.dprice-group').css({'height': '540px'}, 300);
            x = $(this).offset().top;
        }
    });
});