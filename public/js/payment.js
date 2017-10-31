$(function() {
    $('.payment-method-toggle').on('click', function() {
        $(this).toggleClass('is-opened');
        $('.payment-method').toggleClass('is-opened');
    });

    $('.payment-method li').on('click', function() {
        var p_name = $(this).text();
        $('.payment-method-toggle span').text(p_name);
    });

    //var width = $('.payment-detail').width();
    //var height = $('.payment-detail').height();
   // $(window).scroll(function() {
      //  var a = $('.payment-detail').offset().top;

     //   if($(this).scrollTop() > a){
         //   $('.payment-detail').css({
         //       'position': 'fixed',
           //     'top': '0',
            //    'left': '50%',
            //    'transform': 'translateX(-50%)',
             //   'margin-bottom': (90)+'px',
            //    'width': width
           // });
        //}
    //});
});