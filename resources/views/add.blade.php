
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Add</h4></div>
                    <div class="panel-body">
                        <h4>Add a new financial record by stating its name, type, category, date and sum.</h4>
                        <br>
                        <div id="form">
                            {{ Form::open(['url'=>'/add']) }}
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
                            <br><br>
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                {!! Form::label('type', 'Type (*)', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                {!!Form::radio('type', 'income', ['class' => 'form-control']) !!}                                
                                Income<br>                                
                                {!! Form::radio('type', 'expense', ['class' => 'form-control']) !!}
                                Expense
                                 @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>
                            <br><br>
                             <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                {!! Form::label('category', 'Category (*)', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::select('category', $categories, 's', ['class' => 'form-control']) !!}
                                 @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>
                            <br><br>
                             <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                {!! Form::label('date', 'Date (*)', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::date('date', '', ['class' => 'form-control']) !!}
                                 @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group{{ $errors->has('sum') ? ' has-error' : '' }}">
                                {!! Form::label('sum', 'Sum (*)', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::number('sum', '', ['class' => 'form-control']) !!}
                                 @if ($errors->has('sum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sum') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-8 col-md-offset-4">
                            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection