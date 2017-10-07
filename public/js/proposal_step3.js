$(function() {


    $('body').on('keyup', function() {
        if($('#title').val() !== '' && $('#money').val() !== '' && $('#send').val() !== ''){
            $('.add-disabled').css({'display': 'none'});
            $('.add-one').css({'display': 'flex'});
        }
        else{
            $('.add-disabled').css({'display': 'flex'});
            $('.add-one').css({'display': 'none'});
        }
    });

    $( "#send" ).datepicker({ dateFormat: 'yy-mm-dd' }); 
});