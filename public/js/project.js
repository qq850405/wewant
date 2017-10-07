
$(function() {

    //$('h1').fadeIn(750).next().fadeIn(1800);
    $('h1').animate({'opacity': '1'}, 750).delay(250).next().animate({'opacity': '1'}, 750).next().delay(500).animate({'opacity': '1'}, 750).next().delay(750).animate({'opacity': '1'}, 750).next().delay(1000).animate({'opacity': '1'}, 750);
    $('.progress > .bar').addClass('start');

    $(document).on('click', function (e) {
        if($(e.target).closest(".mobile-nav,.close").length === 0) {
            //$(".project-img > img, .progress-bar, hr, .slogan").removeClass('is-overlayed');
            $('.content, .project-pic > img').removeClass('is-overlayed').addClass('no-overlayed');
        }
    });


    $('.project-category li').on('click', function() {
        $('.project-category li.active').removeClass('active');
        $(this).addClass('active');
    });


    
    //ajax
    $.ajax({
        url : 'project_detail.html',
        type : 'GET',
        success: function(data){
            var t = $(data).find('div').html();
            $('#content').html(t);
        }
    });
   
    
    

    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
            //navbar animation
            if(scrollTop > 0){
                $('.navbar').addClass('white is-shrinked');
                $('.underline').addClass('black-underline');
                $('.nav-menu, .nav-brand, .nav-menu > li, li.nav-search, .dropdown-list, .nav-search > .icon-search-open').addClass('is-shrinked');
                
            }else if(scrollTop == 0){
                $('.navbar').removeClass('white is-shrinked');
                $('.underline').removeClass('black-underline');
                $('.nav-menu, .nav-brand, .nav-menu > li, li.nav-search, .dropdown-list, .nav-search > .icon-search-open').removeClass('is-shrinked');
                
            }
    });

    //paralax


    //textarea
    //CKEDITOR.replace('textarea');
    

});

function getData(obj){
    var name = obj.id;
    var href = "project_"+name+".html";
    //alert(a);
    $.ajax({
        url : href,
        type : 'GET',
        success: function(data){
            var t = $(data).find('div').html();
            $('#content').html(t);
        }
    });
}

