
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Edit record</h4></div>
                        
                    <div class="panel-body">
                         <div id="form">
                            {{ Form::open(['url'=>'/edit']) }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', 'Name (*)', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::text('name', $record->name, ['class' => 'form-control']) !!}
                                </div>
                                 @if ($errors->has('name'))
                                 <br><br>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif    
                            </div>
                            <br><br>
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                {!! Form::label('type', 'Type (*)', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                {!!Form::radio('type', 'income', $income) !!}                                
                                Income<br>                                
                                {!! Form::radio('type', 'expense', !$income) !!}
                                Expense
                                 @if ($errors->has('type'))
                                 <br><br>
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
                                {!! Form::select('category', $categories, $record->category_id, ['class' => 'form-control']) !!}
                                 @if ($errors->has('category'))
                                 <br><br>
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
                                {!! Form::date('date', $record->date, ['class' => 'form-control']) !!}
                                 @if ($errors->has('date'))
                                 <br><br>
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
                                {!! Form::number('sum', $record->sum, ['class' => 'form-control', 'step' => '0.01']) !!}
                                 @if ($errors->has('sum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sum') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>
                            <br><br>
                            {{ Form::hidden('id', $record->id) }}
                            <div class="col-md-8 col-md-offset-4">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            </div>                            
                            {!! Form::close() !!}
                            <br><br>
                            {{ Form::open(['url'=>'/edit/delete']) }}
                                {{ Form::hidden('id2', $record->id) }}
                                <div class="col-md-8 col-md-offset-4">
                                    {!! Form::submit('Delete record', ['class' => 'btn btn-primary']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection