
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Statistics</h4></div>
                    <div class="panel-body">
                        <div class="dateSelector">
                            <h4>Select time period</h4>
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
                        <h5>Total income: {{$income}}  EUR</h5>
                        <h5>Total expenses: {{$expenses}} EUR</h5>
                        <h5><b>Balance: {{$sum}} EUR</b></h5>
                        <hr>
                        <h4 style="text-align: center">Income statistics</h4>
                            <table class="table table-striped">
                                <tr>
                                    <th>Category</th>
                                    <th>Income</th>
                                    <th>% of total income</th>
                                </tr>
                                @foreach ($records as $rec)
                                <tr>
                                    <td>{{$rec->category->name}}</td>
                                    <td>{{$sum}}</td>
                                    <td>{{$sum / $sum * 100}} %</td>
                                </tr>
                                @endforeach
                            </table>
                        <hr>
                        <h4 style="text-align: center">Expenses statistics</h4>
                            <table class="table table-striped">
                                <tr>
                                    <th>Category</th>
                                    <th>Expenses</th>
                                    <th>% of total expenses</th>
                                </tr>
                                @foreach ($records as $rec)
                                <tr>
                                    <td>{{$rec->category->name}}</td>
                                    <td>{{$sum}}</td>
                                    <td>{{$sum / $sum * 100}} %</td>
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