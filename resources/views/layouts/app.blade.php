<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/app.css">

    <title>@yield('title')</title>
</head>
<body>

    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>


    <div id="footer" class="text-center">
        <p class="pFooter">Copyright 2021 &copy; TodoList</p>
    </div>
   


</body>
</html>