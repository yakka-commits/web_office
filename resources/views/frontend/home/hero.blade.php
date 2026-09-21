<!-- Hero Section (Premium Layout ala KRS Jawa 3) -->
<section class="relative w-full h-[600px] lg:h-[750px] flex items-center overflow-hidden bg-slate-50 dark:bg-primary transition-colors duration-500">
    
<!-- Latar Belakang Gambar -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/stiker Klinik.jpg.jpeg') }}" alt="Klinik PKP Maluku" class="block w-full h-full object-cover object-[center_20%] lg:object-[center_20%]" />
        
        <!-- INOVASI: Cinematic Radial Shadow (Sangat Halus & Mewah) -->
        <!-- Lapisan 1: Filter redup tipis merata agar gambar tidak menyilaukan mata saat mode gelap -->
        <div class="absolute inset-0 hidden dark:block bg-primary/20 pointer-events-none transition-colors duration-700"></div>
        
        <!-- Lapisan 2: Awan gelap membulat organik yang memeluk area teks, dan menghilang total sebelum menyentuh logo -->
        <!-- rgba(11,23,39) adalah kode RGB asli dari warna Biru Dongker (#0B1727) tema kalian -->
        <div class="absolute inset-0 hidden dark:block pointer-events-none transition-colors duration-700" 
             style="background: radial-gradient(circle at 20% 35%, rgba(11, 23, 39, 0.95) 0%, rgba(11, 23, 39, 0.6) 35%, transparent 60%);">
        </div>
    </div>

<!-- Container Utama (Dinamis saat di-zoom & ditarik ke kiri agar sejajar tengah logo) -->
    <div class="relative z-10 w-full pl-6 sm:pl-10 md:pl-14 lg:pl-16 xl:pl-24 2xl:pl-[7%] pr-6">
        
 <!-- TAMBAHAN: -mt-10 (layar kecil) dan lg:-mt-16 (layar besar) untuk menarik teks ke atas -->
        <div class="max-w-3xl text-left -mt-10 lg:-mt-16">
            
            <div class="reveal-up">
                <!-- Lencana KemenPUPR (Gaya Jawa 3) -->
                <span class="inline-flex items-center gap-2 py-1.5 px-4 mb-6 rounded-full bg-accent/10 dark:bg-surface border border-accent/30 text-accent font-bold tracking-widest text-[10px] sm:text-xs uppercase backdrop-blur-sm">
                    KLINIK PKP BALAI P3KP MALUKU
                </span>
            </div>
            
            <!-- Teks Judul Besar -->
            <h1 class="reveal-up delay-100 text-4xl md:text-5xl lg:text-[3.5rem] font-extrabold text-slate-900 dark:text-white leading-[1.1] mb-6">
                Konsultasikan rumah layak huni yang akan Anda bangun kepada Kami <span class="text-accent">Gratis!</span>
            </h1>

            <!-- Deskripsi Pendek -->
            <p class="reveal-up delay-200 text-slate-600 dark:text-slate-300 text-lg mb-10 max-w-xl font-medium">
                Pusat layanan terpadu untuk pemberian informasi, bantuan teknis, dan pendampingan dalam pengembangan perumahan dan permukiman di Provinsi Maluku.
            </p>
            
            <div class="reveal-up delay-300">
                <!-- Tombol Aksi (Putih di dark mode, Tosca di light mode) -->
                <a href="#" class="inline-flex justify-center items-center px-8 py-3.5 bg-accent hover:bg-accent-hover dark:bg-white dark:text-primary dark:hover:bg-slate-200 text-white font-extrabold rounded-full transition-all duration-300 text-sm tracking-wide uppercase shadow-lg shadow-accent/30">
                    Hubungi Kami 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- RUNNING TEXT (Marquee ala Jawa 3) -->
<div class="bg-accent dark:bg-surface text-white py-3 overflow-hidden border-y border-white/20 dark:border-primary relative z-20">
    <div class="animate-marquee font-bold tracking-widest text-[11px] sm:text-xs uppercase flex items-center whitespace-nowrap">
        <span class="mx-6 text-white/50">◆</span> MELAYANI MASYARAKAT SECARA CEPAT, EFEKTIF, DAN TRANSPARAN 
        <span class="mx-6 text-white/50">◆</span> BALAI PELAKSANA PENYEDIAAN PERUMAHAN MALUKU 
        <span class="mx-6 text-white/50">◆</span> BERSAMA MEMBANGUN RUMAH LAYAK HUNI
        <span class="mx-6 text-white/50">◆</span> KEMENTERIAN PERUMAHAN DAN KAWASAN PERMUKIMAN
    </div>
</div>