
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.add')</h4></div>
                    <div class="panel-body">
                        <h4>@lang('messages.addH4')</h4>
                        <br>
                        <div id="form">
                            {{ Form::open(['url'=>'/add']) }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', Lang::get('messages.formName'), ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::text('name', '', ['class' => 'form-control']) !!}                                 
                                </div>
                                 @if ($errors->has('name'))
                                 <div class="col-md-12">
                                     <div class="col-md-offset-5">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                     </div>
                                 </div>
                                @endif   
                            </div>
                            <br><br>
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                {!! Form::label('type', Lang::get('messages.formType'), ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                {!!Form::radio('type', 'income', ['class' => 'form-control']) !!}                                
                                {{Lang::get('messages.formIncome')}}<br>                                
                                {!! Form::radio('type', 'expense', ['class' => 'form-control']) !!}
                                {{Lang::get('messages.formExpense')}}
                                 @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>
                            <br><br><br>
                             <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                {!! Form::label('category', Lang::get('messages.formCategory'), ['class' => 'col-md-4 control-label']) !!}
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
                                {!! Form::label('date', Lang::get('messages.formDate'), ['class' => 'col-md-4 control-label']) !!}
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
                                {!! Form::label('sum',Lang::get('messages.formSum'), ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::number('sum', '', ['class' => 'form-control', 'step' => '0.01']) !!}
                                 @if ($errors->has('sum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sum') }}</strong>
                                    </span>
                                @endif    
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-8 col-md-offset-4">
                            {!! Form::submit(Lang::get('messages.addBtn'), ['class' => 'btn btn-primary']) !!}
                            </div>                            
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection