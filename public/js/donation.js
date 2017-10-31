$(function () {
    $('.progress .circle').on('click', function() {
        a = $(this).attr('name');
        for(i = 1; i <= $(this).siblings().length; i++){
            i <= a ? $('[name='+i+']').addClass('active', 800) : $('[name='+i+']').removeClass('active', 800);
        }

    });
    $('.next').on('click', function() {
        a = $(this).attr('name');
        $('[name='+a+']').addClass('active', 800);
    });

    var a;
    var current_form = 0;
    var current_title = 1;
    var current_height;
    $('.progress .circle, .info .next').on('click', function() {
        //alert($(this).attr('name'));
        a = $(this).attr('name');
        current_height = $('.info'+a).height()+190;

        if ($(window).width() > 1050) {
            var d = (-600 * (a-1));

        }
        else if($(window).width() <= 1050 && $(window).width() > 750){
            var d = (-420 * (a-1));
        }
        else{
            var d = (-450 * (a-1));
        }

        $('.title'+current_title).removeClass('title-active');

        $('.title'+a).addClass('title-active');
        //$('.info').css({'left': d+'px'});
        //alert(d);
        if(a > current_form){
            $('.desc'+current_title).animate({'opacity': '0'}, 400);
            $('.desc'+current_title).animate({'z-index': '-1'}, 400);
            $('.info').animate({'left': '-=50px', 'opacity': '0'},400);
            $('.info').animate({'left': (d+50)+'px', 'z-index': '-1'}, 0);
           // $('.info'+current_form).animate({'z-index': '-1'});
            $('.content').delay(400).animate({'height': current_height}, 0);
            $('.desc'+a).animate({'z-index': '1'}, 400);
            $('.desc'+a).animate({'opacity': '1'}, 400);
            $('.info'+a).animate({'z-index': '1'}, 0);
            $('.info'+a).animate({'left': '-=50px', 'opacity': '1'}, 400);
        }else if(a < current_form){
            $('.desc'+current_title).animate({'opacity': '0'}, 400);
            $('.desc'+current_title).animate({'z-index': '-1'}, 400);
            $('.info').animate({'left': '+=50px', 'opacity': '0'},400);
            $('.info').animate({'left': (d-50)+'px', 'z-index': '-1'}, 0);
            $('.content').delay(400).animate({'height': current_height}, 0);
            $('.desc'+a).animate({'z-index': '1'}, 400);
            $('.desc'+a).animate({'opacity': '1'}, 400);
            $('.info'+a).animate({'z-index': '1'}, 0);
            $('.info'+a).animate({'left': '+=50px', 'opacity': '1'}, 400);
        }else{
            return false;
        }


        current_form = a;
        current_title = a;
    });


    $("#duration").bind("input", function() {
        var duration = $(this).val();
        var dday = 12;
        if(duration > 7){
            dday += parseInt(duration);
            $('#duration-date').html('06/'+dday+'/2017');
        }else if(duration == ''){
            $('#duration-date').html('06/12/2017');
        }

    });



    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#project-cover').attr('src', e.target.result);
};