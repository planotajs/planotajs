@extends('layouts.app')

@section('content')
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
@endsection

