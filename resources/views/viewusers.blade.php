
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>All users</h4></div>
                    <div class="panel-body">
                            <table class="table table-striped">
                                <tr>
                                    <th style="cursor:default">ID</th>
                                    <th style="cursor:default">Name</th>
                                    <th style="cursor:default">Email</th>
                                    <th style="cursor:default">Role</th>  
                                    <th style="cursor:default">Registrated at</th>
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