<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EtiBot</title>

    <link rel="icon" type="image-x/icon" href="{{ asset('img/LOGO - Etibot.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}" />
    <!-- Styles -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="{{ route('login') }}" class="sign-in-form" method="POST">
                        @csrf
                        <h2 class="title">Iniciar Sesion</h2>

                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo" />

                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña" />

                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                        @endif
                        <!--<input type="submit" name="login" value="Login">-->
                        <input type="submit" value="Login" class="btn solid">

                        <p class="social-text">O Inicia Sesion a traves de redes sociales</p>
                        <div class="social-media">
                            <a href="{{ url('auth/google') }}" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="{{ url('auth/facebook') }}" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="{{ url('auth/twitter') }}" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </form>


                    <form action="{{ route('register') }}" class="sign-up-form" method="POST">
                        @csrf
                        <h2 class="title">Registrate</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre Completo">

                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                        </div>


                        <input type="submit" class="btn" value="Sign up" />
                        <p class="social-text">O Registrate a traves de redes sociales</p>
                        <div class="social-media">
                            <a href="{{ url('auth/google') }}" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="{{ url('auth/facebook') }}" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="{{ url('auth/twitter') }}" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Se parte de nosotros</h3>
                        <p>
                            Registrate en nuestro sitio web para que puedas ingresar.
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Registrate
                        </button>
                    </div>
                    <img src="img/log.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>
                            Si ya tienes una cuenta inicia sesion.
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Iniciar Sesión
                        </button>
                    </div>
                    <img src="img/register.svg" class="image" alt="" />
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/app-login.js') }}"></script>

</body>

</html>