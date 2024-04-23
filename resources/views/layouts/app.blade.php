<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Seed of Change</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #d4edda; /* Light green */
            background-image: url('{{ asset("rain-water-green-leaf-macro.jpg") }}'); /* High-quality green leaf background image */
            background-repeat: repeat;
            background-size: cover;
        }

        .bg-gray-100 {
            background-color: transparent; /* Remove gray background */
        }

        .bg-white.shadow {
            background-color: rgba(255, 255, 255, 0.8); /* White with opacity for header */
            backdrop-filter: blur(10px); /* Apply blur effect */
        }
    </style>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
