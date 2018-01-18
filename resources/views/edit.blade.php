
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.edit')</h4></div>
                    <div class="panel-body">
                        <h4>@lang('messages.editH4')</h4><br>
                        <div style="cursor:pointer" >
                            <table class="table table-striped">
                                <tr>
                                    <th style="cursor:default">@lang('messages.recordName')</th>
                                    <th style="cursor:default">@lang('messages.recordCategory')</th>
                                    <th style="cursor:default">@lang('messages.recordDate')</th>
                                    <th style="cursor:default">@lang('messages.recordSum')</th>
                                </tr>
                                    @foreach ($records as $rec)
                                        <tr onclick="window.location='/edit/{{$rec->id}}';">                            
                                            <td>{{$rec->name}}</td>
                                            <td>{{$rec->category->name}}</td>
                                            <td>{{$rec->date}}</td>
                                            <td>{{$rec->sum}}</td>
                                        </tr>
                                    @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection