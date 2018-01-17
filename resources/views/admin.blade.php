
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Admin</h4></div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="/admin/viewall">View/edit all records</a></li>
                            <li><a href="/admin/viewusers">View all users</a></li>
                            <li><a href="/admin/addcat">Add a new category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection