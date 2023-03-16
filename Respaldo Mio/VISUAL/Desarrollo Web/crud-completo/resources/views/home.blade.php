@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">GESTION DE PRODUCTOS</div>



                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  

                <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('productos.index') }}" type="button" class="btn btn-outline-info ">EMPEZAR</a>

                </div>
                   
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

