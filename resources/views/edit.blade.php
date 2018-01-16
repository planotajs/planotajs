
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Edit</h4></div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Sum</th>
                            </tr>
                        @foreach ($records as $rec)
                        <tr>                            
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
@endsection