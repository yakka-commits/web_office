<!-- SECTION PROFIL INSTANSI (Ultra Clean, Elegant, "Wow" Factor) -->
<!-- Background putih murni dengan padding vertikal sangat lega (py-32) -->
<section class="py-24 lg:py-32 bg-white dark:bg-[#0B1121] transition-colors duration-500 overflow-hidden relative border-b border-slate-100 dark:border-slate-800/60">
    
    <!-- Elemen Dekorasi Halus di Latar Belakang -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-primary/5 dark:bg-primary/10 rounded-full blur-3xl opacity-60 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-secondary/5 dark:bg-secondary/10 rounded-full blur-3xl opacity-60 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">
            
            <!-- KOLOM KIRI: Headline Besar & Modern -->
            <div class="lg:col-span-6 reveal-up">
                
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white mb-6 leading-[1.15] tracking-tight">
                    Layanan Klinik <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-emerald-600 dark:from-secondary dark:to-yellow-200">
                        PKP Balai P3KP
                    </span> <br/>
                    Maluku
                </h2>
                
                <!-- Mini Stats / Identitas Kementerian -->
                <div class="flex items-center gap-5 pt-8 border-t border-slate-100 dark:border-slate-800/80 max-w-lg">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700 flex items-center justify-center p-2 shadow-sm">
                        <!-- Pastikan gambar logo kementerian Anda ada di folder public/images -->
                        <img src="{{ asset('images/logo-kementerian.png') }}" alt="Kementerian PKP" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <p class="text-[11px] text-slate-400 dark:text-slate-500 font-bold uppercase tracking-widest mb-1">Berada di Bawah Naungan</p>
                        <p class="text-sm font-bold text-slate-800 dark:text-slate-200 leading-tight">Kementerian Perumahan & <br>Kawasan Permukiman RI</p>
                    </div>
                </div>

            </div>

            <!-- KOLOM KANAN: Kartu Deskripsi yang Melayang -->
            <div class="lg:col-span-6 reveal-up delay-200 relative">
                
                <!-- Bingkai Bayangan (Gaya Startup) -->
                <div class="absolute -inset-4 bg-gradient-to-br from-primary/5 to-slate-50 dark:from-slate-800/60 dark:to-slate-900/60 rounded-[2.5rem] transform rotate-3 opacity-70 z-0"></div>
                
                <!-- Kartu Utama -->
                <div class="relative z-10 bg-white dark:bg-[#0f172a] p-8 md:p-12 rounded-[2rem] border border-slate-100 dark:border-slate-800 shadow-2xl shadow-slate-200/50 dark:shadow-black/40">
                    
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-5 flex items-center gap-3">
                        Tentang Klinik
                    </h3>
                    
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-8 text-[15px] text-justify">
                        Layanan Klinik PKP diselenggarakan oleh Balai Pelaksana Penyediaan Perumahan dan Kawasan Permukiman (Balai P3KP) Maluku untuk masyarakat yang memerlukan informasi dan pendampingan dalam pemenuhan kebutuhan rumah layak huni, terjangkau, dan berkelanjutan, serta masyarakat penerima bantuan Pemerintah atau bantuan lembaga lainnya seperti CSR perusahaan, BAZNAS atau lembaga lainnya. 
                    </p>

                    <!-- Inner Card untuk Tugas Pokok -->
                    <div class="p-6 bg-slate-50/80 dark:bg-slate-800/30 rounded-2xl border border-slate-100 dark:border-slate-700/50">
                        <h4 class="text-sm font-extrabold text-primary dark:text-secondary uppercase tracking-widest mb-3 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            Tugas Kami
                        </h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed text-justify">
                            Melaksanakan penyediaan perumahan, peningkatan kualitas perumahan, pengembangan kawasan permukiman penataan kawasan permukiman pasca bencana dan kerusuhan sosial, dan fasilitasi serah terima aset.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>