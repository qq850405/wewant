$(function() {
    setTimeout(function() {
        $('.title3').animate({
            'top': '0',
            'opacity': '1'
        }, 900);
    
        $('.title2').delay(150).animate({
            'top': '0',
            'opacity': '1'
        }, 900);
    
        $('.title1').delay(300).animate({
            'top': '0',
            'opacity': '1'
        }, 900, function() {
            $('.about-us-content').animate({
                'opacity': '1'
            }, 1200);
        });
    }, 300);

});