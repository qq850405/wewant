$(function () {
    //editor;
    $('#intro').froalaEditor({
        height: 500,
        //language: 'ro'
        toolbarButtons: ['bold', 'italic', 'underline', '|', 'align', 'formatOL', 'formatUL', 'insertHR', 'insertLink', 'insertFile', 'insertImage', 'insertVideo']
    });

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
        if($('.preview').hasClass('is-opened')){
            $('.preview').removeClass('is-opened');
            $('.content').removeClass('is-closed');
        }
        //alert($(this).attr('name'));
        a = $(this).attr('name');
        current_height = $('.info'+a).height()+190;

        if ($(window).width() > 1050) {
            var d = (-599 * (a-1));

        }
        else if($(window).width() <= 1050 && $(window).width() > 750){
            var d = (-419 * (a-1));
        }
        else{
            var d = (-449 * (a-1));
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

    //preview toggle
    $('.preview-btn').on('click', function() {
        $('.preview').toggleClass('is-opened');
        $('.content').toggleClass('is-closed');

        $('.preview .project-name').html($('.info1 #title').val());
        $('.preview .author-name').html($('.info1 #author').val());
        $('.preview .deadline').html($('.info1 #duration').val());
        //var p = tinyMCE.activeEditor.getContent({ format: 'text' });
        $('.preview #content').html($('#intro').text());
        //alert($('.preview #content').html());
        //CKEDITOR.instances['intro'].getData().replaceAll("\n\n","\n");
        //alert(CKEDITOR.instances['intro'].document.getBody().getText());
        $('.preview .deadline').html($('.info1 #duration').val());
        $('.preview .project-content').html($('.info2 #intro').val());
        $('.preview .preview-project-bg').css({'background-image': 'url('+ $('#project-cover')[0].src +')'});

        var item = document.getElementsByClassName("reward-table");
        //$('.gift').remove();
        for(var i = 0; i < item.length; i++){
            $('#reward'+(i+1)+' .gift-price').html('$'+$('#reward-table'+(i+1)+' [name = "reward-price'+(i+1)+'"]').val());
            $('#reward'+(i+1)+' .gift-name').html($('#reward-table'+(i+1)+' [name = "reward-name'+(i+1)+'"]').val());
            $('#reward'+(i+1)+' .gift-des').html($('#reward-table'+(i+1)+' [name = "reward-des'+(i+1)+'"]').val());
            $('#reward'+(i+1)+' .gift-date').html($('#reward-table'+(i+1)+' [name = "reward-year'+(i+1)+'"]').val()+'年'+$('#reward-table'+(i+1)+' [name = "reward-month'+(i+1)+'"]').val()+'月');
            alert($('#reward-table'+(i+1)+' [name = "reward-price'+(i+1)+'"]').val());
        }

        
    });

    
    var d = new Date();
    var y = d.getFullYear();
    var ty = document.getElementsByName('reward-year1')[0];
    var tm = document.getElementsByName('reward-month1')[0];
    for(var i = y; i < y+10; i++){
        var op = new Option(i, i, false, false);
        ty.add(op);
    }
    for(var i = 1; i <= 12; i ++){
        var op = new Option(i+'月', i, false, false);
        tm.add(op);
    }


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

    //image
    $("#cover-upload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = coverIsLoaded1;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function uploadFile(obj){
    var x = obj.id.substring(13, 14);
    //alert(obj.id);
    if (obj.files && obj.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
            $('#reward-cover'+x).attr('src', e.target.result);
            $('#reward-table'+x+' .reward-upload-file').html($('#reward-upload'+x).val());
        };
        reader.readAsDataURL(obj.files[0]);
    }
}

function coverIsLoaded1(e) {
    $('#project-cover').attr('src', e.target.result);
};

//add reward
var r;
function addReward() {
    //add reward
    var item = document.getElementsByClassName("reward-table");
	
    
    //alert(document.getElementsByClassName("reward-table")[i].getElementsByClassName("table-input")[0].innerHTML);
    if(item.length == 0){
        document.getElementsByClassName("reward-table-wrapper")[0].appendChild(r);
    }else{
        r = item[item.length-1].cloneNode(true);
        document.getElementsByClassName("reward-table-wrapper")[0].appendChild(r);
        //alert(item.length);
        //item[item.length-1].id = 'reward'+item.length;
    }
    
    var item_input = document.getElementsByClassName("reward-table")[item.length-1].getElementsByClassName("table-input");
    //var item_input = querySelectorAll('#reward-table'+item.length+' .table-input');
    //alert(item_input[3]);

    //change number of rewards
    var r_num = $('.info3 [name=r_num]');
    r_num.val( parseInt(r_num.val(), 10)+1 );

    //set new reward-table attributes
    item[item.length-1].id = 'reward-table'+item.length;
	item_input[0].innerHTML = '<input type = "text" name = "reward-name'+item.length+'">';
    item_input[1].innerHTML = '<input type = "number" name = "reward-price'+item.length+'">';
	item_input[2].innerHTML = '<label for = "reward-upload'+item.length+'" class = "img-upload">上傳</label>'+
            '<input class = "reward-upload" type = "file" id = "reward-upload'+item.length+'" onchange = "uploadFile(this)" name = "reward-upload'+item.length+'" accept = "image/*">'+
         '<span class = "reward-upload-file"></span>';
    item_input[3].innerHTML = '<textarea name = "reward-des'+item.length+'"></textarea>';
    item_input[4].getElementsByTagName('select')[0].setAttribute('name', 'reward-month'+item.length);
	item_input[4].getElementsByTagName('select')[1].setAttribute('name', 'reward-year'+item.length);

    document.querySelector('#reward-table'+item.length+' .img-upload').htmlFor = 'reward-upload'+item.length;
    //document.querySelector('#reward-table'+item.length+' .reward-upload').id = 'reward-upload'+item.length;
    $('#reward-table'+item.length+' .reward-upload-file').html('');
    
	//alert(item_input[0].innerHTML);

    //clear data
    var inputs = r.getElementsByTagName('input');
    for(var i = 0; i < inputs.length; i++){
        inputs[i].value = '';
    }
    r.getElementsByTagName('textarea')[0].value = '';
    r.getElementsByClassName('reward-upload')[0].value = '';
    //alert(r.getElementsByClassName('reward-upload')[0].value);
    r.getElementsByTagName('h1')[0].getElementsByTagName('span')[0].innerHTML = item.length;

    //add gift
    var x = item.length;
    $('.project-gift').append("<div class = 'gift' id = 'reward"+x+"'>");
    $('#reward'+x).append("<div class = 'gift-intro'>");
    $('#reward'+x+' .gift-intro').append(
        "<h1 class = 'gift-price'>").append(
            "<img id = 'reward-cover"+x+"' class = 'reward-cover' src = '#' alt = ''>").append(
                "<h1 class = 'gift-name'>").append(
                    "<h1 class = 'gift-des'>").append(
                        "<div class = 'gift-time'><h1>預計</h1><h1 class = 'gift-date'>2017/06</h1><h1>寄送</h1></div>");

    //change content height
    if(item.length > 1){
        var page = document.getElementsByClassName("content")[0];
        var pageH = page.offsetHeight;
        var itemH = document.getElementsByClassName("reward-table")[0].offsetHeight;
        pageH += itemH+40;
        page.style.height = pageH+'px';
    }
}

function deleteReward(obj) {
    //remove reward
    var item = document.getElementsByClassName("reward-table");
	
    if(item.length == 1){
        r = item[item.length-1].cloneNode(true);
    }
    obj.parentNode.parentNode.removeChild(obj.parentNode);

    //change number of rewards
    var r_num = $('.info3 [name=r_num]');
    r_num.val( parseInt(r_num.val(), 10)-1 );

    //reset title order
    for(var i = 0; i < item.length; i++){
        item[i].getElementsByTagName('h1')[0].getElementsByTagName('span')[0].innerHTML = i+1;
    }
    
    //remove gift
    var rd = obj.parentNode.id;
    var res = rd.substring(12, 13);
    $('#reward'+res).remove();
    
    
    //reset reward-table attributes
    for(var i = 0; i < item.length; i ++){
        item[i].id = 'reward-table'+(i+1);

        document.getElementsByClassName("reward-table")[i].getElementsByClassName("table-input")[0].getElementsByTagName('input')[0].name = 'reward-name'+(i+1);
        document.getElementsByClassName("reward-table")[i].getElementsByClassName("table-input")[1].getElementsByTagName('input')[0].name = 'reward-price'+(i+1);
		document.getElementsByClassName("reward-table")[i].getElementsByClassName("table-input")[2].getElementsByTagName('input')[0].name = 'reward-upload'+(i+1);
	    document.getElementsByClassName("reward-table")[i].getElementsByClassName("table-input")[3].getElementsByTagName('textarea')[0].name = 'reward-dec'+(i+1);
		document.getElementsByClassName("reward-table")[i].getElementsByClassName("table-input")[4].getElementsByTagName('select')[0].name = 'reward-month'+(i+1);
		document.getElementsByClassName("reward-table")[i].getElementsByClassName("table-input")[4].getElementsByTagName('select')[1].name = 'reward-year'+(i+1);
        
        $('#reward-table'+(i+1)+' .img-upload').attr('for', 'reward-upload'+(i+1));
        $('#reward-table'+(i+1)+' .reward-upload').attr('id', 'reward-upload'+(i+1));
        $('.gift')[i].id = 'reward'+(i+1);
        $('#reward'+(i+1)+' img').attr('id', 'reward-cover'+(i+1));
    }
    //alert($('#reward-table2 .reward-upload').attr('id'));
    //alert($('.reward-table').index($('')));

    //change content height
    var page = document.getElementsByClassName("content")[0];
    var pageH = page.offsetHeight;
    var itemH = document.getElementsByClassName("reward-table")[0].offsetHeight;
    pageH -= itemH+40;
    page.style.height = pageH+'px';
}
