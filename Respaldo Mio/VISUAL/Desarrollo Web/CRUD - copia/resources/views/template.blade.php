<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>EXAMEN</title>
  <!-- Bootstrap Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

        body{
            background-image: linear-gradient(190deg, #ffffb2 0, #ffffae 10%, #ffffaa 20%, #ffffa6 30%, #f0ffa2 40%, #d5f29d 50%, #bce198 60%, #a7d294 70%, #96c591 80%, #87ba8e 90%, #7bb08c 100%);
        }

        .navbar{
            display: inline-flex;
            padding: 10px;
            margin: 10px;
            text-align: right;
            
        }

        .item{
            color:black;
            padding: 10px;
            
        }
    </style>
</head>
<body>

  <!-- Navbar -->
  <div > 
        <ul class="navbar"  >
          <li >
            <a class="item" href="{{route('producto.index')}}">CRUD</a>
          </li>
          <li>
          <a class="item" href="{{route('contactForm')}}">FORMULARIO</a>
           
          </li>
        </ul>
      </div>
  <!-- Navbar -->


    <hr>
    @yield('content')
</body>
</html>


