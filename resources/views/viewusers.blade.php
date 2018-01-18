
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.allUsers')</h4></div>
                    <div class="panel-body">
                            <table class="table table-striped">
                                <tr>
                                    <th style="cursor:default">@lang('messages.userId')</th>
                                    <th style="cursor:default">@lang('messages.userName')</th>
                                    <th style="cursor:default">@lang('messages.email')</th>
                                    <th style="cursor:default">@lang('messages.role')</th>  
                                    <th style="cursor:default">@lang('messages.registered')</th>
                                </tr>
                                    @foreach ($records as $rec)
                                        <tr>     
                                            <td>{{$rec->id}}</td>
                                            <td>{{$rec->name}}</td>
                                            <td>{{$rec->email}}</td>
                                            <td>@if($rec->role==2)Admin
                                                @else User
                                                @endif
                                            </td>
                                            <td>{{$rec->created_at}}</td>
                                        </tr>
                                    @endforeach

                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection