<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trello</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
        
    </head>
    <body class="antialiased">
        <div id="app"><mainapp/></div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
