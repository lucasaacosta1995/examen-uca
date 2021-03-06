@extends('layouts.uca_login')

@section('content')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <form method="POST" class="user" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email"  autocomplete="email" autofocus
                                                   id="email" aria-describedby="emailHelp" placeholder="Ingrese su Email..." value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Ingresar
                                        </button>
                                        {{--<hr>--}}
                                        {{--<a href="index.html" :aria-disabled="true" class="btn btn-google btn-user btn-block">--}}
                                        {{--<i class="fab fa-google fa-fw"></i> Login with Google--}}
                                        {{--</a>--}}
                                        {{--<a href="index.html" :aria-disabled="true" class="btn btn-facebook btn-user btn-block">--}}
                                        {{--<i class="fab fa-facebook-f fa-fw"></i> Login with Facebook--}}
                                        {{--</a>--}}
                                    </form>
                                    <hr>
                                    {{--<div class="text-center">--}}
                                    {{--<a class="small" href="forgot-password.html">Forgot Password?</a>--}}
                                    {{--</div>--}}
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Crear cuenta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
