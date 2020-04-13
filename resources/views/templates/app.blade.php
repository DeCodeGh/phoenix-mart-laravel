<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phoenix Mart</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body class="overflow-x-hidden">
       @include('templates.partials._global-navigation')
        <div id="app">
            @yield('content')
        </div>
        @include('templates.partials._footer')
    </body>
</html>
