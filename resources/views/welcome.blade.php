<!doctype html>
@extends('layouts.app')

@section('content')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Finanšu plānotājs</title>
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    @else
                    @endauth
                </div>
            @endif

            <div class="content">

                </div>
            </div>
        </div>
    </body>
    @endsection
</html>
