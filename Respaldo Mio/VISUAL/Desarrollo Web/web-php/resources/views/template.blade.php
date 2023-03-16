<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>CRUD</title>

    <style>

        body{
            background-image: linear-gradient(190deg, #ffffb2 0, #ffffae 10%, #ffffaa 20%, #ffffa6 30%, #f0ffa2 40%, #d5f29d 50%, #bce198 60%, #a7d294 70%, #96c591 80%, #87ba8e 90%, #7bb08c 100%);
        }
    </style>
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
     
        <div class="flex space-x-2 justify-center" style="margin-top: 25%;">
          <div>
                <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                    <a style="font-size: 40px; margin-top:50px" href="{{route('login')}}" >START &#128161; </a>      
                </button>
   
            </div>
        </div>

        @endauth
    </p>
    <hr>
    @yield('content')
</body>
</html>


