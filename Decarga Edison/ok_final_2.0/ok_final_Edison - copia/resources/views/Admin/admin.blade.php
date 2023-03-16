@extends('layouts.templateAuth')

@section('content')
      <!-- contenido del cuerpo -->  

      <div class="row row-cols-1 row-cols-md-3 g-4">
      <!--
        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Añadir Usuario</h5>
              <img src="{{ asset('images/añadir_usuario.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-danger btn-sm">Administrador</a>
              <a href="{{ route('admin.crudPresident') }}" class="btn btn-outline-danger btn-sm">Presidente</a>
            </div>
          </div>
        </div>
        -->
    
        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Cronograma</h5>
              <img src="{{ asset('images/cronograma.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="{{ route('admin.schedule') }}" class="btn btn-outline-danger btn-sm">Publicar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Campeonato</h5>
              <img src="{{ asset('images/campeonatos.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="{{ route('admin.gestion')}}" class="btn btn-outline-danger btn-sm">Gestionar</a>
            </div>
          </div>
        </div>
<!--
        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Jugadores</h5>
              <img src="{{ asset('images/jugadores.webp') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-danger btn-sm">Gestionar</a>
            </div>
          </div>
        </div>
-->
        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Nomina</h5>
              <img src="{{ asset('images/nomina.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-danger btn-sm">Gestionar</a>
            </div>
          </div>
        </div>
      </div>
@endsection
