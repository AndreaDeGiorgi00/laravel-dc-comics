<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('include.header')

    <div class="jumbotron-box">
        <img  src="{{asset("images/jumbotron.jpg")}}">
    </div>

    @yield('content')
    

    @include('include.footer')
</body>
</html>
