



@extends('template')

@section('content')


<body >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




            <div class="container" style="margin-top: 5%;">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" style="text-align: center;">CRUD</div>
                            <br>
                            <!--CONTENIDO DE LA PAGINA -->
                            <div class="my-3" style="text-align:center;">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Agregar producto</a>
                        </div>

                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif


                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $key => $producto)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td><img width="100px;" src="{{ $producto->url }}"></td>
                                        <td>{{ $producto->descripcion }}</td>
                                        <td>

                                                <form method="POST" id="deleteProducto{{$key}}" action="{{route('producto.destroy',[$producto->id])}}">

                                                <a data-bs-toggle="modal" data-bs-target="#exampleModal2{{$key}}"
                                                class="btn btn-outline-warning">Editar</a>
                                                @csrf
                                                @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>

                                        </form>

                                        </td>
                                    </tr>


                                
                                

                                    {{-- MODAL EDITAR PRODUCTO --}}
                                    <div class="modal fade" id="exampleModal2{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel2"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST" action="{{ route('producto.update', $producto->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">Editar producto</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" name="nombre" class="form-control"
                                                            value="{{ $producto->nombre }}">
                                                        <textarea name="descripcion" rows="4" class="form-control  my-3" placeholder="Descripción sobre el producto...">{{ $producto->descripcion }}</textarea>
                                                        <label>Imagen actual</label>
                                                        <img width="100px;" src="{{ $producto->url }}">
                                                        <br/>
                                                        <label>Agregar nueva imagen</label>
                                                        <input type="file" name="imagen" class="form-control">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal" style="color: black;">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary" style="color: black;">Guardar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    {{-- MODAL AGREGAR PRODUCTO --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('producto.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Datos del producto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto">
                                        <textarea name="descripcion" rows="4" class="form-control  my-3" placeholder="Descripción sobre el producto..."></textarea>
                                        <input type="file" name="imagen" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color: black;">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" style="color: black;">Agregar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>





                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
                    </script>
                         


                        <!-- FIN DE CONTENIDO -->



                        </div>
                    </div>
                </div>
            </div>


            

                         <!-- FORMULARIO -->

                        
                        <!-- FIN DE CONTENIDO -->



                        </div>
                    </div>
                </div>
            </div>

                         <!-- FIN FORMULARIO-->



          


    </body>


@endsection



