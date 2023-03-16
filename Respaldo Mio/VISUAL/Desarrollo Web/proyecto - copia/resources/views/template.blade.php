<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web / Introduccion</title>
</head>
<body>
    <p>
         <!-- AUTENTICACION 
        <a href="{{route('home')}}">HOME</a>
        <a href="{{route('blog')}}">BLOG</a>-->
  
        
       

        <!-- AUTENTICACION -->
        @auth
        <!-- Si correctamente:: DASHBOARD-->
        <a href="{{route('dashboard')}}">DASHBOARD</a>
        @else
        <!-- Si NO correctamente:: LOGIN -->
        <a href="{{route('login')}}">INICIAR SESION </a>

        @endauth
    </p>
    <hr>
    @yield('content')
</body>
</html>