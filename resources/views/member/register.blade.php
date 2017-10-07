@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/register.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/register/main.css') }}">
@stop
@section('content')

        <header>
            <div class = "navigation"></div>
        </header>
        
        <main>
            <div class = "overlay">
                <div class = "content">
                    <section class = "register">
                        <h1>註冊</h1>
                        <div class = "form-register">
                            
                            <form>
                                <i class = "fa fa-user" aria-hidden="true"></i>
                                <input id = "account" type = "text" placeholder = "帳號"><br>
                                <i class = "fa fa-key" aria-hidden="true"></i>
                                <input id = "password" type = "text" placeholder = "密碼"><br>
                                <i class="fa fa-check" aria-hidden="true"></i>

                                <input id = "password" type = "text" placeholder = "確認密碼">
                                <div>
                                    <span id = "verify-checkbox" class = "verify-checkbox">
                                       
                                    </span>
                                    <img src = "pics/check.png">
                                    <h1 class = "verify">I'm not a robot</h1>
                                </div>
                                
                                <input type = "submit" value = "註冊">

                            </form>
                            <h1>已經有帳號了?立刻<a href = "login.html">登入</a></h1>
                        </div>
                        
                    </section>
                </div>
            </div>
        </main>

        <footer></footer>
@stop


