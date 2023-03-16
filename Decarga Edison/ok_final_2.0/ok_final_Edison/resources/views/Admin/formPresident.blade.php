@extends('layouts.templateAuth')

@section('content')

      <!-- contenido del cuerpo -->  

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">PRESIDENTE DE EQUIPO</h3>
            <form method="POST" action="{{ route('president.create') }}">
            @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-success">
                    {{ session('delete') }}
                </div>
            @endif
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="name" required/>
                    <label class="form-label text-black" for="firstName">Nombre</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="apellido" required/>
                    <label class="form-label text-black" for="firstName">Apellido</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="" class="form-control form-control-lg" name="edad" required />
                    <label class="form-label text-black" for="firstName">Edad</label>
                  </div>

                </div>
                <!--
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="" class="form-control form-control-lg" name="equipo"/>
                    <label class="form-label text-black" for="lastName">Equipo</label>
                  </div>
                </div>
              </div>-->

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="" class="form-control form-control-lg" name="direccion" required/>
                    <label class="form-label text-black" for="">Dirección</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="celular" required/>
                    <label class="form-label text-black" for="phoneNumber">Celular</label>
                  </div>

                </div>
              </div>

              <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" name="email"/>
                      <label class="form-label text-black" for="emailAddress">Email</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                    <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required placeholder="Enter password" />
                      <label class="form-label text-black" for="phoneNumber">Contraseña</label>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="equipo_id">Equipo</label>
                  <select class="form-control" id="equipo_id" name="equipo_id" required>
                      @foreach(\App\Models\Equipo::pluck('nombre', 'id') as $equipoId => $equipoNombre)
                          <option value="{{ $equipoId }}">{{ $equipoNombre }}</option>
                      @endforeach
                  </select>
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

