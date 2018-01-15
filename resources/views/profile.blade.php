
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Profile</h4></div>

                    <div class="panel-body">
                        <h4><b>{{$name}}</b></h4>
                        <br><b>{{$email}}</b>
                        <br>Role: 
                        @if ($role==1)
                        <b>User</b>
                        @else
                        <b>Administrator</b>
                        @endif
                        <br>Registered at: <b>{{$created}}</b>
                        <br><br>
                        <div id="form">
                        {{ Form::open(['url'=>'/profile/edit']) }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Name (*)', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                     @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif    
                    </div>
                    </div>
                        <br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Email (*)', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('email', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>
                    <br>
                    </div>
                    <div class="form-group{{ $errors->has('cpassword') ? ' has-error' : '' }}">
                    {!! Form::label('cpassword', 'Current password (*)', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::password('cpassword', ['class' => 'form-control']) !!}
                    @if ($errors->has('cpassword'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cpassword') }}</strong>
                        </span>
                    @endif  
                    </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('npassword') ? ' has-error' : '' }}">
                    {!! Form::label('npassword', 'New password', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::password('npassword', ['class' => 'form-control']) !!}
                    @if ($errors->has('npassword'))
                        <span class="help-block">
                            <strong>{{ $errors->first('npassword') }}</strong>
                        </span>
                    @endif  
                    </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('npassword2') ? ' has-error' : '' }}">
                    {!! Form::label('npassword2', 'New password again', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::password('npassword2', ['class' => 'form-control']) !!}
                    @if ($errors->has('npassword2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('npassword2') }}</strong>
                        </span>
                    @endif  
                    </div>
                    </div>
                    <div class="col-md-8 col-md-offset-4">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                    <br><br><br>
                        </div>
                        <script>
                        function update(){
                            document.getElementById('form').style.display='block';
                            document.getElementById('edit').style.display='none';
                        }
                        @if ($errors=='[]')
                        document.getElementById('form').style.display='none';
                        document.getElementById('edit').style.display='none';
                        @endif
                        document.getElementById("edit").addEventListener("click", update);
                        </script>                   
                        @if($errors=='[]')
                        <button class ='btn btn-primary' id="edit" type="button" onclick="update();">Update profile</button><br><br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
