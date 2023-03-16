
@extends('layouts.templateAuth')

@section('content')

<!-- contenido del cuerpo -->  
<div class="container py-5">
    <a class="btn btn-outline-danger" href="{{ route('admin.crudEquipo.create') }}" role="button">Crear</a> 
<hr>
@foreach ($equipos as $equipo)
    <!-- Modal Editar Equipo -->
    <div class="modal fade" id="exampleModal2{{ $equipo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('equipo.update', $equipo->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Editar equipo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>                  
                    <div class="modal-body">
                        <input type="text" name="nombre" class="form-control" value="{{ $equipo->nombre }}">
                        <input type="number" name="anios" class="form-control" value="{{ $equipo->anios }}">
                        <input type="date" name="fecha_fundacion" class="form-control" value="{{ $equipo->fecha_fundacion }}">
                        <label>Imagen actual</label>
                        <img src="{{ asset($equipo->imagen) }}" alt="{{ $equipo->nombre }}" width="100">
                        <label>Agregar nueva imagen</label>
                        <input type="file" name="imagen" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
            <!-- Modal Eliminar Equipo -->
            <div class="modal fade" id="exampleModal3{{ $equipo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('equipo.delete', $equipo->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Eliminar Equipo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Está seguro de que desea eliminar este Equipo?
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
    <h3 class="mb-4">Lista de equipos</h3>
        <table class="table">
                <thead>
                    <tr>
                        <th>Logo</th>                      
                        <th>Nombre</th>
                        <th>Años de existencia</th>
                        <th>Fecha de fundación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                    <td><img src="{{ asset($equipo->imagen) }}" alt="{{ $equipo->nombre }}" width="50"></td>
                        <td>{{ $equipo->nombre }}</td>
                        <td>{{ $equipo->anios }}</td>
                        <td>{{ $equipo->fecha_fundacion }}</td>
                            <td>
                            <form method="POST"  action="{{route('equipo.delete',[$equipo->id])}}" >
                            @csrf
                                @method('PATCH')
                                <a class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$equipo->id}}">Editar</a>
                               @csrf
                                @method('delete')
                                <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3{{$equipo->id}}">Eliminar</a>
                                </form> 
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection