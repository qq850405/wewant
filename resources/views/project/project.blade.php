@extends('layouts.master')

@section('title','微望')
@section('heads')
         
        <link rel = "stylesheet" type = "text/css" href = "/style/project/main.css">
        <link rel = "stylesheet" type = "text/css" href = "/style/project/projectInfo/main.css">
        <script src = "/js/project.js"></script>
        <meta name="_token" content="{{ csrf_token() }}"/>
@stop
@section('content')

       
        
        @foreach($query as $var)
        
        <header>
            <div class = "project-bg">
                <div class = "navigation"></div>
                <div class = "header-text">
                    <h1 class = "project-name">{{$var -> projectName}}</h1>
                    <div class = "author"><h1>由</h1><h1 class = "author-name">{{$var -> owner}}</h1><h1>發起</h1></div>
                    <div class = "progress">70%
                        <div class = "bar"></div>
                    </div>
                    <div class = "project-outline">
                        <div><h1 class = "total">$ {{$var -> goals}}</h1><h1>新台幣</h1></div>
                        <div><h1 class = "num">0</h1><h1>人捐款</h1></div>
                        <div><h1 class = "deadline">40</h1><h1>天結束</h1></div>
                    </div>
                    <a href = "donate.html" class = "donate_btn">捐款</a>
                </div>
            </div>
        </header>

        <main>
            <div class = "content">
                <nav>
                    <ul class = "project-category">
                        <li id = "story" onclick = "getData(this)">專案內容</li>
                        <li id = "progress" onclick = "getData(this)">進度</li>
                        <li id = "comments" onclick = "getData(this)">評論</li>
                        <li id = "supporters" onclick = "getData(this)">支持者</li>
                        <div class = "active-box"></div>
                    </ul>
                </nav>
                <div class = "project-lower row">
                    <div class = "project-content columns eight" id = "project-content"></div>
                    <div class = "project-gift columns four">
                        <hr>
                        <div class = "gift" id = "reward1">
                            <div class = "gift-intro">
                                <h1 class = "gift-price">$100</h1>
                                <img id = "reward-cover1" class = "reward-cover" src = "#" alt = "">
                                <h1 class = "gift-name">感謝卡片</h1>
                                <h1 class = "gift-des"></h1>
                                <div class = "gift-time"><h1>預計</h1><h1 class = "gift-date">2017/6月</h1><h1>寄送</h1></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @endforeach

<script>

    $.ajax({
        url : 'project_story',
        type : 'GET',
        success: function(data){
            var t = $(data).children().html();
            $('#project-content').html(t);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            //console.log(errorThrown);
        }
    });    
    function getData(obj){
        $('.project-content').animate({
            'opacity': '0'
        }, 300, function() {
            var name = obj.id;
            var href = "project_"+name+"";
            // var href = "{{url('/project."+name+"')}}";
            //alert(a);
            $.ajax({
                url : href,
                type : 'GET',
                success: function(data){
                    
                    var t = $(data).first().html();
                    $('#project-content').html(t);
                },

                error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
            });
        });
        $('.project-content').animate({
            'opacity': '1'
        }, 300);
    }
    
</script>


@stop
