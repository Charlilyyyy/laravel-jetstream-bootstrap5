<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'eSWIS Sabah') }}</title>

    <script src="../../assets/js/main.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- <link rel="stylesheet" href="{{ asset('assets_main/css/main.css') }}"> --}}
    {{-- <script src="{{ asset('assets_main/js/main.js') }}"></script> --}}



    {{-- @vite('resources/assets_main/css/main.css')
    @vite('resources/assets_main/js/main.js') --}}
    @stack('styles')

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    {{-- <x-banner /> --}}
    <div class="min-h-screen bg-gray-100">
        {{-- @livewire('navigation-menu') --}}
        <!-- navbar -->
        @livewire('navbar', ['page' => 'welcome'])

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        @yield('main')
        @livewire('footer')
        @stack('scripts')
    </div>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        overflow-x: hidden;
        /* background-color: #abbdff; */
    }

    /* Navbar styles */
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: transparent;
        padding: 20px 0;
        z-index: 100;
        transition: background-color 0.3s ease;
        padding: 10px 0 10px 0;
    }

    .navbar.scrolled {
        background-color: #003b0a; /* Color when scrolled */
        box-shadow: 0 4px 2px -2px gray;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-list {
        /* display: flex; */
        list-style: none;
        /* margin: auto; */
        margin: 10px 0 10px 0;
        /* align-items: center; */
    }

    .nav-list li {
        margin-right: 20px;
    }

    .nav-list li a {
        text-decoration: none;
        color: rgb(255, 255, 255);
        font-size: 18px;
    }

    .buttons a {
        padding: 10px 20px;
        text-decoration: none;
        color: white;
        border-radius: 4px;
        font-size: 16px;
    }

    .new-user {
        background-color: #777b5e;
        margin-right: 10px;
    }

    .login {
        background-color: #1c6b90;
    }

    /* Section styles for testing scroll behavior */
    .section {
        height: 100vh;
        padding: 100px 20px;
        text-align: center;
        background-color: #f1f1f1;
        margin-top: 80px; /* Adjust to match navbar height */
    }

</style>

<script>
    window.onscroll = function() {
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
</script>
