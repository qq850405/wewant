@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/proposal.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/proposal/main.css') }}">
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" />
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!-- Include Editor style. -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_style.min.css' rel='stylesheet' type='text/css' />
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/js/froala_editor.min.js'></script>
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
                <div class = "preview-btn"><i class="fa fa-eye" aria-hidden="true"></i>  預覽</div>
            </div>
            
            <div class = "content">
                <h1 class = "title title1 title-active">計畫大綱</h1>
                <h1 class = "title title2">專案內容</h1>
                <h1 class = "title title3">回饋設定</h1>
                <h1 class = "title title4">提案人資料</h1>
                <hr>

                 {{Form::open(['action'=>'ProjectController@store','method' => 'post', 'files'=>true])}}
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
                        <label for = "title">專案名稱</label>
                        <input type = "text" id = "project-title" name = "project-title">
                        <span>吸引人的標題很重要</span>
                    </div>
                    <div class = "form-group">
                        <label for = "title">專案簡介</label>
                        <input type = "text" id = "introtext" name = "intro">
                        <span>外頭看的啦</span>
                    </div>
                 {{--   <div class = "form-group">
                        <label for = "owner">提案人</label>
                        <input type = "text" id = "" name = "owner">
                    </div>--}}
                    <div class = "form-group">
                        <label>專案封面</label>
                        <label for = "cover-upload" class = "img-upload">上傳</label>
                        <input type = "file" id = "cover-upload" name = "pic" accept = "image/*">
                        <span>此圖片將成為您計畫及影片的封面圖片</span>
                        <img id = "project-cover" class = "proposal-img" src = "#" alt = "1024 x 768">
                    </div>
                    <div class = "form-group">
                        <label for = "begin-date">開始募資日期</label>
                        <input type = "text" id = "begin-time" name = "begin-date">
                        <span>由於專案提交後審核需要七個工作天，所以開始時間至少為 7 天後。</span>
                    </div>
                    
                    <div class = "form-group">
                        <label for = "duration">募款天數</label>
                        <input type = "text" id = "duration" name = "duration">
                    </div>
                    <div class = "form-group">
                        <label for = "money">目標金額</label>
                        <input type = "text" id = "goals" name = "goals">
                    </div>
                    <input type = "button" name = "2" class = "next" value = "下一步">
                </div>

                <div class = "info info2">
                    
                    <div class = "form-group">
                        <label for = "intro">專案介紹</label>
                        <textarea name = "content" id = "intro" placeholder = "請用100個字以內，簡單扼要地介紹您的專案內容。"></textarea>
                    </div>
                   
                    <input type = "button" name = "3" class = "next" value = "下一步">
                </div>

<div class = "info info3">
                    <div class = "reward-table-wrapper">
                        <div class = "reward-table" id = "reward-table1">
                            <h1>回饋<span>1</span></h1>
                            <div class = "table-delete" onclick = "deleteReward(this)"><i class="fa fa-times" aria-hidden="true"></i> 刪除</div>
                            <table>
                                <tr>
                                    <td class = "table-title">回饋名稱</td>
                                    <td class = "table-input"><input type = "text" name = "reward-name1"></td>
                                </tr>
                                <tr>
                                    <td class = "table-title">回饋金額</td>
                                    <td class = "table-input"><input type = "number" name = "reward-price1"></td>
                                </tr>
                                <tr>
                                    <td class = "table-title">回饋封面</td>
                                    <td class = "table-input table-file">
                                        <label for = "reward-upload1" class = "img-upload">上傳</label>
                                        <input class = "reward-upload" type = "file" id = "reward-upload1" onchange = "uploadFile(this)" name = "reward-upload1" accept = "image/*">
                                        <span class = "reward-upload-file"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign = "center" class = "table-title">回饋描述</td>
                                    <td class = "table-input"><textarea name = "reward-des1"></textarea></td>
                                </tr>
                                <tr>
                                    <td class = "table-title">預計寄送時間</td>
                                    <td class = "table-input table-select">
                                        <select name = "reward-month1"></select>
                                        <select name = "reward-year1"></select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <input type="hidden" name="r_num" value="1">

                    <div class = "add-btn" onclick = "addReward()"><i class="fa fa-plus" aria-hidden="true"></i>  新增回饋</div>

                    <input type = "button" name = "4" class = "next" value = "下一步">
                </div>

                <div class = "info info4">
                    <div class = "form-group">
                        <label for = "money">提案負責人姓名</label>
                        <input type = "text" id = "owner" name = "owner">
                    </div>
                    <div class = "form-group">
                        <label for = "author">電子郵件</label>
                        <input type = "text" id = "email" name = "email">
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
            
            <div class = "preview">
                <div class = "preview-project-bg">
                    <div class = "header-text">
                        <h1 class = "project-name">專案名稱</h1>
                        <div class = "author"><h1>由</h1><h1 class = "author-name">專案發起人</h1><h1>發起</h1></div>
                        <div class = "progress">0%
                            <div class = "bar"></div>
                        </div>
                        <div class = "project-outline">
                            <div><h1 class = "total">$ 0</h1><h1>新台幣</h1></div>
                            <div><h1 class = "num">0</h1><h1>人捐款</h1></div>
                            <div><h1 class = "deadline">40</h1><h1>天結束</h1></div>
                        </div>
                        <a class = "donate_btn">捐款</a>
                    </div>
                </div>

                <div class = "preview-content">
                    <nav>
                        <ul class = "project-category">
                            <li id = "project-content">專案內容</li>
                            <li id = "progress">進度</li>
                            <li id = "comments">評論</li>
                            <li id = "supporters">支持者</li>
                            <div class = "active-box"></div>
                        </ul>
                    </nav>
                    <div class = "project-lower row">
                        <div class = "project-content columns eight" id = "content"></div>
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
            </div>
        </main>
        
    



@stop
