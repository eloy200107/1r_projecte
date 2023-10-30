<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'El Tapino') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
   
   

    <style>
        /* Estilos para los enlaces de la barra de navegación */
        .navbar-nav .nav-item {
            margin-right: 10px; /* Espaciado entre los elementos */
        }

        .navbar-nav .nav-item:last-child {
            margin-right: 0; /* Elimina el margen derecho del último elemento */
        }

        .navbar-nav .nav-link {
            color: #fff; /* Color del texto de los enlaces */
        }

        .navbar-nav .nav-link:hover {
            color: #ffcc00; /* Cambia el color al pasar el mouse por encima */
        }

        /* Estilo para la imagen de fondo */
        .bg-image {
            background-image: url('img/foto.jpg');
            background-size: cover; /* Hace que la imagen de fondo cubra toda la página */
            background-repeat: no-repeat;
            width: 100%;
          
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
    
</head>
<body class="bg-image">


<div id="app">
    <div class="">
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/inicio') }}">
                    El Tapino
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Tus enlaces izquierdos aquí -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="/ubicacion">Ubicación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="/mesas">Reserva</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="/carta">Carta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="/contacto">Contacto</a>
                            </li>
                           

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</div>
</body>
</html>
