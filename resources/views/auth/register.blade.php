@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/register.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/register/main.css') }}">
@stop

@section('content')

<main>
<div class="overlay">
    <div class="content">       
             <section class = "register">
                <h1>註冊</h1>
                <div class = "form-register">
                    <form class="" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                                <i class = "fa fa-user" aria-hidden="true"></i>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder = "暱稱" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            

                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder = "信箱" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                                
                                <input id="password" type="password" class="form-control" name="password" placeholder = "密碼" required>
                                <i class = "fa fa-key" aria-hidden="true"></i>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                  <i class="fa fa-check" aria-hidden="true"></i>
                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder = "確認密碼" required>
                            
                                <button type="submit" class="btn-submit" >
                                    Register
                                </button>
                            
                        
                    </form>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection

    