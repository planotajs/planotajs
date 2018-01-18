
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>@lang('messages.addCategory')</h4></div>
                    <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if (session('err'))
                        <div class="alert alert-danger">
                            {{ session('err') }}
                        </div>
                        @endif
                        {{ Form::open(['url'=>'/admin/addcat']) }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', Lang::get('messages.formCategoryName'), ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::text('name', '', ['class' => 'form-control']) !!}                                 
                                </div>
                                 @if ($errors->has('name'))
                                 <br><br>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif   
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
@endsection