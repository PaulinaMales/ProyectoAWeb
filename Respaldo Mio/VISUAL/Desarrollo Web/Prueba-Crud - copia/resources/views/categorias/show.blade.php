@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATOS</div>
                <!--CONTENIDO DE LA PAGINA -->
                <label for="">ID -> {{$categoria->id}}</label>
                <label for="">CODIGO -> {{$categoria->codigo}}</label>
                <label for="">NOMBRE -> {{$categoria->nombre}}</label>
                <!-- FIN DE CONTENIDO -->

            </div>
        </div>
    </div>
</div>


@endsection

