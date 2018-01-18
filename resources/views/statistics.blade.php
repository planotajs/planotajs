
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
                            {{ Form::open(['url'=>'/statistics']) }}                                
                                {!! Form::label('startdate', 'Start date (*)',  ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::date('startdate', '', ['class' => 'form-control']) !!}
                                 @if ($errors->has('startdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('startdate') }}</strong>
                                    </span>
                                @endif
                                </div>
                                {!! Form::label('enddate', 'End date (*)', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::date('enddate', '', ['class' => 'form-control']) !!}
                                 @if ($errors->has('enddate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('enddate') }}</strong>
                                    </span>
                                @endif    
                                </div>
                                <br><br>
                                <div class="col-md-12">
                            {{ Form::submit('Select records', array('class' => 'btn')) }} 
                                </div>
                            {!! Form::close() !!}
                            
                        </div>
                        <br><br>
                        <div class="panel-body">          
                        <hr>
                        <h5>Total income: {{$income}}  EUR</h5>
                        <h5>Total expenses: {{$expenses}} EUR</h5>
                        <h5><b>Balance: {{$income+$expenses}} EUR</b></h5>
                        <hr>
                        <h4 style="text-align: center">Income statistics</h4>
                            <table class="table table-striped">
                                <tr>
                                    <th>Category</th>
                                    <th>Income</th>
                                    <th>% of total income</th>
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
                        <h4 style="text-align: center">Expenses statistics</h4>
                            <table class="table table-striped">
                                <tr>
                                    <th>Category</th>
                                    <th>Expenses</th>
                                    <th>% of total expenses</th>
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