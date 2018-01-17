<!doctype html>
@extends('layouts.app')

@section('content')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FinancialPlanner</title>
    </head>
    <style>
        body {
            background: url(img/background.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover
        }
        .jumbotron {
            margin-top: 150px;
            text-align: center;
            color: black;
            background: rgba(255, 255, 255, 0.9);
        }
        li {
            font-size: 17px;
        }
    </style>
    <body>
    <div class="jumbotron">  
        <h1>Financial Planner</h1>
        <h3>Financial Planner is a simple tool created for you to keep your personal finance management much easier.</h3>
        <div class="list">
        <ul>
            <li>Make decisions based on given information and improve your finances</li>
            <li>See your detailed information about your finances</li>
            <li>Update, edit and delete your financial records</li>
            <li>Add your daily incomes and expenses</li>            
        </ul>
    </div>
    </body>
    @endsection
</html>
