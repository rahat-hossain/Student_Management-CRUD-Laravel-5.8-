<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title' , 'Student Management')
        </title>

        <link rel = "stylesheet" type = "text/css" href = "{{ asset('bootstrap/css/bootstrap.min.css') }}" />
        <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/style.css') }}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><h3>Student Management System</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('create') }}">Create</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                    
                </div>
            </div> 
        </nav>

        
        <div class="container">
            @yield('content')
        </div>
        
        <script type="text/javascript" src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    </body>
</html>
