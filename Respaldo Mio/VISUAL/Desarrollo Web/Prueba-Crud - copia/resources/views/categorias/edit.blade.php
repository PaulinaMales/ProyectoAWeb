@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATOS</div>
                <!--CONTENIDO DE LA PAGINA -->
                <form action="{{route('categorias.update',$categoria->id)}}" method="post">
                @csrf
                @method('PUT')
                        <div>
                            <label for="">Código</label>
                            <input type="text" name="codigo" value="{{$categoria->codigo}}" class="form-control">
                        </div>
                        <div>
                            <label for="">nombre</label>
                            <input type="text" name="nombre" value="{{$categoria->nombre}}" class="form-control">
                        </div>
                        <br>

                        <div style="text-align: center;">
                         <input type="submit" value="Enviar" class="btn btn-success">
                        </div>
                    </form>
                    

                <!-- FIN DE CONTENIDO -->

            </div>
        </div>
    </div>
</div>


@endsection

