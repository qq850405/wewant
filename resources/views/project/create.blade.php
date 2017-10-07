@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/proposal_step1.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/proposal/create/main.css') }}">
@stop
@section('content')

        <header></header>
        
        <main>
            <div class = "content">
                <h1 class = "title">創建一個新計畫!</h1>

                {{Form::open(['action'=>'ProjectController@create','method' => 'post'])}}
                <!--<form method = "POST" action = "{{action('ProjectController@create')}}">-->
                    <div class = "row">
                        <div class = "form-group eight columns">
                        
                            <input type = "text" name = "projectName">
                            <label for = "project-name" id = "label">輸入計畫名稱</label>
                            
                        </div>
                        <select class = "four columns" autocomplete="off" name="type">
                            <option selected disabled hidden>專案類別</option>
                            <option value="ball">球類運動</option>
                            <option value="MartialArts">技擊運動</option>
                            <option value="TrackAndField">田徑運動</option>
                            <option value="Fitness">健體運動</option>
                            <option value="bicycle" >單車類</option>
                            <option value="others">其他</option>
                        </select>
                    </div>

                    
                    {{Form::submit('已閱讀說明，且同意創建計畫')}}
                <!--</form>-->
                {{ Form::close() }}
            </div>
        </main>

        <footer></footer>

@stop


