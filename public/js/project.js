
$(function() {
    $(window).scrollTop(0);
    
    $('.project-category li:first-child').addClass('active');
    var fisrtpos = $('.project-category li:first-child').position().left;
    var fisrtwidth = $('.project-category li:first-child').outerWidth();
    $('.active-box').css({
        'left': fisrtpos+'px',
        'width': fisrtwidth+'px',
        'display': 'block'
    });

    //$('h1').fadeIn(750).next().fadeIn(1800);
    $('h1').animate({'opacity': '1'}, 1000).delay(250).next().animate({'opacity': '1'}, 1000).next().delay(500).animate({'opacity': '1'}, 1000).next().delay(750).animate({'opacity': '1'}, 1000).next().delay(1000).animate({'opacity': '1'}, 1000);
    $('.progress > .bar').addClass('start');



    var li_ps = $('.project-category').offset().top;
    var li_ht = $('.project-category').height();
    var li_width = $('.project-category').width();
    
    var fired = false;
    $(window).scroll(function() {
        if($(this).scrollTop() >= li_ps){
            $('.project-category').css({
                'position': 'fixed',
                'top': '0',
                'box-shadow': '0px 5px 5px 0px lightgray'
            });
            
            $('.gift').css({
                'position': 'fixed',
                'top': (li_ht+50)+'px'
            });

            if(fired === false){
                $('.project-lower').css({
                    'margin-top': '+='+li_ht+'px'
                });
            }
            fired = true;
        }else{
            $('.project-category').css({
                'position': 'relative',
                'border-width': '1',
                'box-shadow': '0px 1px 1px 0px lightgray'
            });

            $('.gift').css({
                'position': 'relative',
                'top': '0'
            });

            if(fired === true){
                $('.project-lower').css({
                    'margin-top': '-='+li_ht+'px'
                });
            }
            fired = false;
        }
    });
    

    //underline
    $('.project-category li').on('click', function() {
        //$('.project-category li.active').removeClass('active');
        //$(this).addClass('active');
        if(!$(this).hasClass('active')){
            var pos = $(this).position().left;
            var width = $(this).outerWidth();
            $('.active-box').animate({
                'left': pos+'px',
                'width': width+'px',
            }, 300);
            $('.project-category .active').removeClass('active');
            $(this).delay(390).queue(function(next) {
                $(this).addClass("active");
                next();
            });
        }else{
            return false;
        }
        
    });


    
    //ajax
    /*$.ajax({
        url : 'project_detail.html',
        type : 'GET',
        success: function(data){
            var t = $(data).find('div').html();
            $('#content').html(t);
        }
    });*/
   
    
    

    //$(window).scroll(function() {
        //var scrollTop = $(this).scrollTop();
            //navbar animation
            //if(scrollTop > 0){
                //$('.navbar').addClass('white is-shrinked');
                //$('.underline').addClass('black-underline');
                //$('.nav-menu, .nav-brand, .nav-menu > li, li.nav-search, .dropdown-list, .nav-search > .icon-search-open').addClass('is-shrinked');
                
            //}else if(scrollTop == 0){
                //$('.navbar').removeClass('white is-shrinked');
                //$('.underline').removeClass('black-underline');
                //$('.nav-menu, .nav-brand, .nav-menu > li, li.nav-search, .dropdown-list, .nav-search > .icon-search-open').removeClass('is-shrinked');   
            //}
    //});

    //paralax


    //textarea
    //CKEDITOR.replace('textarea');
    

});

//project-content
function getData(obj){
    $('.project-content').animate({
        'opacity': '0'
    }, 300, function() {
        var name = obj.id;
        var href = "project_"+name+".html";
        //alert(a);
        $.ajax({
            url : href,
            type : 'GET',
            success: function(data){
                var t = $(data).find('.project-info').html();
                $('#content').html(t);
            }
        });
    });
    $('.project-content').animate({
        'opacity': '1'
    }, 300);
}

