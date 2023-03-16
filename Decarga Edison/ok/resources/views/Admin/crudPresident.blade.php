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
                <a class="btn btn-outline-danger" href="{{ route('admin.crudPresident.create') }}" role="button">Crear</a>   
                <a class="btn btn-outline-danger" href="#" role="button">Actualizar</a>  
                <a class="btn btn-outline-danger" href="#" role="button">Eliminar</a>  
                <a class="btn btn-outline-danger" href="#" role="button">Ver</a> 
                <p>AQUI PRETENDO QUE APAREZCA LA TABLA DE LOS QUE YA ESTAN REGISTRADOS! 
                  pero si pienso que es mala idea porque van a ver full segun los equipos creo :c 
                </p>            
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

