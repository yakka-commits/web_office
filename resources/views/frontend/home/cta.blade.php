<!-- SECTION CALL TO ACTION (Menyatu dengan Footer) -->
<section class="relative py-24 overflow-hidden">
    
    <!-- Latar Belakang Gambar (Sama dengan Footer) -->
    <div class="absolute inset-0 z-0">
        <!-- Pastikan nama gambarnya sama dengan yang di footer -->
        <img src="{{ asset('images/stiker Klinik.jpg.jpeg') }}" alt="Background CTA" class="block w-full h-full object-cover object-top" />
        
        <!-- Overlay Warna Hijau Transparan -->
        <div class="absolute inset-0 bg-primary/95 mix-blend-multiply"></div>
        
        <!-- Efek Glow Tambahan agar teks lebih terbaca -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/80 rounded-full blur-[100px] pointer-events-none"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        
        <div class="reveal-up">
            <!-- Badge -->
            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-secondary text-xs font-bold uppercase tracking-widest mb-8">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                Pusat Bantuan & Konsultasi
            </span>
            
            <!-- Headline -->
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-8 tracking-tight drop-shadow-md">
                Butuh Bantuan atau <br class="hidden md:block" /> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-200 to-white dark:from-secondary dark:to-yellow-100">
                    Informasi Lebih Lanjut?
                </span>
            </h2>
            
            <!-- Deskripsi -->
            <p class="text-lg md:text-xl text-slate-200 leading-relaxed font-medium mb-12 max-w-3xl mx-auto">
                Tim Klinik PKP Maluku siap membantu menjawab pertanyaan Anda seputar layanan, program perumahan, dan bantuan teknis secara cepat dan transparan.
            </p>
            
            <!-- Tombol Aksi -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                <a href="#" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 bg-secondary text-white font-bold rounded-xl shadow-lg hover:-translate-y-1 hover:scale-105 hover:bg-secondary/90 transition-all duration-300 text-lg group">
                    Mulai Konsultasi Online
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                
                <a href="#" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 bg-transparent border-2 border-white/30 text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300 text-lg">
                    Hubungi Kontak Cepat
                </a>
            </div>
        </div>
        
    </div>
</section>