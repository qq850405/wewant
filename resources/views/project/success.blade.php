@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/donate.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/success/main.css') }}">
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" />
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!-- Include Editor style. -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_style.min.css' rel='stylesheet' type='text/css' />
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/js/froala_editor.min.js'></script>
@stop
@section('content')

       <main>
                        <div class = "content">
                <div class = "success">
                    <h1><i class="fa fa-check" aria-hidden="true"></i> 提案送出!請耐心等待審核。</h1>
                    <p>如果您對提案還有任何的疑惑，請私信我們的ＦＢ粉絲團。</p>
                </div>
                
            </div>
        </main>
        
    



@stop
