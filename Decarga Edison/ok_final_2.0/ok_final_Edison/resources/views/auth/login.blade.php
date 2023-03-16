@extends('layouts.app')

@section('content')

<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="{{ asset('images/logo-web.png') }}"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <!-- FORMULARIO -->

        <form method="POST" action="{{ route('login') }}">
        @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-danger btn-floating mx-1">
              <i class="fa fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-danger btn-floating mx-1">
              <i class="fa fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-danger btn-floating mx-1">
              <i class="fa fa-linkedin"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="form3Example3" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="Enter a valid email address" />
                    <label class="form-label" for="form3Example3">Email address</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <input type="password" name="password" id="form3Example4" class="form-control form-control-lg @error('password') is-invalid @enderror" required placeholder="Enter password" />
                    <label class="form-label" for="form3Example4">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Type input
                <div class="form-outline mb-3">
                    <label for="tipo" class="form-label">{{ __('Type') }}</label>
                    <select id="tipo" class="form-control" name="tipo" required>
                    <option value="administrador">Administrador</option>
                          <option value="presidente">Presidente</option>
                          <option value="jugador">Jugador</option>
                    </select>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div> -->

          <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                     </label>
                </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-danger btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>

@endsection


