<!-- MEGA FOOTER (Premium, Trustworthy, Modern) -->
<!-- Menggunakan background image dengan overlay warna primary (hijau) yang transparan -->
<footer class="relative text-slate-300 pt-20 pb-10 border-t-[6px] border-secondary overflow-hidden">
    
    <!-- Latar Belakang Gambar Footer -->
    <div class="absolute inset-0 z-0">
        <!-- Pastikan Anda memiliki gambar pemandangan atau gambar yang sesuai.
             Misalnya, Anda bisa menggunakan gambar hero atau gambar lain yang relevan.
             Ganti 'images/stiker Klinik.jpg.jpeg' dengan nama file gambar yang Anda inginkan. -->
        <img src="{{ asset('images/stiker Klinik.jpg.jpeg') }}" alt="Background Footer" class="block w-full h-full object-cover object-center" />
        
        <!-- Overlay Warna Hijau (Primary) Transparan -->
        <!-- Menggunakan bg-primary/95 agar warna hijaunya dominan tapi gambar di belakangnya tetap samar-samar terlihat -->
        <div class="absolute inset-0 bg-primary/95 mix-blend-multiply"></div>
    </div>

    <!-- Dekorasi Halus Tambahan (Opsional) -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Grid Footer Atas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
            
            <!-- Kolom 1: Identitas Instansi -->
            <div class="lg:col-span-4">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 bg-white rounded-xl p-2 flex items-center justify-center shadow-lg">
                        <img src="{{ asset('images/logo-kementerian.png') }}" alt="Logo PKP" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h3 class="text-xl font-extrabold text-white leading-tight">Klinik PKP <br><span class="text-secondary">Maluku</span></h3>
                    </div>
                </div>
                <p class="text-slate-300 text-sm leading-relaxed mb-6 text-justify">
                    Balai Pelaksana Penyediaan Perumahan Maluku merupakan Unit Pelaksana Teknis (UPT) Kementerian Perumahan dan Kawasan Permukiman Republik Indonesia. Bergerak di bidang Perumahan dan Kawasan Permukiman / Pelayanan Publik.
                </p>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-secondary hover:text-primary flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-white hover:text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-secondary hover:text-primary flex items-center justify-center transition-colors duration-300">
                        <svg class="w-5 h-5 text-white hover:text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Kolom 2: Menu Cepat -->
            <div class="lg:col-span-3 lg:col-start-6">
                <h4 class="text-white font-bold mb-6 text-lg tracking-wide">Tautan Cepat</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-slate-300 hover:text-secondary transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Beranda</a></li>
                    <li><a href="#" class="text-slate-300 hover:text-secondary transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Profil Instansi</a></li>
                    <li><a href="#" class="text-slate-300 hover:text-secondary transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Program Unggulan</a></li>
                    <li><a href="#" class="text-slate-300 hover:text-secondary transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Berita & Publikasi</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Layanan & Info -->
            <div class="lg:col-span-4">
                <h4 class="text-white font-bold mb-6 text-lg tracking-wide">Layanan & Kontak</h4>
                <ul class="space-y-4 mb-8">
                    <li><a href="#" class="text-slate-300 hover:text-secondary transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Layanan Informasi</a></li>
                    <li><a href="#" class="text-slate-300 hover:text-secondary transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Bantuan Teknis</a></li>
                </ul>
                
                <!-- Box Domain Resmi disesuaikan warnanya agar menyatu -->
               
            </div>

        </div>

        <!-- Garis Pemisah Bawah -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-400 text-sm font-medium">
                &copy; 2026 Klinik PKP Balai Pelaksana Penyediaan Perumahan Maluku. Hak Cipta Dilindungi.
            </p>
            <div class="flex gap-6 text-sm font-medium">
                <a href="#" class="text-slate-400 hover:text-secondary transition-colors">Syarat & Ketentuan</a>
                <a href="#" class="text-slate-400 hover:text-secondary transition-colors">Kebijakan Privasi</a>
            </div>
        </div>
        
    </div>
</footer>