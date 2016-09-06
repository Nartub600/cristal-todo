<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cristal TO-DO</title>

        <link href="{{ asset('bower_resources/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_resources/bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/todo.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('bower_resources/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_resources/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_resources/jquery-form/jquery.form.js') }}"></script>
        <script src="{{ asset('bower_resources/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
        <script src="{{ asset('js/todo.js') }}"></script>
    </body>
</html>
