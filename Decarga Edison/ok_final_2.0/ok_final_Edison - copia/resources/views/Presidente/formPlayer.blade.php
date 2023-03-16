@extends('layouts.templateAuth')

@section('content')

      <!-- contenido del cuerpo -->  

      <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">JUGADOR</h3>
            <form method="POST" action="{{ route('player.create') }}">
            @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif            
              <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="firstName" class="form-control form-control-lg" name="name"/>
                      <label class="form-label text-black" for="firstName">Nombre</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="lastName" class="form-control form-control-lg" name="apellido"/>
                      <label class="form-label text-black" for="firstName">Apellido</label>
                    </div>
                  </div>                
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="age" id="" class="form-control form-control-lg" name="edad"/>
                    <label class="form-label text-black" for="">Edad</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
              <!-- Aqui quiero desplegar los equipos que ya se registren como te dije :p -->
                  <div class="form-outline">
                      <input type="text" id="lastName" class="form-control form-control-lg" value="{{ $equipo->nombre }}" disabled />
                      <input type="hidden" name="equipo_team" value="{{ $equipo->id }}">
                      <label class="form-label text-black" for="lastName">Equipo</label>
                  </div>
                  </div>
              </div>               
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="" class="form-control form-control-lg" name="direccion"/>
                    <label class="form-label text-black" for="">Dirección</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="celular"/>
                    <label class="form-label text-black" for="phoneNumber">Celular</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" name="email"/>
                    <label class="form-label text-black" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="phoneNumber" class="form-control form-control-lg" name="password"/>
                    <label class="form-label text-black" for="phoneNumber"> Contraseña</label>
                  </div>

                </div>
              </div>
          <!-- Type input -->
          <div class="form-group mb-3">
                          <label for="inputState">Posición:</label>
                          <br>
                          <select name="posiciones" id="inputState" class="form-control">
                            <option value="portero">Portero</option>
                            <option value="lateral">Lateral</option>
                            <option value="defensa central">Defensa central</option>
                            <option value="delantero lateral">Delantero lateral</option>
                            <option value="centro delantero">Centrodelantero</option>
                            <option value="centrocampista defensivo">Centrocampista defensivo</option>
                            <option value="centrocampista ofensivo">Centrocampista ofensivo</option>                                       
                          </select>
                  </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-danger btn-lg" type="submit" value="Añadir" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection