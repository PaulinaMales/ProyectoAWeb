@extends('layouts.templateAuth')

@section('content')

      <!-- contenido del cuerpo -->  

  <div class="container py-5 h-100">
    <a class="btn btn-outline-danger" href="{{ route('presidente.crudPlayer.create') }}" role="button">Crear</a>   
    <hr>
 <!-- INICIO MODAL-->       

 @foreach ($jugadores as $jugador)
    <!-- Modal Editar Jugador -->
    <div class="modal fade" id="exampleModal2{{ $jugador->id }}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('player.update', $jugador->id) }}">
                    @csrf                    
                    @method('patch')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Editar Jugador</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>                  
                        <!-- Aquí van los campos del formulario para editar el presidente -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $jugador->name }}">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $jugador->apellido }}">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="number" class="form-control" id="edad" name="edad" value="{{ $jugador->edad }}">
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $jugador->direccion }}">
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular:</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="{{ $jugador->celular }}">
                            </div>
                         <!-- Type input -->
                         <div class="form-group">
                            <label for="inputState">Posición:</label>
                            <br>
                            <select name="posiciones" id="inputState" class="form-control">
                                <option value="portero" @if ($jugador->posicion == 'portero') selected @endif>Portero</option>
                                <option value="lateral" @if ($jugador->posicion == 'lateral') selected @endif>Lateral</option>
                                <option value="defensa central" @if ($jugador->posicion == 'defensa central') selected @endif>Defensa central</option>
                                <option value="delantero lateral" @if ($jugador->posicion == 'delantero lateral') selected @endif>Delantero lateral</option>
                                <option value="centro delantero" @if ($jugador->posicion == 'centro delantero') selected @endif>Centrodelantero</option>
                                <option value="centrocampista defensivo" @if ($jugador->posicion == 'centrocampista defensivo') selected @endif>Centrocampista defensivo</option>
                                <option value="centrocampista ofensivo" @if ($jugador->posicion == 'centrocampista ofensivo') selected @endif>Centrocampista ofensivo</option>
                            </select>
                        </div>
                        </div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

            <!-- Modal Eliminar Jugador -->
        <div class="modal fade" id="exampleModal3{{ $jugador->id }}" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('player.delete', $jugador->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Eliminar Jugador</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Está seguro de que desea eliminar este jugador?
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
                            {{ session('delete') }}
                        </div>
                    @endif   

                <div class="mt-4 pt-2">
                      <h3 class="mb-4">Lista de Jugadores</h3>
                      <table class="table mt-4">
                          <thead>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Apellido</th>
                                  <th>Posición</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($jugadores as $jugador)
                              <tr>
                                  <td>{{ $jugador->name }}</td>
                                  <td>{{ $jugador->email }}</td>
                                  <td>{{ $jugador->posicion }}</td>
                                  <td>
                                  <form method="POST" action="{{ route('player.delete', $jugador->id) }}">
                                      @csrf
                                      @method('PATCH')
                                      <a class="btn btn-outline-warning" data-bs-toggle="modal" href="#exampleModal2{{$jugador->id}}">Editar</a>
                                      @csrf
                                      @method('delete')
                                      <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3{{$jugador->id}}">Eliminar</a>
                                  </form> 
                        </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>


    </div>
  </div>

@endsection

