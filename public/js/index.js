$(function (){
        $(window).scrollTop(0);
        

        //slogan
        $('.slogan h1:nth-child(1)').delay(500).fadeIn(2000).next().next().delay(2000).fadeIn(1500);
        //$('.home-btn').delay(1000).fadeIn(750);
        
        

        

        
    
        $(window).scroll(function() {
            
            var projects = $('#project-popular').offset().top;
            var scrollTop = $(this).scrollTop();
            var content = $('.content').offset().top

            //navbar animation
            if(scrollTop > 0){
                $('.navbar').addClass('white is-shrinked');
                $('.underline').addClass('black-underline');
                $('.nav-menu, .nav-menu > li, .nav-menu > li > a, li.nav-search, .dropdown-list, .nav-search > .icon-search-open').addClass('is-shrinked');
                $('.navigation .notification, .navigation .notification-toggle').css({'opacity': '1', 'cursor': 'pointer'});
                
            }else if(scrollTop == 0){
                $('.navbar').removeClass('white is-shrinked');
                $('.underline').removeClass('black-underline');
                $('.nav-menu, .nav-menu > li, .nav-menu > li > a, .nav-menu > li > a, li.nav-search, .dropdown-list, .nav-search > .icon-search-open').removeClass('is-shrinked');
                $('.navigation .notification, .navigation .notification-toggle').css({'opacity': '0', 'cursor': 'auto'});
                
            }
            
            if(scrollTop >= content-100){
                $('.nav-brand').addClass('is-shrinked');
            }else if(scrollTop < content-100){
                $('.nav-brand').removeClass('is-shrinked');
            }

            var bgTop = 50-(scrollTop/5);
            /*home*/
            $('.home-bg').css({
                'background-position-y': bgTop+ '%'
            });


            /*projects*/
            if(scrollTop > (projects-400)){
                $('.project').each(function(i){
                setTimeout(function(){
                    $('.project').eq(i).addClass('animate');
                }, 130 * (i+1));
                });
            }
        });


        /*projects*/
        $('#project-popular .project-category li').on('click', function() {
            $('#project-popular .project-category li').removeClass('active');
            $(this).addClass('active');
            var sports = $(this).attr('id');
            //alert(sports);
            $.ajax({
                type: 'GET',
                url: '',
                data: {
                  'category': 'sports'  
                },
                success: function(data){
                    $('.projects').html(data);
                }
            });
        });

        $('#project-newest .project-category li').on('click', function() {
            $('#project-newest .project-category li').removeClass('active');
            $(this).addClass('active');
            var sports = $(this).attr('id');
            //alert(sports);
            $.ajax({
                type: 'GET',
                url: '',
                data: {
                  'category': 'sports'  
                },
                success: function(data){
                    $('.projects').html(data);
                }
            });
        });


    });

    