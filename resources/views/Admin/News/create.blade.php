<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <!-- Tombol Kembali -->
            <a href="{{ route('admin.news.index') }}" class="p-2 -ml-2 text-slate-400 hover:text-accent transition-colors rounded-lg hover:bg-accent/10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-extrabold text-xl text-slate-800 dark:text-white leading-tight">
                {{ __('Tulis Berita Baru') }}
            </h2>
        </div>
    </x-slot>

    <div class="bg-white dark:bg-surface overflow-hidden shadow-sm sm:rounded-2xl border border-slate-200 dark:border-white/5">
        <div class="p-6 sm:p-8">
            
            <!-- Form Input -->
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Judul Berita -->
                <div>
                    <label for="title" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Judul Berita</label>
                    <input type="text" name="title" id="title" class="w-full rounded-xl border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-primary/50 text-slate-900 dark:text-white focus:ring-accent focus:border-accent transition-colors" placeholder="Masukkan judul berita yang menarik..." required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Kategori -->
                    <div>
                        <label for="category" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Kategori</label>
                        <select name="category" id="category" class="w-full rounded-xl border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-primary/50 text-slate-900 dark:text-white focus:ring-accent focus:border-accent transition-colors" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Informasi">Informasi</option>
                            <option value="Program Kerja">Program Kerja</option>
                            <option value="Pengumuman">Pengumuman</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Status Publikasi</label>
                        <select name="status" id="status" class="w-full rounded-xl border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-primary/50 text-slate-900 dark:text-white focus:ring-accent focus:border-accent transition-colors" required>
                            <option value="publish">Langsung Publish</option>
                            <option value="draft">Simpan sebagai Draft</option>
                        </select>
                    </div>
                </div>

                <!-- Thumbnail / Gambar Utama -->
                <div>
                    <label for="thumbnail" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Foto / Thumbnail Berita</label>
                    <input type="file" name="thumbnail" id="thumbnail" accept="image/*" class="block w-full text-sm text-slate-500 dark:text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-accent/10 file:text-accent hover:file:bg-accent/20 transition-all">
                </div>

                <!-- Konten Berita -->
                <div>
                    <label for="content" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Isi Berita</label>
                    <textarea name="content" id="content" rows="8" class="w-full rounded-xl border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-primary/50 text-slate-900 dark:text-white focus:ring-accent focus:border-accent transition-colors" placeholder="Ketik isi berita di sini..." required></textarea>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex items-center justify-end gap-4 pt-4 border-t border-slate-200 dark:border-white/5">
                    <a href="{{ route('admin.news.index') }}" class="px-6 py-3 text-sm font-bold text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition-colors">Batal</a>
                    <button type="submit" class="px-6 py-3 bg-accent hover:bg-accent-hover text-white text-sm font-bold rounded-xl shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                        Simpan Berita
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>