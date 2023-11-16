@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesion</h2>
              <p class="text-white-50 mb-5"> ¡Introdusca su correo y contraseña!</p>

              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                  <label class="form-label" for="typeEmailX">Email</label>
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                  <label class="form-label" for="typePasswordX">Contraseña</label>
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="{{ route('password.request') }}">Olvide mi contraseña</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
