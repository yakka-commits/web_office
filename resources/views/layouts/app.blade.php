<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Klinik PKP') }} - Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-slate-900 dark:text-slate-100 bg-slate-100 dark:bg-[#0B1727] flex h-screen overflow-hidden">
        
        <!-- Panggil Sidebar Disini -->
        @include('components.sidebar')

        <!-- Area Konten Sebelah Kanan -->
        <div class="flex-1 flex flex-col overflow-hidden bg-slate-50 dark:bg-primary/95">
            
            <!-- Navbar Atas (Header Admin) -->
            @include('layouts.navigation')

            <!-- Judul Halaman -->
            @isset($header)
                <header class="bg-white dark:bg-surface border-b border-slate-200 dark:border-white/5 shadow-sm">
                    <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Isi Konten Dinamis -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 dark:bg-primary p-6">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>