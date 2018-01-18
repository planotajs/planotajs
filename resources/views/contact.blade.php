
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.contact')</h4></div>
                    <div class="panel-body">
                        <h4>@lang('messages.contactH4')</h4>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ Form::open(['url'=>'/contact']) }}
                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                    {!! Form::label('message', Lang::get('messages.formMessage'), ['class' => 'control-label']) !!}
                                    
                                    {!! Form::textarea('message', '', ['class' => 'form-control']) !!}                                 
                                    
                                     @if ($errors->has('message'))
                                     <br><br>
                                        <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif                                      
                            </div>
                            <div class="col-md-8 col-md-offset-4">
                                {!! Form::submit(Lang::get('messages.sendBtn'), ['class' => 'btn btn-primary']) !!}
                            </div>  
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection