<div class = "nav-wrapper">
                    
    <div class= "close">
        <span></span>
    </div>
    <hr class = "nav-hr">
    <nav class = "mobile-nav" aria-label = "mobile-nav">
        
        <ul class = "mobile-nav-menu">
            <li class = "nav-search">
                <i class = "fa fa-search icon-search-open" aria-hidden="true"></i>
                <form id = "form-mobile-nav" method = "post" action = "#">
                    <input type = "text" id = "mobile-search" placeholder = "捐贈物資">
                </form>
                <div class = "mobile-search-results">
                    <div class = "mobile-search-result"><div>sdfsdfsdfsdf454654</div></div>
                </div>
                <i class = "fa fa-search icon-search" aria-hidden="true"></i>
            </li>
            <li><a href = "{{  URL::to('/#about-us') }}">關於我們</a></li>
            
            <li><a href = "index.html#project">故事分享</a>
                
            </li>
            <li>
                <a href = "create.html">提案</a>
            </li>
            
            <li class = "mobile-dropdown mobile-dropdown2">

                    <ul class = "mobile-dropdown-list">
                                <div class = "mobile-dropdown-btn">
                @if (Auth::guest())

                <i class="fa fa-plus" aria-hidden="true"></i>
                <i class="fa fa-minus" aria-hidden="true"></i>
                <a>會員</a>
                
                <div class="top-right links">
                    <li><a href = "login.html">登入</a></li>
                    <li><a href = "register.html">註冊</a></li>                      
                        
                    @else
                    <a>{{ Auth::user()->name }}</a>
                    <li><a href="{{ url('/home') }}">Home</a></li>        
                    
                </div>
                @endif
                </div>
                </ul>
            </li>
        </ul>
    </nav>
    <nav class = "navbar" aria-label = "desktop-nav">
        <a href = "{{ URL::to('/')}}" class = "nav-brand"><img src = "pics/wewantfinal.png"></a>
        
        <ul class = "nav-menu">
            <li class = "nav-search">
                <i class = "fa fa-search icon-search-open" aria-hidden="true"></i>
                <form id = "form-nav" method = "post" action = "#">
                    <input type = "text" id = "search" placeholder = "捐贈物資">
                </form>
                <ul class = "search-results">
                    <li class = "search-result">sdfsdfsdfsdf45465</li>
                </ul>
                <i class = "fa fa-search icon-search" aria-hidden="true"></i>
                <span class = "underline" style = "opacity: 0;"></span>
            </li>
            <li>
                <a href = "{{  URL::to('/#about-us') }}">關於我們</a>
                <span class = "underline"></span>
            </li>
            
            <li>
                <a href = "{{  URL::to('/#project') }}">故事分享</a>
                <span class = "underline"></span>
            </li>
            <!--
            <li class="nav-search">搜尋
                <i class = "fa fa-search" aria-hidden="true"></i>
                <input type = "text"　placeholder = "輸入捐贈項目">
            </li>-->
            <li>
                <a href = "{{  URL::to('/CreateProject') }}">提案</a>
                <span class = "underline"></span>
            </li>

            

            <li class = "dropdown dropdown2">

                @if (Auth::guest())
                <a>會員</a>
                    <span class = "underline"></span>
                    <div class = "dropdown-wrapper">
                    <ul class = "dropdown-list dropdown-list2">
                        <li><a href = "{{ URL::to('login')}}">登入</a></li>
                        <li><a href = "{{ URL::to('register')}}">註冊</a></li>
                    </ul>
                    </div>
                
                @else
                    <a>{{ Auth::user()->name }}</a>
                    <span class = "underline"></span>
                    <div class = "dropdown-wrapper">
                    <ul class = "dropdown-list dropdown-list2">
                        <li><a href = "{{ URL::to('login')}}">會員</a></li>
                        <li><a href = "{{ route('logout') }}">登出</a></li>
                        
                    </ul>
                    </div>
                @endif
                    
            </li>

        </ul>
    </nav>
</div>

<div class = "notification-toggle">
    <i class="fa fa-bell" aria-hidden="true"></i>
    <i class="fa fa-times" aria-hidden="true"></i>
</div>
<div class = "notification"></div>