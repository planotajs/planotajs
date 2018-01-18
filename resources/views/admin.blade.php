
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.admin')</h4></div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="/admin/viewall">@lang('messages.adminEdit')</a></li>
                            <li><a href="/admin/viewusers">@lang('messages.adminView')</a></li>
                            <li><a href="/admin/addcat">@lang('messages.adminAdd')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection