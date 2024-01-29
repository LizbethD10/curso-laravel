<!DOCTYPE html>
<html lang="es">
        <head>
            
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <title>{{ config('app.name', 'Laravel') }}</title>

                <!-- Fonts -->
                <link rel="preconnect" href="https://fonts.bunny.net">
                <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

                <!-- Scripts -->
                @vite(['resources/css/app.css', 'resources/js/app.js'])
            
        </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen  bg-white">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
        

                @if (session('status'))
                    {{ session('status') }} 
                @endif
                
                <div class="container">
                    <div class="card card-white mt-4">
                    @yield('content')
                    </div>
                    
                </div>

               
        </div>
</body>
</html>