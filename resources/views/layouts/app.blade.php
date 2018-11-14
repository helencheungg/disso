<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name"="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <title>{{config('app.name', 'UNTITL3.')}}</title>
    </head>
    <body>
        @include('inc/header')
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    @include('inc/nav')
                </div>
                <div class="col">
                    <h2>{{$title}}</h2>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
