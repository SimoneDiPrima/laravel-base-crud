<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h4 class="text-warning text-center">COMICS LIST</h4>
        <div class="card mt-5">
            @yield('main-content')
        </div>
    </div>
   
</body>
</html>