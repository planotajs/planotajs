    <style>
        body {
            background: url(img/background.jpg) no-repeat center center fixed!important; 
            -webkit-background-size: cover!important;
            -moz-background-size: cover!important;
            -o-background-size: cover!important;
            background-size: cover!important;
        }
        .jumbotron {
            margin-top: 150px;
            text-align: center;
            background-color: rgba(255,255,255,0.9)!important;  
            color: black!important;
        }
        .jumbotron li {
            font-size: 17px;
        }
    </style>
@extends('layouts.app')
@section('content')
    <body>
    <div class="jumbotron">  
        <h1>@lang('messages.welcomeH1')</h1>
        <h3>@lang('messages.welcomeH3')</h3>
        <div class="list">
            <ul>
                <li>@lang('messages.welcomeList1')</li>
                <li>@lang('messages.welcomeList2')</li>
                <li>@lang('messages.welcomeList3')</li>
                <li>@lang('messages.welcomeList4')</li>            
            </ul>
        </div>
    </div>
    </body>
    @endsection
</html>
