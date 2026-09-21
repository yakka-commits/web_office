<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <h2 class="font-extrabold text-xl text-slate-800 dark:text-white leading-tight">
                {{ __('Kelola Berita & Publikasi') }}
            </h2>
            
            <!-- Tombol Tambah Berita -->
            <a href="{{ route('admin.news.create') }}" class="inline-flex items-center px-5 py-2.5 bg-accent hover:bg-accent-hover text-white text-sm font-bold rounded-lg shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                Tulis Berita Baru
            </a>
        </div>
    </x-slot>

    <!-- Bungkus Tabel -->
    <div class="bg-white dark:bg-surface overflow-hidden shadow-sm sm:rounded-2xl border border-slate-200 dark:border-white/5">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 dark:bg-primary/50 border-b border-slate-200 dark:border-white/10 text-xs uppercase tracking-widest text-slate-500 dark:text-slate-400 font-extrabold">
                        <th class="px-6 py-4">Judul Berita</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Tanggal</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-white/5">
                    
                    <!-- Contoh Data 1 -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-primary/30 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-lg bg-slate-200 dark:bg-slate-700 flex-shrink-0 object-cover overflow-hidden">
                                    <div class="w-full h-full bg-accent/20 flex items-center justify-center text-accent"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-900 dark:text-white line-clamp-1 group-hover:text-accent transition-colors">Kunjungan Kerja Menteri PKP ke Maluku</p>
                                    <p class="text-xs text-slate-500 mt-0.5">Oleh: Admin Pusat</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400 text-xs font-bold">Informasi</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="flex items-center gap-1.5 text-xs font-bold text-emerald-600 dark:text-emerald-400">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Publish
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-slate-600 dark:text-slate-400">
                            12 Okt 2026
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <button class="p-2 text-slate-400 hover:text-amber-500 bg-slate-100 hover:bg-amber-100 dark:bg-primary dark:hover:bg-amber-500/20 rounded-lg transition-colors" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button class="p-2 text-slate-400 hover:text-red-500 bg-slate-100 hover:bg-red-100 dark:bg-primary dark:hover:bg-red-500/20 rounded-lg transition-colors" title="Hapus">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        <!-- Pagination Placeholder -->
        <div class="p-4 border-t border-slate-200 dark:border-white/5 bg-slate-50 dark:bg-primary/50 text-xs font-medium text-slate-500 text-center">
            Menampilkan 1 dari 1 data
        </div>
    </div>
</x-app-layout>