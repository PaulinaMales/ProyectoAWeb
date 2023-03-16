@extends('layouts.templateAuth')

@section('content')

    <div class="container py-5">
        <a class="btn btn-outline-danger" href="{{ route('admin.crudPresident.create') }}" role="button">Crear</a> 
        <hr>
 <!-- INICIO MODAL-->       

 @foreach ($presidentes as $presidente)
    <!-- Modal Editar Presidente -->
    <div class="modal fade" id="exampleModal2{{ $presidente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('president.update', $presidente->id) }}">
                    @csrf
                    @method('patch')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Editar presidente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>                  
                        <!-- Aquí van los campos del formulario para editar el presidente -->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $presidente->name }}">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $presidente->apellido }}">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="number" class="form-control" id="edad" name="edad" value="{{ $presidente->edad }}">
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $presidente->direccion }}">
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular:</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="{{ $presidente->celular }}">
                            </div>
                            <div class="form-group">
                                <label for="equipo_id">Equipo:</label>
                                <select class="form-control" id="equipo_id" name="equipo_id">

                                    @foreach(\App\Models\Equipo::pluck('nombre', 'id') as $equipoId => $equipoNombre)
                                        <option value="{{ $equipoId }}">{{ $presidente->nombre_equipo }}</option>
                                    @endforeach
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


            <!-- Modal Eliminar Presidente -->
            <div class="modal fade" id="exampleModal3{{ $presidente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('president.delete', $presidente->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Eliminar Presidente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Está seguro de que desea eliminar este Presidente?
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
        <h3 class="mb-4">Lista de presidentes</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>                      
                    <th>Email</th>
                    <th>Apellido</th> 
                    <th>Equipo</th>                    
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($presidentes as $presidente)
                    <tr>

                    <td>{{ $presidente->name }}</td>
                    <td>{{ $presidente->email }}</td>
                    <td>{{ $presidente->apellido }}</td>
                    <td>{{ $presidente->nombre_equipo }}</td>
                        <td>
                            <form method="POST" action="{{ route('president.delete', $presidente->id) }}">
                                @csrf
                                @method('PATCH')
                                <a class="btn btn-outline-warning" data-bs-toggle="modal" href="#exampleModal2{{ $presidente->id }}">Editar</a>
                                @csrf
                                @method('delete')
                                <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3{{$presidente->id}}">Eliminar</a>
                            </form> 
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
