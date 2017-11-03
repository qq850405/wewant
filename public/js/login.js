$(function() {
    $(window).scrollTop(0);
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();

        //if(scrollTop > 0){
          //  $('.navbar, .nav-brand, .nav-menu, .nav-menu > li, .dropdown-list').addClass('is-shrinked');
        //}else{
          //  $('.navbar, .nav-brand, .nav-menu, .nav-menu > li, .dropdown-list').removeClass('is-shrinked')
        //}
    });

    $('.verify-checkbox').on('click', function() {
        $(this).animate({
            'opacity': '0',
        }, 200);
        $(this).siblings('img').delay(200).animate({
            'opacity': '1'
        }, 200);
    });
});