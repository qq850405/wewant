@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/proposal.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/proposal/main.css') }}">
@stop
@section('content')

            <main>
            
            <h1 class = "content-title1">Take action and inspire others!</h1>
            <h1 class = "content-title2">We want's powerful tools enable you to share inspiring content that </h1>
            <div class = "progress">
                <div class = "circle active" name = "1">1</div>
                  <div class = "line" name = "2"></div>
                <div class = "circle" name = "2">2</div>
                <div class = "line" name = "3"></div>
                <div class = "circle" name = "3">3</div>
                <div class = "line" name = "4"></div>
                <div class = "circle" name = "4">4</div>
            </div>
            
            <div class = "content">
                <h1 class = "title title1 title-active">計畫大綱</h1>
                <h1 class = "title title2">專案內容</h1>
                <h1 class = "title title3">回饋設定</h1>
                <h1 class = "title title4">提案人資料</h1>
                <hr>
                
                {{Form::open(['action'=>'ProjectController@create','method' => 'post'])}}
                    <div class = "description desc1 current">
                        <h1><i class="fa fa-tag" aria-hidden="true"></i> 專案標題該怎麼取？</h1>
                        <p>一個好的標題應該要包含主題、適合族群。 像是『棒球打擊-打出自己的一片天』、『單車技巧-在逆風中前進』等都是很好的。</p>
                    </div>
                    <div class = "description desc2">
                        <h1><i class="fa fa-tag" aria-hidden="true"></i> 專案標題該怎麼取？</h1>
                        <p>一個好的標題應該要包含主題、適合族群。 像是『棒球打擊-打出自己的一片天』、『單車技巧-在逆風中前進』等都是很好的。</p>
                    </div>
                    <div class = "description desc3">
                        <h1><i class="fa fa-tag" aria-hidden="true"></i> 專案標題該怎麼取？</h1>
                        <p>一個好的標題應該要包含主題、適合族群。 像是『棒球打擊-打出自己的一片天』、『單車技巧-在逆風中前進』等都是很好的。</p>
                    </div>
                    <div class = "description desc4">
                        <h1><i class="fa fa-tag" aria-hidden="true"></i> 專案標題該怎麼取？</h1>
                        <p>一個好的標題應該要包含主題、適合族群。 像是『棒球打擊-打出自己的一片天』、『單車技巧-在逆風中前進』等都是很好的。</p>
                    </div>
                <div class = "info info1 current">
                    <div class = "form-group">
                        <label for = "project-title">專案名稱</label>
                        <input type = "text" id = "project-title" name = "project-title">
                        <span>吸引人的標題很重要</span>
                    </div>
                    <div class = "form-group">
                        <label for = "author">提案人</label>
                        <input type = "text" id = "author" name = "author">
                    </div>
                    <div class = "form-group">
                        <label>專案封面</label>
                        <label for = "cover-upload" class = "img-upload">上傳</label>
                        <input type = "file" id = "cover-upload" name = "cover-pic" accept = "image/*">
                        <span>此圖片將成為您計畫及影片的封面圖片</span>
                        <img id = "project-cover" class = "proposal-img" src = "#" alt = "1024 x 768">
                    </div>
                    
                    
                    <div class = "form-group">
                        <label for = "begin-date">開始募資日期</label>
                        <input type = "date" id = "begin-date" name = "begin-date">
                        <span>由於專案提交後審核需要七個工作天，所以開始時間至少為 7 天後。</span>
                    </div>
                    
                    <div class = "form-group">
                        <label for = "duration">募款天數</label>
                        <input type = "text" id = "duration" name = "duration">
                    </div>
                    <div class = "form-group">
                        <label for = "aims">目標金額</label>
                        <input type = "text" id = "aims" name = "aims">
                    </div>
                    <input type = "button" name = "2" class = "next" value = "下一步">
                </div>

                <div class = "info info2">
                    
                    <div class = "form-group">
                        <label for = "intro">專案介紹</label>
                        <textarea name = "intro" id = "intro" placeholder = "請用100個字以內，簡單扼要地介紹您的專案內容。"></textarea>
                    </div>
                   
                    <input type = "button" name = "3" class = "next" value = "下一步">
                </div>

                <div class = "info info3">
                    <div class = "form-group">
                        <label for = "money">回饋名稱</label>
                        <input type = "text" id = "title" name = "feedback-title">
                    </div>
                    <div class = "form-group">
                        <label>回饋照片</label>
                        <label for = "feedback-pic" class = "img-upload">上傳</label>
                        <input type = "file" id = "feedback-pic" name = "feedback-pic" accept = "image/*">
                        <span>此圖片將成為您計畫及影片的封面圖片</span>
                        <img id = "reward-img" class = "proposal-img" src = "#" alt = "1024 x 768">
                    </div>
                    <div class = "form-group">
                        <label for = "feedback-money">回饋金額</label>
                        <input type = "text" id = "feedback-money" name = "feedback-money">
                    </div>
                    <div class = "form-group">
                        <label for = "feedback-description">回饋描述</label>
                        <input type = "text" id = "feedback-description" name = "feedback-description">
                    </div>
                    <div class = "form-group">
                        <label for = "sent-date">預計寄送時間</label>
                        <input type = "text" id = "sent-date" name = "sent-date">
                    </div>
                    <div class = "form-group">
                        <label for = "sent-method">運送方式</label>
                        <input type = "text" id = "sent-method" name = "sent-method">
                    </div>
                    <input type = "button" name = "4" class = "next" value = "下一步">
                </div>

                <div class = "info info4">
                    <div class = "form-group">
                        <label for = "money">提案負責人姓名</label>
                        <input type = "text" id = "owner" name = "owner">
                    </div>
                    <div class = "form-group">
                        <label for = "author">電子郵件</label>
                        <input type = "email" id = "email" name = "email">
                    </div>
                    <div class = "form-group">
                        <label for = "duration">行動電話</label>
                        <input type = "text" id = "phone" name = "phone">
                    </div>
                    <div class = "form-group">
                        <label for = "money">提案人身份</label>
                        <input type = "text" id = "identity" name = "identity">
                    </div>
                    <input type = "submit" value = "送出審核">
                </div>
                {{ Form::close() }}
            </div>
        </main>



@stop
