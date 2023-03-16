@extends('layouts.templateAuth')

@section('content')
      <!-- contenido del cuerpo -->  
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Añadir Usuario</h5>
              <img src="{{ asset('images/añadir_usuario.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="{{ route('presidente.formPlayer') }}" class="btn btn-outline-danger btn-sm">Jugador</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Partidos</h5>
              <img src="{{ asset('images/partidos.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-danger btn-sm">Publicar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Equipos</h5>
              <img src="{{ asset('images/equipos.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-danger btn-sm">Gestionar</a>
            </div>
          </div>
        </div>

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
