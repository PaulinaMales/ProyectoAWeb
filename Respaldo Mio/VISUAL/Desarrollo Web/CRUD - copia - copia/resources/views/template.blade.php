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

        /*body{
            background-image: linear-gradient(190deg, #ffffb2 0, #ffffae 10%, #ffffaa 20%, #ffffa6 30%, #f0ffa2 40%, #d5f29d 50%, #bce198 60%, #a7d294 70%, #96c591 80%, #87ba8e 90%, #7bb08c 100%);
        }*/

        body{
          background-image: url(https://th.bing.com/th/id/OIP.Ln2pXOBqSHIgAhTeEMqmrAHaEK?pid=ImgDet&rs=1);
        }

        /*.navbar{
            display: inline-flex;
            padding: 10px;
            margin: 10px;
            text-align: right;
            
        }*/

        .item{
            color:black;
            padding: 10px;
            
        }

        .button-send{
          background-color: #4CAF50;
            border: none;
            color: white;
            padding: 12px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 35%;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button-s {
          background-color: white;
          color: black;
          border: 1px solid #555555;
          border-radius: 10px;
      }

      .button-s:hover {
        background-color: #555555;
        color: white;
      }



        .button {
          display: inline-block;
          padding: 10px 15px;
         font-size: 14px;
          cursor: pointer;
          text-align: center;	
          text-decoration: none;
          outline: none;
          color: #fff;
          background-color: black;
          border: none;
          border-radius: 15px;
          box-shadow: 0 9px #999;
        }

        .button:hover {background-color: lightseagreen}

        .button:active {
          background-color: lightblue;
          box-shadow: 0 5px #666;
          transform: translateY(4px);
        }
    </style>
</head>
<body>

  <!-- Navbar 
  <div style="background-color: #ffffb2;"> 
        <ul class="navbar"  >
          <li >
            <a class="item" href="{{route('producto.index')}}">CRUD</a>
          </li>
          <li>
          <a class="item" href="{{route('contactForm')}}">FORMULARIO</a>
           
          </li>
        </ul>
      </div>
     Navbar -->


  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="{{route('producto.index')}}">CRUD</a>
    <a class="navbar-brand"  href="{{route('contactForm')}}">FORMULARIO</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link active" aria-current="page" href="#!">
            <div>
              <i class="fas fa-home fa-lg mb-1"></i>
            </div>
            Home
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="far fa-envelope fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-danger">11</span>
            </div>
            Link
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link disabled" aria-disabled="true" href="#!">
            <div>
              <i class="far fa-envelope fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-warning">11</span>
            </div>
            Disabled
          </a>
        </li>
        <li class="nav-item dropdown text-center mx-2 mx-lg-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            <div>
              <i class="far fa-envelope fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-primary">11</span>
            </div>
            Dropdown
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Left links -->

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="fas fa-bell fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-info">11</span>
            </div>
            Messages
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="fas fa-globe-americas fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-success">11</span>
            </div>
            News
          </a>
        </li>
      </ul>
      <!-- Right links -->

      <!-- Search form -->
      <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
        <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
        <button class="btn btn-primary" type="button" data-mdb-ripple-color="dark">
          Search
        </button>
      </form>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->





    @yield('content')
<hr>


<footer>
  <div style="padding: 10px; background-color:black">
    cerado por 
  </div>
</footer>
    

</body>



</html>


