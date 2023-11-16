@extends('layouts.app')

@section('content')
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white rounded-3">
                        <div class="card-body p-5">
                            <h2 class="fw-bold text-uppercase text-center mb-4">{{ __('Crear cuenta') }}</h2>
                        
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-4">
                                    <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                    <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    @error('name')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                    <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                                    @error('password')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password-confirm" class="form-label">{{ __('Vuelva a escribir su contraseña') }}</label>
                                    <input type="password" id="password-confirm" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        {{ __('Aceptar todos los') }} <a href="#!" class="text-decoration-none"><u>{{ __('términos y condiciones') }}</u></a>
                                    </label>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-outline-light btn-lg">{{ __('Registrarse') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
