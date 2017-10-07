@extends('layouts.master')
@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/login.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/login/main.css') }}">
@stop
@section('content')
        <header>
            <div class = "navigation"></div>
        </header>
        <main>
<div class="content">
    <section class = "login">
    <br>
    <br>
    <br>
    
    <h1>登入</h1>
    <div class = "form-login">
            <div class = "form-community">
            <a href = "#" class = "cm-btn fb"><i class="fa fa-facebook"></i></a>
            <a href = "#" class = "cm-btn google"><i class="fa fa-google"></i></a>
        </div><div class = "hr-sect">or</div>
    
                
                    <form  role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder = "信箱" required autofocus>
  
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <i class="fa fa-key" aria-hidden="true"></i>    
                                <input id="password" type="password" class="form-control" name="password" placeholder = "密碼" required>


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                               <br>
                                
                                <button type="submit" class="btn">
                                    Login
                                </button>
                                <br>
                                <br>
                                <br>
                            

                                
                                <h1><a href = "{{ route('password.request') }}">忘記密碼?</a></h1>
                                <br>
                                <h1>還沒有帳號?立刻<a href = "{{ route('register') }}">註冊</a></h1>

                                <br>
                                
                    </form>
                </div>


                 </section>
</div>
   
    </main>
@endsection
