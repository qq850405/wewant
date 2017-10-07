$(function() {

    


    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();

        if(scrollTop > 0){
            $('.navbar, .nav-brand, .nav-menu, .nav-menu > li, .dropdown-list').addClass('is-shrinked');
        }else{
            $('.navbar, .nav-brand, .nav-menu, .nav-menu > li, .dropdown-list').removeClass('is-shrinked')
        }
    });


    var day = [], month = [], year = [];

    for(i = 1; i <= 31; i++){
        day.push('<option value="'+i+'">'+i+'</option>');
    }

    for(i = 1; i <= 12; i++){
        month.push('<option value="'+i+'">'+i+'</option>');
    }

    var d = new Date();
    var y = d.getFullYear();
    for(i = y-1000; i <= y; i++){
        year.push('<option value="'+i+'">'+i+'</option>');
    }
    $('#day').html(day.join(''));
    $('#month').html(month.join(''));
    $('#year').html(year.join(''));


    
    
    //alert(a);
    
});
