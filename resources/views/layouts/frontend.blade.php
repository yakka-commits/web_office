<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') | Klinik PKP - BP2P Maluku</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Script Pencegah Kedip Mode Gelap -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        @keyframes marquee { 0% { transform: translateX(100%); } 100% { transform: translateX(-100%); } }
        .animate-marquee { display: inline-block; white-space: nowrap; animation: marquee 25s linear infinite; }
        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.5, 0, 0, 1); }
        .reveal-up.active { opacity: 1; transform: translateY(0); }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
    </style>
</head>
<body class="bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-200 antialiased flex flex-col min-h-screen overflow-x-hidden transition-colors duration-300">

    @include('components.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- FLOATING KONSULTASI BUTTON (Posisinya Benar di Sini!) -->
    <div class="fixed bottom-6 right-6 z-50 group">
        <!-- Tooltip -->
        <div class="absolute bottom-full right-0 mb-4 whitespace-nowrap bg-white dark:bg-slate-800 text-slate-800 dark:text-white text-sm font-bold px-4 py-2 rounded-xl shadow-xl opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300 border border-slate-100 dark:border-slate-700 pointer-events-none">
            Butuh Bantuan? Chat Kami!
            <div class="absolute -bottom-2 right-4 w-4 h-4 bg-white dark:bg-slate-800 transform rotate-45 border-b border-r border-slate-100 dark:border-slate-700"></div>
        </div>

        <!-- Tombol Utama -->
        <a href="#" class="flex items-center justify-center w-14 h-14 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-[0_10px_25px_rgba(34,197,94,0.5)] transform hover:scale-110 hover:-translate-y-1 transition-all duration-300 relative">
            <span class="absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-50 animate-ping"></span>
            <svg class="w-7 h-7 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.964 9.964 0 001.333 4.993L2 22l5.233-1.237a9.994 9.994 0 004.779 1.216h.004c5.505 0 9.988-4.478 9.989-9.985 0-2.669-1.037-5.176-2.922-7.062A9.935 9.935 0 0012.012 2zm5.836 14.364c-.249.702-1.42 1.332-1.956 1.458-.535.127-1.157.25-3.415-.688-2.723-1.129-4.476-3.904-4.61-4.085-.134-.18-1.1-1.464-1.1-2.793 0-1.328.69-1.986.936-2.25.247-.264.535-.331.714-.331.178 0 .356.004.516.012.169.008.397-.066.621.472.285.681.691 1.688.753 1.815.062.127.104.275.014.455-.089.18-.134.292-.267.445-.134.153-.28.328-.401.455-.134.135-.278.283-.122.553.155.27.69 1.14 1.477 1.841 1.016.903 1.87 1.18 2.138 1.306.267.127.423.106.58-.073.155-.18.669-.78.847-1.047.178-.268.356-.225.599-.134.243.09 1.539.726 1.806.861.267.135.445.203.511.316.067.113.067.653-.182 1.355z"/></svg>
        </a>
    </div>

    <!-- SCRIPT BERADA DI PALING BAWAH -->
    <script>
        // Animasi Scroll
        document.addEventListener("DOMContentLoaded", function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) { entry.target.classList.add("active"); }
                });
            }, { threshold: 0.1 });
            document.querySelectorAll(".reveal-up").forEach((el) => { observer.observe(el); });
        });

        // Script Tombol Dark Mode Cerdas
        var themeToggleBtn = document.getElementById('theme-toggle');
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Set ikon awal
        if (document.documentElement.classList.contains('dark')) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        // Event Klik
        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        });
    </script>
</body>
</html>