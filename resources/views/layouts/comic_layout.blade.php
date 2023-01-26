
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comics</title>  
        @vite('resources/js/app.js')      
    </head>
    <body class="bg-dark">
        @include("partials.header");

        @yield("content")
    </body>
</html>