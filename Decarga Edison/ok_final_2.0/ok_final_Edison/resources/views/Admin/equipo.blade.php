@extends('layouts.templateAuth')

@section('content')

      <!-- contenido del cuerpo -->  
      <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">EQUIPO</h3>
                    <form method="POST" action="{{ route('equipo.create') }}" enctype="multipart/form-data">
                        @csrf
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" />
                                    <label class="form-label" for="nombre">Nombre del Equipo</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="anios" name="anios" class="form-control form-control-lg" />
                                    <label class="form-label" for="anios">Años de existencia</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="date" id="fecha_fundacion" name="fecha_fundacion" class="form-control form-control-lg" />
                                    <label class="form-label" for="fecha_fundacion">Fecha de fundación</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="imagen">Logo Equipo</label>
                                    <input type="file" id="imagen" name="imagen" class="form-control form-control-sm" accept="image/*" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-2">
                            <input class="btn btn-danger btn-lg" type="submit" value="Añadir" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

