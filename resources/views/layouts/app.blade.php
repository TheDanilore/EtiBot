<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ETIBOT</title>
    <link rel="icon" href="{{ asset('img/LOGO - EtiBot.ico') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Modernizr -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }} "></script>
</head>

<body class="font-sans antialiased">



    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')


        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}

        </main>
    </div>

    <footer class="bg-gray-800 py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-1">
                    <h2 class="text-xl font-semibold text-white">Enlaces útiles</h2>
                    <ul class="mt-4 space-y-2">
                        <li><a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white">Inicio</a></li>
                        <li><a href="{{ route('nosotros') }}" class="text-gray-300 hover:text-white">Nosotros</a></li>
                        @hasanyrole('Plan Premium|Administrador')
                        <li><a href="{{ route('recursos') }}" class="text-gray-300 hover:text-white">Recursos</a></li>
                        @endhasanyrole
                        @hasanyrole('Plan Premium|Administrador')
                        <li><a href="{{ route('posts.index') }}" class="text-gray-300 hover:text-white">Foro</a></li>
                        @endhasanyrole
                    </ul>
                </div>
                <div class="md:col-span-1">
                    <h2 class="text-xl font-semibold text-white">Contacto</h2>
                    <p class="mt-4 text-gray-300">Nuevo Chimbote, Perú<br>etibot2024@gmail.com</p>
                </div>
                <div class="md:col-span-1">
                    <a href="{{ route('faq.index') }}" class="text-gray-300 hover:text-white">Preguntas Frecuentes</a>
                </div>

            </div>
            <div class="border-t border-gray-700 mt-6 pt-4">
                <p class="text-center text-gray-400">Desarrollado por <span class="font-semibold">DANILORE</span></p>
            </div>
        </div>
    </footer>
</body>



<!-- owl carouseljavascript file -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Bootsrap javascript file -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Template main javascript -->
<script src="{{ asset('js/main.js') }}"></script>

</html>