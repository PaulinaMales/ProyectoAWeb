@extends('layouts.templateAuth')

@section('content')


<div class="container py-5">
        <a class="btn btn-outline-danger" href="{{ route('admin.formSancion.create') }}" role="button">Crear</a> 
        <hr>
 <!-- INICIO MODAL-->       

 @foreach ($sanciones as $sancion)
       
                <!-- INICIO MODALES: MODAL SANCIONES EDITAR-->
                <div class="modal fade" id="exampleModalLabel1{{ $sancion->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route( 'sancion.update',$sancion->id ) }}">
                                @csrf
                                @method('patch')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar sanción</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="descripcion">Motivo:</label>
                                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $sancion->descripcion }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tipo_sancion">Tarjeta:</label>
                                            <select class="form-control" id="tipo_sancion" name="tipo_sancion">
                                                <option value="Amarilla" {{ $sancion->tipo_sancion == 'Amarilla' ? 'selected' : '' }}>Amarilla</option>
                                                <option value="Roja" {{ $sancion->tipo_sancion == 'Roja' ? 'selected' : '' }}>Roja</option>
                                                <option value="Azul" {{ $sancion->tipo_sancion == 'Azul' ? 'selected' : '' }}>Azul</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="gravedad_sancion">Gravedad:</label>
                                            <select class="form-control" id="gravedad_sancion" name="gravedad_sancion">
                                                <option value="Leve" {{ $sancion->gravedad_sancion == 'Leve' ? 'selected' : '' }}>Leve</option>
                                                <option value="Grave" {{ $sancion->gravedad_sancion == 'Grave' ? 'selected' : '' }}>Grave</option>
                                                <option value="Muy Grave" {{ $sancion->gravedad_sancion == 'Muy Grave' ? 'selected' : '' }}>Muy grave</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="sancion_cumplida" class="form-label">¿La sanción ha sido cumplida?</label>
                                            <input class="form-check-input" type="checkbox" id="sancion_cumplida" name="sancion_cumplida" value="1" {{ $sancion->sancion_cumplida ? 'checked' : '' }} />
                                            <label class="form-check-label" for="inlineCheckbox2">Sí</label>
                                            <input class="form-check-input" type="checkbox" id="sancion_no_cumplida" name="sancion_cumplida" value="0" {{ !$sancion->sancion_cumplida ? 'checked' : '' }} />
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



            <!-- Modal Eliminar Presidente -->
            <div class="modal fade" id="exampleModal3{{ $sancion->id }}" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('sancion.delete', $sancion->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel3">Eliminar Sancion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Está seguro de que desea eliminar este Sancion?
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
        <h3 class="mb-4">Lista de Sanciones</h3>
        <table class="table">
            <thead>
                <tr>
                   <th>ID</th>                     
                    <th>N° De Camiseta</th>                      
                    <th>Posicion</th>
                    <th>Gravedad</th>                   
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($sanciones as $sancion)
                    <tr>

                    <td>{{ $sancion->id }}</td>
                    <td>{{ $sancion->num_camiseta }}</td>
                    <td>{{ $sancion->posicion }}</td>
                    <td>{{ $sancion->gravedad_sancion }}</td>
                        <td>
                            <form method="POST" action="{{ route('sancion.delete', $sancion->id) }}">
                                @csrf
                                @method('PATCH')
                                <a class="btn btn-outline-warning" data-bs-toggle="modal" href="#exampleModalLabel1{{ $sancion->id }}">Editar</a>
                                @csrf
                                @method('delete')
                                <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3{{$sancion->id}}">Eliminar</a>
                            </form> 
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
