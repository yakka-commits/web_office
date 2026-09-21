<!-- Navbar Smart Auto-Hide -->
<nav id="navbar" class="fixed top-0 z-50 w-full bg-white dark:bg-[#0B1727] border-b border-slate-200 dark:border-slate-800 shadow-sm" style="transition: transform 0.3s ease-in-out; transform: translateY(0);">
    <!-- max-w-[1400px] agar navbar sedikit lebih lebar dan muat banyak menu -->
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- h-16 lg:h-20 agar navbar sedikit lebih tinggi dan lega -->
        <div class="flex justify-between items-center h-16 lg:h-20">
            
            <!-- KIRI: Logo & Identitas -->
            <!-- SOLUSI: shrink-0 ditambahkan di sini agar tidak terdesak menu kanan -->
            <div class="flex items-center gap-2 lg:gap-3 cursor-pointer shrink-0">
                <img src="{{ asset('images/logo-kementerian.png') }}" alt="Kementerian PKP" class="h-10 lg:h-12 w-auto object-contain shrink-0">
                
                <div class="flex flex-col border-l-2 border-slate-200 dark:border-slate-700 pl-3 shrink-0">
                    <!-- SOLUSI: whitespace-nowrap ditambahkan agar teks tidak turun baris -->
                    <span class="text-[14px] lg:text-[15px] font-extrabold text-slate-900 dark:text-white leading-tight tracking-wide whitespace-nowrap">KLINIK PKP</span>
                    <span class="text-[9px] lg:text-[11px] font-medium text-slate-500 dark:text-slate-400 leading-tight mt-0.5 whitespace-nowrap">Balai Pelaksana Penyediaan Perumahan Maluku</span>
                </div>
            </div>
            
<!-- KANAN: Menu Navigasi & Dark Mode -->
            <div class="hidden lg:flex items-center justify-end gap-1 xl:gap-2 flex-1 ml-4 overflow-hidden">
                
                <a href="#" class="px-3 xl:px-4 py-2 rounded-full bg-slate-100 text-slate-800 dark:bg-surface dark:text-white text-[12px] xl:text-[13px] font-bold transition-all hover:bg-slate-200 dark:hover:bg-accent whitespace-nowrap shadow-sm">
                    Beranda
                </a>
                
                <a href="#" class="px-2 xl:px-3 py-2 text-[12px] xl:text-[13px] font-semibold text-slate-600 dark:text-slate-300 hover:text-accent transition-all duration-300 whitespace-nowrap group relative">
                    Tentang Klinik PKP
                    <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-accent group-hover:w-1/2 transition-all duration-300 ease-out origin-center -translate-x-1/2 rounded-full"></span>
                </a>
                
                <a href="#" class="px-2 xl:px-3 py-2 text-[12px] xl:text-[13px] font-semibold text-slate-600 dark:text-slate-300 hover:text-accent transition-all duration-300 whitespace-nowrap group relative flex items-center gap-1">
                    Layanan
                    <svg class="w-3.5 h-3.5 opacity-70 group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                    <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-accent group-hover:w-1/2 transition-all duration-300 ease-out origin-center -translate-x-1/2 rounded-full"></span>
                </a>
                
                <a href="#" class="px-2 xl:px-3 py-2 text-[12px] xl:text-[13px] font-semibold text-slate-600 dark:text-slate-300 hover:text-accent transition-all duration-300 whitespace-nowrap group relative">
                    Unduhan
                    <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-accent group-hover:w-1/2 transition-all duration-300 ease-out origin-center -translate-x-1/2 rounded-full"></span>
                </a>
                
                <a href="#" class="px-2 xl:px-3 py-2 text-[12px] xl:text-[13px] font-semibold text-slate-600 dark:text-slate-300 hover:text-accent transition-all duration-300 whitespace-nowrap group relative">
                    Galeri Kegiatan
                    <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-accent group-hover:w-1/2 transition-all duration-300 ease-out origin-center -translate-x-1/2 rounded-full"></span>
                </a>

                <a href="#" class="px-2 xl:px-3 py-2 text-[12px] xl:text-[13px] font-semibold text-slate-600 dark:text-slate-300 hover:text-accent transition-all duration-300 whitespace-nowrap group relative">
                    Survei Kepuasan Layanan
                    <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-accent group-hover:w-1/2 transition-all duration-300 ease-out origin-center -translate-x-1/2 rounded-full"></span>
                </a>

                <!-- Garis Pembatas dan Tombol Aksi -->
                <div class="pl-2 xl:pl-3 ml-1 xl:ml-2 border-l border-slate-200 dark:border-slate-700 flex items-center gap-2 xl:gap-3 shrink-0">
                    <button id="theme-toggle" type="button" class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-surface focus:outline-none rounded-full p-2 transition-colors">
                        <svg class="w-4 h-4 xl:w-5 xl:h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    </button>
                    
                    <a href="{{ route('login') }}" class="px-4 py-2 text-[12px] xl:text-[13px] font-bold text-white transition-all duration-300 rounded-md bg-accent hover:bg-accent-hover shadow-md hover:shadow-lg hover:-translate-y-0.5 whitespace-nowrap hidden sm:block">
                        Login Admin
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript Murni Tanpa Class Tailwind -->
<script>
    (function() {
        let lastScrollTop = 0;
        const navbar = document.getElementById('navbar');

        if(navbar) {
            window.addEventListener('scroll', function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                // Jika scroll ke bawah DAN sudah melewati tinggi navbar (80px)
                if (scrollTop > lastScrollTop && scrollTop > 80) {
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    navbar.style.transform = 'translateY(0)';
                }
                
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; 
            }, { passive: true });
        }
    })();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const themeToggleBtn = document.getElementById('theme-toggle');
        const htmlElement = document.documentElement;

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            htmlElement.classList.add('dark');
        } else {
            htmlElement.classList.remove('dark');
        }

        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', function() {
                htmlElement.classList.toggle('dark');
                if (htmlElement.classList.contains('dark')) {
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    localStorage.setItem('color-theme', 'light');
                }
            });
        }
    });
</script>