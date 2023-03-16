<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>M&M</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.scss'])

        <!-- Iconos de Bootstrap 5 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- ESTILOS DEMO SOCCER -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css2.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- SCRIPT BOOTSTRAP -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-qAmxPuhWbTjKzP52o91dpEpsrL3jDpPOrZJtgAzZ1hG/dx2xR88aPy/hb7L+G0yS5QVb5iwz+kBjI0lGZ4b3qg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap JS (con dependencias) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-1CkKjFCPi5v8PCV7QwBfPXz5RzQ5K9q9+OFovIa34xPNcDq4k+psV7AZoJw3aZZz3qFs1T9Vl/EKAkeNlR+e2Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-1UHg19UfLXj6iRFUaevwmW6+/Pamj91cG4Z1qKjC2BLnbzNQwHtYam0woY5YJFc5Sw5FLH0t0dMUztJ/NZgThg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-GdLsC9/u6v++UZvrpUJSRlfRlK8pHSwjbH6nFdzIgSpEutdz9e2vJupiqZ23nAr87gfgKuz8aJwz/G+g/NaxYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            

            .form-control-dark {
              border-color: var(--bs-gray);
            }
            .form-control-dark:focus {
              border-color: #fff;
              box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
            }

            .text-small {
              font-size: 85%;
            }

            .dropdown-toggle {
              outline: 0;
            }


  
        </style>  

</head>
<body>
<!-- CONTENID HEADER FOOTER -->
<header>
  <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
    <div class="container">
      <img src="{{ asset('images/logo-web.png') }}" height="70" alt="logo" loading="lazy" style="position:"/>
      <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon d-flex justify-content-start align-items-center">
          <i class="fas fa-bars"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <!-- Agrega el botón "Atrás" -->
          <li class="nav-item">
              <a href="#" onclick="window.history.go(-1);" class="nav-link">Atrás</a>
          </li>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
              @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endif

            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="container" >
    <div class="mx-auto" style="margin-top:100px">
    @yield('content')

      <!-- contenido del cuerpo -->    

    </div>
  </div>
      <!-- CONTENIDO FOOTER -->

      <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-linkedin"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">M&M</a>
    </div>
    <!-- Copyright -->
</footer>


<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>
