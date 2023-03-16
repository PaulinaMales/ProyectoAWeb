@extends('layouts.templateAuth')

@section('content')

      <!-- contenido del cuerpo -->  

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">PRESIDENTE DE EQUIPO</h3>
            <form method="POST">
            @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Nombre</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Apellido</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Edad</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Equipo</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="" class="form-control form-control-lg" />
                    <label class="form-label" for="">Dirección</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Celular</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                  <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required placeholder="Enter password" />
                    <label class="form-label" for="phoneNumber"> Contraseña</label>
                  </div>

                </div>
              </div>
          <!-- Type input 
                <div class="form-group mb-3">
                          <label for="inputState">Tipo de usuario:</label>
                          <br>
                          <select  name="user-type" id="inputState" class="form-control">
                          <option value="admin">Administrador</option>
                          <option value="president">Presidente</option>
                          <option value="player">Jugador</option>
                          </select>
                  </div>-->

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

