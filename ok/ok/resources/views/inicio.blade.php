@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">

        <img src="{{ asset('images/soccer-logo-american-sport-modern-icon-91574083.jpg') }}" alt="Descripción de la imagen" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">

      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3" style="font-family: var(--ff1); text-transform: uppercase;">Las ligas barriales de San Bartolo les da la BIENVENIDA</h1>
        <p class="lead"> A nuestra plataforma 
            para conocer los distintos partidos que 
                 se llevaran acabo duarnte este período, 
                       esperamos ansiosos que nos acompañen
                                en cada uno de nuestros partidos.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-danger btn-lg px-4 me-md-2"  href="#">EMPECEMOS</button>
        </div>
      </div>
    </div>
  </div>
@endsection