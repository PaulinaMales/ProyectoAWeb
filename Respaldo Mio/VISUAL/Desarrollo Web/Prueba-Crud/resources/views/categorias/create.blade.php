@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATOS</div>
                <!--CONTENIDO DE LA PAGINA -->
                <form action="{{route('categorias.store')}}" method="post">
                @csrf
                        <div>
                            <label for="">Código</label>
                           
                            <input type="text" name="codigo" class="form-control">
                        </div>
                        <div>
                            <label for="">nombre</label>
                            <input type="text" name="nombre" class="form-control" >
                        </div>
                        <br>

                        <div style="text-align: center;">
                         <input type="submit" value="Enviar" class="btn btn-success" >
                        </div>
                    </form>
                    

                <!-- FIN DE CONTENIDO -->

            </div>
        </div>
    </div>
</div>


@endsection

