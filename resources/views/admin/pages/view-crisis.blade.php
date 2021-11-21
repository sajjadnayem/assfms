@extends('master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <style>
        table, th, td{
            border: 1px solid  black;
        }
    </style>
    <body>
        <h1>View Crisis</h1>
        <hr>
        <table class="table" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Crisis Name</th>
                    <th>Crisis Type</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($crisislist as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <th>{{$item->name}}</th>
                        <th>{{$item->type}}</th>
                        <th>{{$item->amount}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    </html>
@endsection