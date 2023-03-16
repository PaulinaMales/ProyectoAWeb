@extends('layouts.templateAuth')

@section('content')
      <!-- contenido del cuerpo --> 
     
      <div class="row row-cols-2 row-cols-md-3 g-4 center">
  <!--        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Añadir Usuario</h5>
              <img src="{{ asset('images/añadir_usuario.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-danger btn-sm">Jugador</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Mi Equipo</h5>
              <img src="{{ asset('images/equipos.jpg') }}" class="card-img-top" alt="..." style="width:75%;">
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-danger btn-sm">Gestionar</a>
            </div>
          </div>
        </div>
-->

          <div class="card" style="width: 25%;">

              <img src="{{ asset($equipo->imagen) }}"  class="card-img-top" alt=""/>
              <div class="card-body">
                  <h5 class="card-title">Mi Equipo</h5>
                  <p class="card-text">{{ $equipo->nombre }}</p>
              </div>
          </div>
     

            <div class="card" style="width: 25%;">
            <ul class="list-group list-group-light list-group-small">
              <br>
              <br>
              <br>
              <br>
              <a href="#"class="btn btn-outline-danger ">Sanciones</a>
              <br>
              <a href="#" class="btn btn-outline-danger ">Resultados</a>
              <br>
              <a href="{{ route('presidente.crudPlayer') }}" class="btn btn-outline-danger">Jugadores</a>
              <br>
            </ul>
          </div>  
          <div>
      </div>
      </div>
@endsection
