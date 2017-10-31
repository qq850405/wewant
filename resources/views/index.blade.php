@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/index.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/index/main.css') }}">

@stop
@section('content')

            
        <header>
            <div class = "home-bg">
                <div class = "navigation"></div>
                <div class = "slogan">
                    <h1>微望 We Want</h1>
                    <br>
                    <h1>We want to make Taiwan better.</h1>
                </div>
            </div>
        </header>
        
        <main>
            <div class = "content">
                <div class = "project-wrappers">
                <section id = "project-popular" class = "project-wrapper">
                    <h1 class = "title">熱門項目</h1>
                    <div class = "project-header">
                        <ul class = "project-category">
                            <li id = "ball" class = "active">球類運動</li>
                            <li id = "martial-arts">技擊運動</li>
                            <li id = "track-and-field">田徑運動</li>
                            <li id = "Fitness">健體運動</li>
                            <li id = "bike">單車類</li>
                            <li id = "others">其他</li>
                        </ul>
                        <div class = "project-search">
                            <i class = "fa fa-search" aria-hidden = "true"></i>
                            <input type = "text">
                        </div>
                    </div>
                    <div class = "mobile-project-header">
                        <select>
                            <option value = "ball">球類運動</option>
                            <option value = "martial-arts">技擊運動</option>
                            <option value = "track-and-field">田徑運動</option>
                            <option value = "Fitness">健體運動</option>
                            <option value = "bike">單車類</option>
                            <option value = "others">其他</option>
                        </select>
                    </div>
                    <hr>
                    @php
                    $count=1
                    @endphp
                    @foreach($query as $var )
                    @if($count % 3== 1)
                        <article class = "projects row">
                    @endif
                    
                        <a href = "{{url('/project/'.$var -> projectNo .'/show')}}" class = "project columns four">
                            <section>
                                <div class = "project-img">
                                    <img src = {{'coverImg/'.$var -> pic_path }}>
                                </div>
                                <div class = "project-content">
                                    <h1>{{$var -> projectName}}</h1>

                                    <article>
                                        {{$var -> introduction}}
                                    </article>
                                    <div class = "progress-bar">0%</div>
                                </div>
                            </section>
                        </a>
                    @if($count %3 ==0)
                    </article>
                    @endif
                    @php
                    $count++
                    @endphp
                    @endforeach
                </section>

                <section id = "project-newest" class = "project-wrapper">
                    <h1 class = "title">最新項目</h1>
                    <div class = "project-header">
                        <ul class = "project-category">
                            <li id = "ball" class = "active">球類運動</li>
                            <li id = "martial-arts">技擊運動</li>
                            <li id = "track-and-field">田徑運動</li>
                            <li id = "Fitness">健體運動</li>
                            <li id = "bike">單車類</li>
                            <li id = "others">其他</li>
                        </ul>
                        <div class = "project-search">
                            <i class = "fa fa-search" aria-hidden = "true"></i>
                            <input type = "text">
                        </div>
                    </div>
                    <div class = "mobile-project-header">
                        <select>
                            <option value = "ball">球類運動</option>
                            <option value = "martial-arts">技擊運動</option>
                            <option value = "track-and-field">田徑運動</option>
                            <option value = "Fitness">健體運動</option>
                            <option value = "bike">單車類</option>
                            <option value = "others">其他</option>
                        </select>
                    </div>
                    <hr>
                    <article class = "projects row">
                        <a href = "project.html" class = "columns four test">
                            <section class = "project">
                                <div class = "project-img">
                                    <img src = "pics/IMG_4800.jpg">
                                </div>
                                <div class = "project-content">
                                    <h1>微望台灣，專題測試。</h1>

                                    <article>
                                        微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。
                                    </article>
                                    <div class = "progress-bar">0%</div>
                                </div>
                            </section>
                        </a>
-->
                    </article>
                </section>
                
            </div>

            
        </main>
.progress-bar {
background: linear-gradient(to right, rgb(85,164,78) 70%, white 0%);
}
@stop


