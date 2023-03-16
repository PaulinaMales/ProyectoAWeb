<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Maritozzo | Inicio</title>
</head>
<body class="font-mono">
    <style>
        #menu-toggle:checked + #menu {
               display: block;
             }
    </style>
    <div class="antialiased">
        <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 bg-emerald-500">
            <div class="flex-1 flex items-center">
                <img src="{{asset('/storage/navbar-logo.svg')}}" class="w-64 h-auto">
            </div>

            <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full bg-emerald-500" id="menu">
                <nav>
                    <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('register')}}">Menú</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold" href="{{route('register')}}">Registrate</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-emerald-900 font-bold lg:mb-0 mb-2" href="{{route('login')}}">Inicia Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>

    <h1 class="text-6xl text-center pt-12 text-orange-600 font-bold">BIENVENIDO A MARITOZZO</h1>

    <!-- CARRUSEL -->
    <div class="carousel rounded-box rounded-t-lg w-auto mx-10 pt-8">
        <div id="item1" class="carousel-item w-full">
          <img src="{{asset('/storage/first.jpg')}}" class="w-full h-96 px-12 mx-60" />
        </div> 
        <div id="item2" class="carousel-item w-full">
          <img src="{{asset('/storage/second.jpg')}}" class="w-full h-96 px-12 mx-60" />
        </div> 
        <div id="item3" class="carousel-item w-full">
          <img src="{{asset('/storage/third.jpg')}}" class="w-full h-96 px-12 mx-60" />
        </div> 
        <div id="item4" class="carousel-item w-full">
          <img src="{{asset('/storage/fourth.jpg')}}" class="w-full h-96 px-12 mx-60" />
        </div>
    </div>

    <div class="flex justify-center w-full py-2 gap-2">
        <a href="#item1" class="btn btn-xs bg-accent border-accent">1</a> 
        <a href="#item2" class="btn btn-xs bg-accent border-accent">2</a> 
        <a href="#item3" class="btn btn-xs bg-accent border-accent">3</a> 
        <a href="#item4" class="btn btn-xs bg-accent border-accent">4</a>
    </div>


    <div class="flex justify-center pt-12">
        <div class="card w-96 bg-blue-100 shadow-xl flex mx-5">
            <figure><img src="{{asset('storage\favicon.svg')}}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title font-bold text-blue-600 text-3xl"> HORARIOS DE ATENCIÓN </h2>
                <p><span class="font-bold">Lunes a Viernes: </span>7:00a.m - 20:00p.m</p>
                <p><span class="font-bold">Sábados: </span>8:00a.m - 22:00p.m</p>
                <p><span class="font-bold">Domingos: </span>8:00a.m - 19:00p.m</p>
            </div>
        </div>

        <div class="card w-96 bg-emerald-100 shadow-xl flex mx-5">
            <figure><img src="{{asset('storage\promociones.png')}}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title font-bold text-emerald-600 text-3xl">PROMOCIONES</h2>
                <p>Todos los días contamos con ofertas y promociones en todos nuestros platillos.</p>
            </div>
        </div>

        <div class=" card w-96 bg-gray-200 shadow-xl flex mx-5">
            <figure><img src="{{asset('storage\buffet.png')}}" alt="Shoes" /></figure>
            <div class="card-body">
            <h2 class="card-title font-bold text-gray-400 text-3xl">
                SERVICIO DE BUFFET
                <div class="badge badge-secondary">Próximamente</div>
            </h2>
            <p>Reserva todos nuestros servicios para una festividad espectacular</p>
            <div class="card-actions justify-end">
                <div class="badge badge-outline">Eventos</div> 
                <div class="badge badge-outline">Reservas</div>
            </div>
            </div>
        </div>
    </div>


    <h1 class="text-6xl text-center pt-12 text-green-600 font-bold">HISTORIA</h1>

    <div class="flex justify-center text-lg font-semibold px-11 pt-10 rounded-lg pb-10">
        <span class="w-1/2 text-center bg-gray-200 p-8 rounded-box italic">Nuestra historia se remonta a 1994 donde Ambrogio Rossi buscaba reinventar la cocina italiana experimentando con la mezcla de ingredientes de aire, mar y tierra y para eso fundó Maritozzo. Restaurante que al día de hoy contínua con su legado brindando al cliente una sensación única por cada platillo.</span>
    </div>

</body>
</html>