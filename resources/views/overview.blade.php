
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.overview')</h4></div>                   
                    <div class="panel-body">
                        <h4>@lang('messages.allRecords')</h4>
                        <br>
                         <table class="table table-striped">
                            <tr>
                                <th>@lang('messages.recordName')</th>
                                <th>@lang('messages.recordCategory')</th>
                                <th>@lang('messages.recordDate')</th>
                                <th>@lang('messages.recordSum')</th>
                            </tr>
                        @foreach ($records as $rec)
                        <tr>                            
                            <td>{{$rec->name}}</td>
                            <td>{{$rec->category->name}}</td>
                            <td>{{$rec->date}}</td>
                            <td>{{$rec->sum}}</td>
                        </tr>
                        @endforeach                        
                        <tr>
                            <th colspan='4'>@lang('messages.balance'): {{$sum}} EUR</th>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection