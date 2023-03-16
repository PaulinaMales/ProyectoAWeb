@extends('layouts.templateAuth')

@section('content')

      <!-- contenido del cuerpo -->  

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Resultados del Partido</h3>
            <form method="POST" action="{{ route('partido.create') }}">
                    @csrf
                    @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif   
                            
                        <div class="row">
                            
                            <p><strong>EQUIPOS</strong></p>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="date" id="fecha" name="fecha" class="form-control form-control-lg" />
                                    <label class="form-label" for="fecha">Fecha del partido</label>
                                </div>
                            </div>
                        </div>       
                    <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                    <label for="equipo_local">Equipo local</label>
                                        <select name="equipo_local" id="equipo_local" class="form-control">
                                            @foreach($equipos as $equipo)
                                                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                    <label for="equipo_visitante">Equipo visitante</label>
                                        <select name="equipo_visitante" id="equipo_visitante" class="form-control">
                                            @foreach($equipos as $equipo)
                                                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                    </div>

                    <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                    <label for="inputState">Tipo de partido</label>
                                        <br>
                                        <select name="tipo_partido" id="inputState" class="form-control">
                                            <option value="Empatado">Empatado</option>
                                            <option value="Ganado">Ganado</option>                                     
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="" for="location">Estadio</label>
                                        <input type="text" id="" class="form-control" name="ubicacion" required />
                                   </div>
                                </div>
                    </div>

                    <div class="row">
                    <p><strong>RESULTADOS</strong></p>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                    <label for="equipo_local_goles">Equipo local</label>
                                        <input type="number" name="equipo_local_goles" id="equipo_local_goles" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                    <label for="equipo_visitante_goles">Equipo visitante</label>
                                        <input type="number" name="equipo_visitante_goles" id="equipo_visitante_goles" class="form-control">
                                    </div>
                                </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Guardar</button>
                </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

