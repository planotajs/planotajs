<!doctype html>
    <style>
        body {
            background: url(img/background.jpg) no-repeat center center fixed!important; 
            -webkit-background-size: cover!important;
            -moz-background-size: cover!important;
            -o-background-size: cover!important;
            background-size: cover!important;
        }
        .jumbotron {
            margin-top: 150px;
            text-align: center;
            background-color: rgba(255,255,255,0.9)!important;  
            color: black!important;
        }
        .jumbotron li {
            font-size: 17px;
        }
    </style>
@extends('layouts.app')

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FinancialPlanner</title>
    </head>
    @section('content')
    <body>
    <div class="jumbotron">  
        <h1>Financial Planner</h1>
        <h3>Financial Planner is a simple tool created for you to keep your personal finance management much easier.</h3>
        <div class="list">
        <ul>
            <li>Make decisions based on given information and improve your finances</li>
            <li>Update, edit and delete your financial records</li>
            <li>See detailed information about your finances</li>
            <li>Add your daily incomes and expenses</li>            
        </ul>
    </div>
    </body>
    @endsection
</html>
