
@extends('layouts.templateAuth')

@section('content')




<!-- contenido del cuerpo -->  
<div class="container py-5">
    <a class="btn btn-outline-danger" href="{{ route ('admin.crudPartido.create') }}" role="button">Registrar</a> 
    <hr>
@foreach($partidos as $partido)
        <div class="modal fade" id="exampleModal2{{ $partido->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form method="POST" action="{{ route('partido.update', $partido->id) }}">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar partido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" value="{{ $partido->fecha }}">
                    </div>
                    <div class="form-group">
                    <label for="tipo_partido">Tipo de partido:</label>
                    <input type="text" class="form-control" id="tipo_partido" name="tipo_partido" value="{{ $partido->tipo_partido }}">
                    </div>
                    <div class="form-group">
                        <label for="equipo_id">Equipo local:</label>
                        <select class="form-control" id="equipo_id" name="equipo_local">
                            <!-- Iteramos sobre una lista de equipos disponibles para mostrar en el campo de selección -->
                            @foreach(\App\Models\Equipo::pluck('nombre', 'id') as $equipoId => $equipoNombre)
                                <!-- Verificamos si el equipo actual es el mismo que el del partido -->
                                @if ($equipoId == $partido->equipo_local)
                                    <!-- Si es así, establecemos el atributo selected para que aparezca seleccionado por defecto -->
                                    <option value="{{ $equipoId }}" selected>{{ $equipoNombre }}</option>
                                @else
                                    <!-- Si no, simplemente mostramos el equipo sin atributos adicionales -->
                                    <option value="{{ $equipoId }}">{{ $equipoNombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="equipo_local_goles">Goles del equipo local:</label>
                    <input type="number" class="form-control" id="equipo_local_goles" name="equipo_local_goles" value="{{ $partido->equipo_local_goles }}">
                    </div>
                    <div class="form-group">
                        <label for="equipo_id">Equipo visitante:</label>
                        <select class="form-control" id="equipo_id" name="equipo_visitante">
                            <!-- Iteramos sobre una lista de equipos disponibles para mostrar en el campo de selección -->
                            @foreach(\App\Models\Equipo::pluck('nombre', 'id') as $equipoId => $equipoNombre)
                                <!-- Verificamos si el equipo actual es el mismo que el del partido -->
                                @if ($equipoId == $partido->equipo_visitante)
                                    <!-- Si es así, establecemos el atributo selected para que aparezca seleccionado por defecto -->
                                    <option value="{{ $equipoId }}" selected>{{ $equipoNombre }}</option>
                                @else
                                    <!-- Si no, simplemente mostramos el equipo sin atributos adicionales -->
                                    <option value="{{ $equipoId }}">{{ $equipoNombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="equipo_visitante_goles">Goles del equipo visitante:</label>
                    <input type="number" class="form-control" id="equipo_visitante_goles" name="equipo_visitante_goles" value="{{ $partido->equipo_visitante_goles }}">
                    </div>
                    <div class="form-group">
                    <label for="">Estadio:</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $partido->ubicacion }}">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Guardar cambios</button>
                </div>
            </form>
            </div>
        </div>
        </div>
                <!-- Modal Eliminar Registro -->
                <div class="modal fade" id="exampleModal3{{ $partido->id }}" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('partido.delete', $partido->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Eliminar Registro</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Está seguro de que desea eliminar este Registro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>       
    @endforeach

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('delete'))
        <div class="alert alert-danger">
            {{ session('success') }}
        </div>
    @endif    
    <h3 class="mb-4">Lista de partidos</h3>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Tipo de partido</th>
      <th scope="col">Equipo local</th>
      <th scope="col">Goles</th>
      <th scope="col">Equipo visitante</th>
      <th scope="col">Goles</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($partidos as $partido)
    <tr>
      <th scope="row">{{ $partido->id }}</th>
      <td>{{ $partido->fecha }}</td>
      <td>{{ $partido->tipo_partido }}</td>
      <td>{{ $partido->nombre_equipo_local }}</td>
      <td><strong>{{ $partido->equipo_local_goles }}</strong></td>
      <td>{{ $partido->nombre_equipo_visitante }}</td>
      <td><strong>{{ $partido->equipo_visitante_goles }}</strong></td>
      <td>
        <form method="POST"  action="" >
        @csrf
            @method('PATCH')
            <a class="btn btn-outline-warning" data-bs-toggle="modal" href="#exampleModal2{{ $partido->id }}">Editar</a>
            @csrf
            @method('delete')
            <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3{{$partido->id}}">Eliminar</a>
            </form> 
        </td>      
    </tr>
    @endforeach
  </tbody>
</table>

</div>


@endsection