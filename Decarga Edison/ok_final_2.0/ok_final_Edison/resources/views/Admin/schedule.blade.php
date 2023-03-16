@extends('layouts.templateAuth')

@section('content')
      <!-- contenido del cuerpo -->  
      <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
        <!-- FORMULARIO -->
        <form method="POST" action="{{ route('admin.schedule') }}">

    @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

    <div class="col-md-10 mb-4">
        <label for="equipo_1" class="form-label">Equipo 1:</label>
        <input type="text" class="form-control form-control-lg" name="equipo_1" id="equipo_1" required>
    </div>

    <div class="col-md-10 mb-4">
        <label for="equipo_2" class="form-label">Equipo 2:</label>
        <input type="text" class="form-control form-control-lg" name="equipo_2" id="equipo_2" required>
    </div>

    <div class="col-md-10 mb-4">
        <label for="lugar" class="form-label">Lugar:</label>
        <input type="text" class="form-control form-control-lg" name="lugar" id="lugar" required>
    </div>

    <div class="col-md-10 mb-4">
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="date" class="form-control form-control-lg" name="fecha" id="fecha" required>
    </div>

    <div class="col-md-10 mb-4">
        <label for="hora" class="form-label">Hora:</label>
        <input type="time" class="form-control form-control-lg" name="hora" id="hora" required>
    </div>

    <button type="submit" class="btn btn-danger ">Publicar</button>
</form>
</div>
        </div>
      </div>
    </div>
  </div>

 
@endsection

