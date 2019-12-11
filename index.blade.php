<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <center>
            <h1>this is Index Page</h1> <hr/>
            <h2>Hello {{ $username }}</h2>
        </center>
    </body>
</html>
