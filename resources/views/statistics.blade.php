
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.statistics')</h4></div>
                    <div class="panel-body">
                        <div class="dateSelector">
                            <h4>@lang('messages.selectPeriod')</h4>
                        {!! Form::label('date', 'Start date', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::date('date', '', ['class' => 'form-control']) !!}
                                </div>
                        {!! Form::label('date', 'End date', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::date('date', '', ['class' => 'form-control']) !!}
                                </div>
                        </div>
                        <div class="panel-body">                            
                        {{ Form::submit('Select records', array('class' => 'btn')) }}          
                        <hr>
                        <h5>@lang('messages.income'): {{$income}}  EUR</h5>
                        <h5>@lang('messages.expenses'): {{$expenses}} EUR</h5>
                        <h5><b>@lang('messages.balance'): {{$sum}} EUR</b></h5>
                        <hr>
                        <h4 style="text-align: center">@lang('messages.incomeStats')</h4>
                            <table class="table table-striped">
                                <tr>
                                    <th>@lang('messages.recordCategory')</th>
                                    <th>@lang('messages.inc')</th>
                                    <th>@lang('messages.incomePercentage')</th>
                                </tr>
                                @foreach ($icategories as $rec)
                                <tr>
                                    <td>{{$rec}}</td>
                                    <td>{{$icsum[$rec]}}</td>
                                    <td>{{number_format($icsum[$rec] / $income * 100.00, 2)}} %</td>
                                </tr>
                                @endforeach
                            </table>
                        <hr>
                        <h4 style="text-align: center">@lang('messages.expensesStats')</h4>
                            <table class="table table-striped">
                                <tr>
                                    <th>@lang('messages.recordCategory')</th>
                                    <th>@lang('messages.exp')</th>
                                    <th>@lang('messages.expensesPercentage')</th>
                                </tr>
                                @foreach ($ecategories as $rec)
                                <tr>
                                    <td>{{$rec}}</td>
                                     <td>{{$ecsum[$rec]}}</td>
                                    <td>{{number_format($ecsum[$rec] / $expenses * 100.00, 2)}} %</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection