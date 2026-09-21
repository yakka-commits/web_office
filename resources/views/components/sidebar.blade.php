<!-- Sidebar Admin Premium -->
<aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-primary border-r border-surface">
    <!-- Logo Admin -->
    <div class="flex items-center gap-3 mb-10 px-2">
        <img src="{{ asset('images/logo-kementerian.png') }}" alt="Logo" class="w-10 h-10 object-contain">
        <div>
            <h2 class="text-xl font-black text-white tracking-wider">ADMIN<span class="text-accent">PKP</span></h2>
            <p class="text-[10px] text-slate-400 font-bold tracking-widest uppercase">Maluku</p>
        </div>
    </div>

    <!-- Menu Navigasi -->
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="space-y-2">
            <!-- Menu Dashboard -->
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-white bg-accent rounded-xl transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span class="mx-3 font-semibold text-sm">Dashboard Utama</span>
            </a>

            <p class="px-4 pt-4 pb-2 text-xs font-extrabold text-slate-500 uppercase tracking-widest">Kelola Konten</p>

            <!-- Menu Berita -->
            <a href="{{ route('admin.news.index') }}" class="flex items-center px-4 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.news.*') ? 'bg-accent text-white shadow-md' : 'text-slate-300 hover:text-white hover:bg-surface' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.586-1.414l-4.5-4.5A2 2 0 0012.586 3H12"></path></svg>
                <span class="mx-3 font-medium text-sm">Berita & Publikasi</span>
            </a>

            <!-- Menu Layanan -->
            <a href="#" class="flex items-center px-4 py-2.5 text-slate-300 hover:text-white hover:bg-surface rounded-xl transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span class="mx-3 font-medium text-sm">Program & Layanan</span>
            </a>

            <!-- Menu Galeri -->
            <a href="#" class="flex items-center px-4 py-2.5 text-slate-300 hover:text-white hover:bg-surface rounded-xl transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span class="mx-3 font-medium text-sm">Galeri Kegiatan</span>
            </a>

            <p class="px-4 pt-4 pb-2 text-xs font-extrabold text-slate-500 uppercase tracking-widest">Interaksi</p>

            <!-- Menu Konsultasi -->
            <a href="#" class="flex items-center px-4 py-2.5 text-slate-300 hover:text-white hover:bg-surface rounded-xl transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                <span class="mx-3 font-medium text-sm">Pesan Konsultasi</span>
                <span class="ml-auto bg-red-500 text-white py-0.5 px-2 rounded-full text-[10px] font-bold">3 Baru</span>
            </a>
        </nav>
    </div>
</aside>