
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>All records</h4></div>
                    <div class="panel-body">
                        <div style="cursor:pointer" >
                            <table class="table table-striped">
                                <tr>
                                    <th style="cursor:default">User</th>
                                    <th style="cursor:default">Name</th>
                                    <th style="cursor:default">Category</th>
                                    <th style="cursor:default">Date</th>
                                    <th style="cursor:default">Sum</th>
                                </tr>
                                    @foreach ($records as $rec)
                                        <tr onclick="window.location='/edit/{{$rec->id}}';">     
                                            <td>{{$rec->user_id}}</td>
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