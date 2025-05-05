<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <style>
            html, body {
                height: 100%;
            }
            .fill-height {
                min-height: 100%;
                height:auto !important; /* cross-browser */
                height: 100%; /* cross-browser */
            }
        </style>

    </head>
    <body class="d-flex h-100 text-center text-bg-dark">
    
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
          <header class="mb-auto">
            <div>
              <h3 class="float-md-start mb-0">Laravel</h3>
              @if (Route::has('login'))
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    @auth
                        <a class="nav-link fw-bold py-1 px-2 text-white" aria-current="page" 
                            href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                    @else
                        <a class="nav-link fw-bold py-1 px-2 text-white"
                            href="{{ route('login') }}">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a class="nav-link fw-bold py-1 px-2 text-white"
                                href="{{ route('register') }}">
                                Registrar
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
              </nav>
            </div>
          </header>
        
          <main class="px-3">
            <h1>Gestión de expedientes</h1>
            <p class="lead">Prueba para ingreso infotec</p>
          </main>
        
          <footer class="mt-auto text-white-50">
            <p>Hecho por <a target="_blank" href="https://www.linkedin.com/in/uriel-castillo-524347a9" class="text-white">Uriel Castillo</a></p>
          </footer>
        </div>
        
        
            
          </body>
</html>
