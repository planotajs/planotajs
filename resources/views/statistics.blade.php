
@extends('layouts.app')

@section('content')
<style>
    th {
        text-align: center;
    }
</style>
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Statistics</h4></div>
                    <div class="panel-body">
                        <div class="dateSelector">
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
                        <h3>Total income: {{$income}}  EUR</h3>
                        <h3>Total expenses: {{$expenses}} EUR</h3>
                        <h3><b>Balance: {{$sum}} EUR</b></h3>
                            <table class="table table-striped">
                                <tr>
                                    <th colspan="3">Income</th>
                                </tr>
                                @foreach ($records as $rec)
                                <tr>
                                    <td>{{$rec->category->name}}</td>
                                    <td>{{$sum}}</td>
                                    <td>{{$sum / $sum * 100}} %</td>
                                </tr>
                                @endforeach
                            </table>
                            <table class="table table-striped">
                                <tr>
                                    <th colspan="3">Expenses</th>
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