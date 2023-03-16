
@extends('layouts.templateAuth')

@section('content')

<!-- contenido del cuerpo -->    
      <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">

<!-- FIN MODALES: MODAL GOLES -->    
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

      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Sanciones</h3>

            <form action="{{ route('admin.formSancion.create') }}" method="GET">
                    <div class="form-group row">
                        <label for="equipo_id" class="col-sm-2 col-form-label">Selecciona un equipo:</label>
                        <div class="col-sm-10">
                            <select name="equipo_id" id="equipo_id" class="form-control">
                                <option value="">Selecciona un equipo</option>
                                @foreach($equipos as $equipo)
                                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-danger">Buscar</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row">
                    <div class="col-12">
                    <h4>{{ $nombre_equipo }}</h4>
                    </div>
                </div>
                <hr>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">N° Camiseta</th>
                        <th scope="col">Posición</th>
                        <th scope="col">Sanciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($jugadores)
                            @foreach ($jugadores as $jugador)
                                <tr>
                                    <td>{{ $jugador->id }}</td>
                                    <td style="text-align:center">{{ $jugador->num_camiseta }}</td>
                                    <td>{{ $jugador->posicion }}</td>
                                    <td>
                                        <form action="" method="POST" style="display:inline">
                                        @csrf
                                        <button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" href="#exampleModalLabel1{{ $jugador->id }}">Agregar</button> 
                                        </form>
                                    </td>
                                </tr>  
                                <!-- INICIO MODALES: MODAL SANCIONES CREAR-->
                                 <div class="modal fade" id="exampleModalLabel1{{ $jugador->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route( 'sancion.create' ) }}">
                                            <input type="hidden" id="jugador_id" name="jugador_id" value="{{$jugador->id}}">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar sanción</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="descripcion">Motivo:</label>
                                                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tipo_sancion">Tarjeta:</label>
                                                        <select class="form-control" id="tipo_sancion" name="tipo_sancion">
                                                            <option value="Amarilla">Amarilla</option>
                                                            <option value="Roja">Roja</option>
                                                            <option value="Azul">Azul</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="gravedad_sancion">Gravedad:</label>
                                                        <select class="form-control" id="gravedad_sancion" name="gravedad_sancion">
                                                            <option value="Leve">Leve</option>
                                                            <option value="Grave">Grave</option>
                                                            <option value="Muy Grave">Muy grave</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="sancion_cumplida" class="form-label">¿La sanción ha sido cumplida?</label>
                                                        <input class="form-check-input" type="checkbox" id="sancion_cumplida" name="sancion_cumplida" value="1" />
                                                        <label class="form-check-label" for="inlineCheckbox2">Sí</label>
                                                        <input class="form-check-input" type="checkbox" id="sancion_no_cumplida" name="sancion_cumplida" value="0" />
                                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                                    </div>
                                                    </div>                     
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Guardar</button>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>   
                                                        </div>
                                                    </form>              
                                            </div>
                                        </div>
                                    </div>                             
                            @endforeach
                        @endif 
                    </tbody>
                  </table>           
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
