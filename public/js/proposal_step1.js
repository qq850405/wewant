



$(function() { 
    //create.html
    $("#project-name").bind("input", function() {
        if($(this).val() !== ''){
            $("#label").css({'display': 'none'});
            //alert('21');
        }else{
            $("#label").css({'display': 'block'});
        }
    });

    
    $( "#begin-date" ).datepicker({ dateFormat: 'yy-mm-dd' }); 
});