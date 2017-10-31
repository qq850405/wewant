
$(function() {

    //nav-search toggle
    $('li.nav-search > .icon-search-open').on('click', function() {
        $('li.nav-search > .icon-search, li.nav-search > .icon-search-open, .nav-menu > li.nav-search > form, .nav-menu > li.nav-search > form > input').addClass('is-opened');
    });

    //nav-search submit
    $('.nav-menu > li.nav-search > .icon-search').on('click', function() {
        $('#form-nav').submit();
    });

    //mobile-nav toggle
    $('.close').on('click', function() {
        $('.mobile-nav, .close, .nav-brand, .header, .content').toggleClass('is-opened');
    });

    
    //search
    
        
        

        $("#search").bind("input", function() {
            
            if($("#search").val() !== ''){
                $('.search-results').css({'display': 'block'})
                
            }
            else{
                $('.search-results').css({'display': 'none'})
            }

            var search = $("#search").val();

            $.ajax({
                type : 'GET',
                url : 'search.php',
                data: {
                    'search': 'search'
                },
                success: function(data){
                    var t = $(data).find('div').html();
                    $('#content').html(t);
                }
            });
        });

        $("#mobile-search").bind("input", function() {
            
            if($("#mobile-search").val() !== ''){
                $('.mobile-search-results').css({'display': 'block'});
                $('.mobile-nav-menu input').css({
                    'border-radius': '5px 5px 0 0'
                });
            }
            else{
                $('.mobile-search-results').css({'display': 'none'});
                $('.mobile-nav-menu input').css({
                    'border-radius': '5px'
                });
            }

            
            var search = $("#mobile-search").val();
            $.ajax({
                type : 'GET',
                url : 'search.php',
                data: {
                    'search': 'search'
                },
                success: function(data){
                    var t = $(data).find('div').html();
                    $('#content').html(t);
                }
            });
        });
    

        
        
    
   

    //mobile-nav-search toggle
    $('.mobile-nav-menu > .nav-search > i').on('click', function() {
        $('.mobile-nav-menu > .nav-search > form, .mobile-nav-menu > .nav-search > form > input').toggleClass('is-opened');
    });

    //mobile-nav-search submit
    $('.mobile-nav-menu > li.nav-search > .icon-search').on('click', function() {
        $('#form-mobile-nav').submit();
    });

    //mobile-dropdown
    $('.mobile-dropdown1 > .mobile-dropdown-btn').on('click', function() {
        $('.mobile-dropdown1 > .mobile-dropdown-list').toggleClass('is-opened');
    });

    $('.mobile-dropdown2 > .mobile-dropdown-btn').on('click', function() {
        $('.mobile-dropdown2 > .mobile-dropdown-list').toggleClass('is-opened');
    });

    $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();

            //navbar animation
            if(scrollTop > 0){
                if(!$('.close').hasClass('is-opened')){
                    $('.close').addClass('is-shrinked');
                }
                
            }else if(scrollTop == 0){
                $('.close').removeClass('is-shrinked');
            }
    });

    

    //click anywhere else to close
    $(document).on('click', function (e) {
        if($(e.target).closest("li.nav-search").length === 0) {
            $(".nav-menu > li.nav-search > form, li.nav-search > form > input, li.nav-search > .icon-search, li.nav-search > .icon-search-open").removeClass('is-opened');
            $('.search-results').css({'display': 'none'});
            $('#search, #mobile-search').val('');
            $('.mobile-nav-menu input').css({
                'border-radius': '5px'
            });
            $('.mobile-search-results').css({'display': 'none'});
        }

        if($(e.target).closest(".mobile-nav,.close").length === 0) {
            $(".mobile-nav, .close, .nav-brand").removeClass('is-opened');
        }

        if($(e.target).closest(".mobile-dropdown").length === 0) {
            $(".mobile-dropdown-list").removeClass('is-opened');
        }
    });    

    //chat-room
    $('.notification-toggle').on('click', function() {
        $('.notification-toggle i, .notification').toggleClass('is-opened');
    });
});




