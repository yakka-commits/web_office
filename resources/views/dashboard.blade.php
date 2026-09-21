<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-xl text-slate-800 dark:text-white leading-tight">
            {{ __('Overview Dashboard') }}
        </h2>
    </x-slot>

    <!-- Kumpulan Kartu Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        
        <!-- Kartu 1 -->
        <div class="bg-white dark:bg-surface p-6 rounded-2xl border border-slate-200 dark:border-white/5 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-1">Total Konsultasi</p>
                <h3 class="text-3xl font-black text-slate-800 dark:text-white">0</h3>
            </div>
            <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center text-accent">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="bg-white dark:bg-surface p-6 rounded-2xl border border-slate-200 dark:border-white/5 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-1">Berita Aktif</p>
                <h3 class="text-3xl font-black text-slate-800 dark:text-white">0</h3>
            </div>
            <div class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center text-blue-500">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.586-1.414l-4.5-4.5A2 2 0 0012.586 3H12"></path></svg>
            </div>
        </div>

        <!-- Kartu 3 -->
        <div class="bg-white dark:bg-surface p-6 rounded-2xl border border-slate-200 dark:border-white/5 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-1">Kunjungan Web</p>
                <h3 class="text-3xl font-black text-slate-800 dark:text-white">0</h3>
            </div>
            <div class="w-14 h-14 bg-amber-500/10 rounded-xl flex items-center justify-center text-amber-500">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </div>
        </div>

    </div>

    <!-- Area Selamat Datang -->
    <div class="bg-white dark:bg-surface overflow-hidden shadow-sm sm:rounded-2xl border border-slate-200 dark:border-white/5">
        <div class="p-8">
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Selamat datang kembali, Admin! 👋</h3>
            <p class="text-slate-600 dark:text-slate-400">Pilih menu di sebelah kiri untuk mulai mengelola konten website Klinik PKP Maluku.</p>
        </div>
    </div>
</x-app-layout>