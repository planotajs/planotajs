
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.editRecord')</h4></div>
                        
                    <div class="panel-body">
                         <div id="form">
                            {{ Form::open(['url'=>'/edit']) }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name',Lang::get('messages.formName'), ['class' => 'col-md-4 control-label']) !!}
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
                                {!! Form::label('type',Lang::get('messages.formType'), ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                {!!Form::radio('type',Lang::get('messages.formIncome'), $income) !!}                                
                                Income<br>                                
                                {!! Form::radio('type',Lang::get('messages.formExpense'), !$income) !!}
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
                                {!! Form::label('category',Lang::get('messages.formCategory'), ['class' => 'col-md-4 control-label']) !!}
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
                                {!! Form::label('date',Lang::get('messages.formDate'), ['class' => 'col-md-4 control-label']) !!}
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
                                {!! Form::label('sum',Lang::get('messages.formSum'), ['class' => 'col-md-4 control-label']) !!}
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
                            {!! Form::submit(Lang::get('messages.saveBtn'), ['class' => 'btn btn-primary']) !!}
                            </div>                            
                            {!! Form::close() !!}
                            <br><br>
                            {{ Form::open(['url'=>'/edit/delete']) }}
                                {{ Form::hidden('id2', $record->id) }}
                                <div class="col-md-8 col-md-offset-4">
                                    {!! Form::submit(Lang::get('messages.deleteBtn'), ['class' => 'btn btn-primary']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection