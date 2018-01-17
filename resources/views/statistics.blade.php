
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Statistics</h4></div>
                    <div class="panel-body">
                        <h3>Total income: {{$income}}  EUR</h3>
                        <h3>Total expenses: {{$expenses}} EUR</h3>
                        <hr>
                        <h3>Balance: {{$sum}} EUR</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection