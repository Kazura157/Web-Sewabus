<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Granat Mas Trans - Sewa Bus & Minibus Magelang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .hero-bg {
            /* Background Borobudur / Magelang vibe */
            background: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.75)), url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&q=80&w=2000');
            background-size: cover; background-position: center;
        }
        .page-view { transition: opacity 0.4s ease, transform 0.4s ease; }
        .hidden { display: none; }
        .glass { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 20px 40px -10px rgba(220, 38, 38, 0.15); }
        /* Aksen Merah/Emas untuk Granat Mas Trans (opsional, tetap pakai biru agar konsisten dg request awal, atau diganti merah marun) */
        .brand-text { color: #dc2626; } /* Red-600 */
        .brand-bg { background-color: #dc2626; }
        .brand-bg-hover:hover { background-color: #b91c1c; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 leading-relaxed overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-[100] bg-white/95 backdrop-blur border-b border-slate-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3 cursor-pointer" onclick="showView('home')">
                    <div class="brand-bg p-2 rounded-xl text-white shadow-lg"><i data-lucide="bus-front"></i></div>
                    <div class="flex flex-col">
                        <span class="text-xl font-black tracking-tighter leading-none text-slate-900">GRANAT MAS <span class="brand-text">TRANS</span></span>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Magelang, Jawa Tengah</span>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center gap-8 text-sm font-bold uppercase tracking-widest text-slate-600">
                    <a href="javascript:void(0)" onclick="showView('home')" class="hover:text-red-600 transition">Beranda</a>
                    <a href="javascript:void(0)" onclick="showView('recommendations')" class="hover:text-red-600 transition">Wisata</a>
                    <a href="javascript:void(0)" onclick="showView('armada-info')" class="hover:text-red-600 transition">Armada</a>
                    <button onclick="showView('home')" class="brand-bg text-white px-6 py-2.5 rounded-full brand-bg-hover transition shadow-lg shadow-red-200">Cek Ketersediaan</button>
                    <!-- Tombol Login simulasi aktor (Admin/Sopir) -->
                    <button onclick="alert('Fitur Login Admin/Sopir (Simulasi Backoffice)')" class="text-xs border border-slate-200 px-4 py-2 rounded-lg hover:bg-slate-50"><i data-lucide="user"></i> Login</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- 1. VIEW: HOME -->
    <div id="view-home" class="page-view pt-20">
        <!-- Hero Section -->
        <section class="hero-bg min-h-[85vh] flex items-center relative">
            <div class="max-w-7xl mx-auto px-4 w-full py-16 grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white space-y-6">
                    <div class="inline-flex items-center gap-2 bg-red-600/20 border border-red-400/30 px-4 py-2 rounded-full">
                        <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                        <span class="text-xs font-bold uppercase tracking-widest text-red-100">Solusi Transportasi Terpercaya</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-black leading-tight">Partner Perjalanan <br><span class="text-red-500">Terbaik Anda</span></h1>
                    <p class="text-lg text-slate-300 max-w-lg font-medium leading-relaxed">Melayani Ziarah, Study Tour, Family Gathering, hingga Pernikahan dengan armada prima di Magelang & Jawa Tengah.</p>
                    
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white/10 rounded-lg text-xs font-bold backdrop-blur"><i data-lucide="check" class="inline w-3 h-3 text-green-400"></i> Wisata & Tour</span>
                        <span class="px-4 py-2 bg-white/10 rounded-lg text-xs font-bold backdrop-blur"><i data-lucide="check" class="inline w-3 h-3 text-green-400"></i> Ziarah Wali</span>
                        <span class="px-4 py-2 bg-white/10 rounded-lg text-xs font-bold backdrop-blur"><i data-lucide="check" class="inline w-3 h-3 text-green-400"></i> Outing Class</span>
                    </div>
                </div>

                <!-- Form Cek Ketersediaan (DFD Level 1: Cek Ketersediaan) -->
                <div class="glass p-8 rounded-[2.5rem] shadow-2xl border border-white">
                    <h3 class="text-2xl font-black mb-6 flex items-center gap-3 text-slate-800">
                        <i data-lucide="calendar-check" class="text-red-600"></i> Reservasi Armada
                    </h3>
                    <form onsubmit="handleSearch(event)" class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Penjemputan</label>
                                <input type="text" id="start-loc" placeholder="Magelang / Jogja" required class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-red-100 outline-none font-bold text-sm">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Tujuan</label>
                                <input type="text" id="end-loc" placeholder="Bali / Malang" required class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-red-100 outline-none font-bold text-sm">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Tanggal Mulai</label>
                                <input type="date" required class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-red-100 outline-none font-bold text-sm">
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Durasi (Hari)</label>
                                <input type="number" min="1" placeholder="1" required class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-red-100 outline-none font-bold text-sm">
                            </div>
                        </div>
                         <div class="space-y-1">
                            <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Jenis Layanan</label>
                            <select class="w-full px-5 py-3.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-red-100 outline-none font-bold text-sm">
                                <option>Wisata Umum</option>
                                <option>Ziarah Religi</option>
                                <option>Study Tour / Outing</option>
                                <option>Pernikahan / Event</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full brand-bg text-white py-4 rounded-xl font-black text-lg brand-bg-hover shadow-xl shadow-red-200 transition-all flex items-center justify-center gap-2">
                            Cari Armada <i data-lucide="search" class="w-5 h-5"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Armada Showcase (Data: Big Bus, Hiace, Elf, Innova) -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-red-600 font-bold uppercase tracking-[0.3em] text-xs mb-3">Unit Kami</h2>
                    <h3 class="text-4xl font-black text-slate-900">Pilihan Armada Terbaik</h3>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Big Bus -->
                    <div class="group bg-white rounded-[2rem] border border-slate-100 card-hover transition p-4">
                        <div class="h-40 rounded-2xl overflow-hidden bg-slate-100 mb-4 relative">
                            <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2 bg-slate-900 text-white text-[10px] font-bold px-2 py-1 rounded">50 Seat</div>
                        </div>
                        <h4 class="font-black text-lg">Big Bus Pariwisata</h4>
                        <p class="text-xs text-slate-500 mb-4">Cocok untuk Ziarah & Study Tour.</p>
                        <button onclick="showView('armada-info')" class="w-full py-2 rounded-lg border border-slate-200 text-xs font-bold hover:bg-slate-50">Detail Spek</button>
                    </div>

                    <!-- Hi Ace -->
                    <div class="group bg-white rounded-[2rem] border border-slate-100 card-hover transition p-4">
                        <div class="h-40 rounded-2xl overflow-hidden bg-slate-100 mb-4 relative">
                            <img src="https://images.unsplash.com/photo-1557223562-6c77ef16210f?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2 bg-slate-900 text-white text-[10px] font-bold px-2 py-1 rounded">14 Seat</div>
                        </div>
                        <h4 class="font-black text-lg">Toyota HiAce</h4>
                        <p class="text-xs text-slate-500 mb-4">Kenyamanan VIP untuk rombongan kecil.</p>
                        <button onclick="showView('armada-info')" class="w-full py-2 rounded-lg border border-slate-200 text-xs font-bold hover:bg-slate-50">Detail Spek</button>
                    </div>

                    <!-- Elf -->
                    <div class="group bg-white rounded-[2rem] border border-slate-100 card-hover transition p-4">
                        <div class="h-40 rounded-2xl overflow-hidden bg-slate-100 mb-4 relative">
                            <img src="https://images.unsplash.com/photo-1621293954908-907159247fc8?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2 bg-slate-900 text-white text-[10px] font-bold px-2 py-1 rounded">19 Seat</div>
                        </div>
                        <h4 class="font-black text-lg">Isuzu Elf Long</h4>
                        <p class="text-xs text-slate-500 mb-4">Ekonomis untuk Family Gathering.</p>
                        <button onclick="showView('armada-info')" class="w-full py-2 rounded-lg border border-slate-200 text-xs font-bold hover:bg-slate-50">Detail Spek</button>
                    </div>

                     <!-- Innova -->
                     <div class="group bg-white rounded-[2rem] border border-slate-100 card-hover transition p-4">
                        <div class="h-40 rounded-2xl overflow-hidden bg-slate-100 mb-4 relative">
                            <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                            <div class="absolute top-2 right-2 bg-slate-900 text-white text-[10px] font-bold px-2 py-1 rounded">7 Seat</div>
                        </div>
                        <h4 class="font-black text-lg">Innova Reborn</h4>
                        <p class="text-xs text-slate-500 mb-4">Premium MPV untuk perjalanan dinas/keluarga.</p>
                        <button onclick="showView('armada-info')" class="w-full py-2 rounded-lg border border-slate-200 text-xs font-bold hover:bg-slate-50">Detail Spek</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fitur: Rekomendasi Wisata -->
        <section class="py-24 bg-slate-50" id="recommendations-preview">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-end mb-12">
                    <div>
                        <h2 class="text-red-600 font-bold uppercase tracking-[0.3em] text-xs mb-3">Destinasi Populer</h2>
                        <h3 class="text-3xl font-black text-slate-900">Rekomendasi Wisata Magelang</h3>
                    </div>
                    <button onclick="showView('recommendations')" class="text-sm font-bold text-red-600 hover:underline">Lihat Semua</button>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="relative rounded-[2rem] overflow-hidden group h-80 cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1596402180301-407e35084930?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h4 class="text-xl font-bold">Candi Borobudur</h4>
                            <p class="text-xs text-slate-300">Wisata Sejarah & Religi</p>
                        </div>
                    </div>
                    <div class="relative rounded-[2rem] overflow-hidden group h-80 cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1628189814421-4d37553c5cd6?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h4 class="text-xl font-bold">Nepal Van Java</h4>
                            <p class="text-xs text-slate-300">Wisata Alam & Fotografi</p>
                        </div>
                    </div>
                    <div class="relative rounded-[2rem] overflow-hidden group h-80 cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1605712638848-185d7732d847?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h4 class="text-xl font-bold">Silancur Highland</h4>
                            <p class="text-xs text-slate-300">Camping & Sunrise</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- 2. VIEW: ARMADA INFO (Full Specs) -->
    <div id="view-armada-info" class="hidden page-view pt-32 pb-32">
        <div class="max-w-7xl mx-auto px-4">
            <button onclick="showView('home')" class="mb-8 flex items-center gap-2 font-bold text-slate-500 hover:text-red-600 transition"><i data-lucide="arrow-left"></i> Kembali</button>
            <div class="text-center mb-16">
                <h3 class="text-4xl font-black text-slate-900">Detail Armada Granat Mas Trans</h3>
            </div>
            
            <div class="space-y-12">
                <!-- Big Bus -->
                <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 grid md:grid-cols-2 gap-10 items-center">
                    <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&q=80&w=800" class="w-full h-80 object-cover rounded-[2rem]">
                    <div>
                        <h4 class="text-3xl font-black mb-4">Big Bus Pariwisata</h4>
                        <p class="text-slate-600 mb-6">Pilihan utama untuk Ziarah Wali dan Study Tour sekolah. Dilengkapi bagasi luas dan suspensi nyaman.</p>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center gap-2 text-sm font-bold"><i data-lucide="users" class="text-red-600"></i> 45-50 Seat (2-2)</div>
                            <div class="flex items-center gap-2 text-sm font-bold"><i data-lucide="snowflake" class="text-red-600"></i> Full AC</div>
                            <div class="flex items-center gap-2 text-sm font-bold"><i data-lucide="tv" class="text-red-600"></i> TV & Karaoke</div>
                            <div class="flex items-center gap-2 text-sm font-bold"><i data-lucide="plug" class="text-red-600"></i> Charger Port</div>
                        </div>
                        <button onclick="showView('home')" class="brand-bg text-white px-8 py-3 rounded-xl font-bold shadow-lg">Pesan Unit Ini</button>
                    </div>
                </div>

                <!-- Hi Ace / Elf (Gabungan layout) -->
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
                        <img src="https://images.unsplash.com/photo-1557223562-6c77ef16210f?auto=format&fit=crop&q=80&w=800" class="w-full h-56 object-cover rounded-[1.5rem] mb-6">
                        <h4 class="text-2xl font-black mb-2">Toyota HiAce Commuter</h4>
                        <p class="text-sm text-slate-500 mb-4">Kapasitas 14 Seat. Sangat nyaman, suspensi empuk, cocok untuk tamu VIP atau keluarga.</p>
                         <button onclick="showView('home')" class="w-full py-3 rounded-xl border-2 border-slate-100 font-bold hover:border-red-600 hover:text-red-600 transition">Pesan Unit Ini</button>
                    </div>
                    <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
                        <img src="https://images.unsplash.com/photo-1621293954908-907159247fc8?auto=format&fit=crop&q=80&w=800" class="w-full h-56 object-cover rounded-[1.5rem] mb-6">
                        <h4 class="text-2xl font-black mb-2">Isuzu Elf Long</h4>
                        <p class="text-sm text-slate-500 mb-4">Kapasitas 19 Seat. Solusi ekonomis untuk rombongan sedang, mesin tangguh di tanjakan.</p>
                         <button onclick="showView('home')" class="w-full py-3 rounded-xl border-2 border-slate-100 font-bold hover:border-red-600 hover:text-red-600 transition">Pesan Unit Ini</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. VIEW: RECOMMENDATIONS (Fitur Baru) -->
    <div id="view-recommendations" class="hidden page-view pt-32 pb-32">
         <div class="max-w-7xl mx-auto px-4">
             <button onclick="showView('home')" class="mb-8 flex items-center gap-2 font-bold text-slate-500 hover:text-red-600 transition"><i data-lucide="arrow-left"></i> Kembali</button>
             <h2 class="text-4xl font-black text-slate-900 mb-8">Rekomendasi Wisata & Penginapan</h2>
             <p class="text-slate-500 mb-12">Kami siap mengantar Anda ke destinasi terbaik di Magelang dan sekitarnya.</p>

             <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                 <!-- Wisata -->
                 <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100">
                     <img src="https://images.unsplash.com/photo-1596402180301-407e35084930?auto=format&fit=crop&q=80&w=600" class="h-48 w-full object-cover">
                     <div class="p-6">
                         <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-1 rounded uppercase">Wisata</span>
                         <h4 class="text-xl font-bold mt-2">Candi Borobudur</h4>
                         <p class="text-sm text-slate-500 mt-2">Candi Buddha terbesar di dunia, ikon wisata Magelang.</p>
                     </div>
                 </div>
                 <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100">
                     <img src="https://images.unsplash.com/photo-1628189814421-4d37553c5cd6?auto=format&fit=crop&q=80&w=600" class="h-48 w-full object-cover">
                     <div class="p-6">
                        <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-1 rounded uppercase">Wisata Alam</span>
                         <h4 class="text-xl font-bold mt-2">Nepal Van Java</h4>
                         <p class="text-sm text-slate-500 mt-2">Desa wisata dengan pemandangan gunung Sumbing yang memukau.</p>
                     </div>
                 </div>
                 <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100">
                     <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&q=80&w=600" class="h-48 w-full object-cover">
                     <div class="p-6">
                        <span class="bg-blue-100 text-blue-700 text-[10px] font-bold px-2 py-1 rounded uppercase">Penginapan</span>
                         <h4 class="text-xl font-bold mt-2">Hotel Puri Asri</h4>
                         <p class="text-sm text-slate-500 mt-2">Hotel bintang 5 dengan pemandangan sungai dan sawah.</p>
                     </div>
                 </div>
                 <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100">
                     <img src="https://images.unsplash.com/photo-1550937633-912df497c27b?auto=format&fit=crop&q=80&w=600" class="h-48 w-full object-cover">
                     <div class="p-6">
                        <span class="bg-orange-100 text-orange-700 text-[10px] font-bold px-2 py-1 rounded uppercase">Kuliner</span>
                         <h4 class="text-xl font-bold mt-2">Kupat Tahu Pojok</h4>
                         <p class="text-sm text-slate-500 mt-2">Kuliner legendaris Magelang langganan para pejabat.</p>
                     </div>
                 </div>
             </div>
         </div>
    </div>

    <!-- 4. VIEW: SEARCH RESULTS (Proses Bisnis: Cek Ketersediaan -> Pilih) -->
    <div id="view-results" class="hidden page-view pt-32 pb-32 min-h-screen">
        <div class="max-w-6xl mx-auto px-4">
            <button onclick="showView('home')" class="text-red-600 font-bold mb-4 flex items-center gap-2"><i data-lucide="arrow-left"></i> Ubah Pencarian</button>
            <h2 class="text-3xl font-black text-slate-900 mb-2">Armada Tersedia</h2>
            <p class="text-slate-500 mb-8" id="search-context">Menampilkan unit untuk rute Anda</p>

            <div class="space-y-6">
                <!-- Result Big Bus -->
                <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex flex-col md:flex-row gap-6 hover:border-red-200 transition">
                    <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&q=80&w=600" class="w-full md:w-64 h-48 object-cover rounded-2xl">
                    <div class="flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between">
                                <h4 class="text-2xl font-black">Big Bus Pariwisata</h4>
                                <span class="text-green-600 text-xs font-bold bg-green-50 px-2 py-1 rounded h-fit">Tersedia</span>
                            </div>
                            <p class="text-sm text-slate-500 mb-4">Fasilitas: AC, TV, Karaoke, Reclining Seat (2-2), Bagasi Luas.</p>
                        </div>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-4">
                            <div>
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Harga Mulai</p>
                                <p class="text-2xl font-black text-red-600">Rp 3.500.000 <span class="text-sm text-slate-400 font-normal">/hari</span></p>
                            </div>
                            <button onclick="selectBus('Big Bus Pariwisata', 3500000)" class="brand-bg text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:bg-red-700 transition">Pilih Unit</button>
                        </div>
                    </div>
                </div>

                <!-- Result Hiace -->
                <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex flex-col md:flex-row gap-6 hover:border-red-200 transition">
                    <img src="https://images.unsplash.com/photo-1557223562-6c77ef16210f?auto=format&fit=crop&q=80&w=600" class="w-full md:w-64 h-48 object-cover rounded-2xl">
                    <div class="flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between">
                                <h4 class="text-2xl font-black">Toyota HiAce Commuter</h4>
                                <span class="text-green-600 text-xs font-bold bg-green-50 px-2 py-1 rounded h-fit">Tersedia</span>
                            </div>
                            <p class="text-sm text-slate-500 mb-4">Fasilitas: AC Dingin, Audio, Charger, Kursi Nyaman (14 Seat).</p>
                        </div>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-4">
                            <div>
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Harga Mulai</p>
                                <p class="text-2xl font-black text-red-600">Rp 1.200.000 <span class="text-sm text-slate-400 font-normal">/hari</span></p>
                            </div>
                            <button onclick="selectBus('Toyota HiAce Commuter', 1200000)" class="brand-bg text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:bg-red-700 transition">Pilih Unit</button>
                        </div>
                    </div>
                </div>
                 <!-- Result Innova -->
                 <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex flex-col md:flex-row gap-6 hover:border-red-200 transition">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&q=80&w=600" class="w-full md:w-64 h-48 object-cover rounded-2xl">
                    <div class="flex-grow flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between">
                                <h4 class="text-2xl font-black">Toyota Innova Reborn</h4>
                                <span class="text-green-600 text-xs font-bold bg-green-50 px-2 py-1 rounded h-fit">Tersedia</span>
                            </div>
                            <p class="text-sm text-slate-500 mb-4">Fasilitas: AC Double Blower, Musik, Driver Berpengalaman (7 Seat).</p>
                        </div>
                        <div class="flex items-center justify-between border-t border-slate-50 pt-4">
                            <div>
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Harga Mulai</p>
                                <p class="text-2xl font-black text-red-600">Rp 750.000 <span class="text-sm text-slate-400 font-normal">/hari</span></p>
                            </div>
                            <button onclick="selectBus('Innova Reborn', 750000)" class="brand-bg text-white px-6 py-3 rounded-xl font-bold shadow-lg hover:bg-red-700 transition">Pilih Unit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. VIEW: PAYMENT & DETAILS (Proses Bisnis: Pesan -> Bayar DP/Lunas) -->
    <div id="view-payment" class="hidden page-view pt-32 pb-32 min-h-screen bg-slate-50">
        <div class="max-w-4xl mx-auto px-4">
            <button onclick="showView('results')" class="text-slate-500 font-bold mb-6 flex items-center gap-2"><i data-lucide="arrow-left"></i> Batal</button>
            
            <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-xl border border-slate-100">
                <h2 class="text-3xl font-black text-slate-900 mb-8 border-b border-slate-100 pb-4">Formulir Pemesanan</h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <h4 class="font-bold text-red-600 text-xs uppercase tracking-widest">Detail Perjalanan</h4>
                        <div class="bg-slate-50 p-6 rounded-2xl space-y-3">
                            <div class="flex justify-between text-sm"><span class="text-slate-500">Unit Armada:</span> <span class="font-bold" id="pay-unit">-</span></div>
                            <div class="flex justify-between text-sm"><span class="text-slate-500">Rute:</span> <span class="font-bold" id="pay-route">-</span></div>
                            <div class="flex justify-between text-sm"><span class="text-slate-500">Harga Dasar:</span> <span class="font-bold" id="pay-price-text">-</span></div>
                        </div>

                        <h4 class="font-bold text-red-600 text-xs uppercase tracking-widest pt-4">Data Penyewa</h4>
                        <input type="text" id="buyer-name" placeholder="Nama Lengkap" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-bold bg-slate-50 focus:ring-2 focus:ring-red-100 outline-none">
                        <input type="text" id="buyer-wa" placeholder="Nomor WhatsApp" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-bold bg-slate-50 focus:ring-2 focus:ring-red-100 outline-none">
                        <textarea id="buyer-note" placeholder="Catatan Khusus (cth: Jemput di Bandara YIA)" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-bold bg-slate-50 focus:ring-2 focus:ring-red-100 outline-none"></textarea>
                    </div>

                    <div class="space-y-6">
                        <h4 class="font-bold text-red-600 text-xs uppercase tracking-widest">Pembayaran</h4>
                        
                        <!-- Pilihan DP / Lunas -->
                        <div class="space-y-3">
                            <label class="flex items-center gap-4 p-4 border rounded-xl cursor-pointer hover:bg-slate-50 transition" onclick="updateTotal(0.3)">
                                <input type="radio" name="payment_type" value="dp" checked class="w-5 h-5 text-red-600 focus:ring-red-500">
                                <div>
                                    <span class="block font-bold text-sm">Bayar DP (30%)</span>
                                    <span class="text-xs text-slate-500">Booking aman, pelunasan H-1 perjalanan.</span>
                                </div>
                            </label>
                            <label class="flex items-center gap-4 p-4 border rounded-xl cursor-pointer hover:bg-slate-50 transition" onclick="updateTotal(1)">
                                <input type="radio" name="payment_type" value="full" class="w-5 h-5 text-red-600 focus:ring-red-500">
                                <div>
                                    <span class="block font-bold text-sm">Bayar Lunas (100%)</span>
                                    <span class="text-xs text-slate-500">Langsung terima E-Tiket lunas.</span>
                                </div>
                            </label>
                        </div>

                        <div class="bg-slate-900 text-white p-6 rounded-2xl mt-6">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-xs font-bold text-slate-400 uppercase">Total Bayar Sekarang</span>
                            </div>
                            <div class="text-3xl font-black" id="total-payment-display">Rp 0</div>
                        </div>

                        <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-xl text-xs text-yellow-800 flex gap-2">
                            <i data-lucide="info" class="w-4 h-4 shrink-0 mt-0.5"></i>
                            Silakan transfer ke BCA 123-456-7890 a.n PT Granat Mas Trans. Upload bukti di halaman selanjutnya.
                        </div>

                        <button onclick="handlePayment()" class="w-full brand-bg text-white py-4 rounded-xl font-black shadow-lg hover:bg-red-700 transition">
                            Konfirmasi Pembayaran
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. VIEW: DASHBOARD / SUCCESS (Laporan & Status) -->
    <div id="view-success" class="hidden page-view pt-32 pb-32 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="check-circle" class="w-10 h-10"></i>
            </div>
            <h2 class="text-3xl font-black text-slate-900 mb-2">Pemesanan Berhasil Dibuat!</h2>
            <p class="text-slate-500 mb-8">Data Anda sedang diverifikasi oleh Admin. Silakan cek status secara berkala.</p>

            <div class="bg-white p-8 rounded-3xl border border-slate-200 text-left shadow-sm max-w-xl mx-auto" id="invoice-content">
                <div class="flex justify-between items-center border-b border-slate-100 pb-4 mb-4">
                    <span class="font-black text-lg">INVOICE #GMT-2024001</span>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded text-xs font-bold">Menunggu Konfirmasi</span>
                </div>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between"><span class="text-slate-500">Unit:</span> <span class="font-bold" id="inv-unit">-</span></div>
                    <div class="flex justify-between"><span class="text-slate-500">Rute:</span> <span class="font-bold" id="inv-route">-</span></div>
                    <div class="flex justify-between"><span class="text-slate-500">Nominal:</span> <span class="font-bold" id="inv-price">-</span></div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100">
                    <p class="text-xs text-slate-400 mb-2 font-bold uppercase">Status Jadwal Supir</p>
                    <div class="flex items-center gap-2 bg-slate-50 p-3 rounded-lg">
                        <i data-lucide="user" class="text-slate-400 w-4 h-4"></i>
                        <span class="text-xs font-medium text-slate-500">Akan dijadwalkan oleh Admin H-3 Keberangkatan</span>
                    </div>
                </div>
            </div>

            <div class="flex gap-4 justify-center mt-8">
                <button onclick="downloadPDF()" class="flex items-center gap-2 px-6 py-3 bg-slate-800 text-white rounded-xl font-bold hover:bg-slate-700">
                    <i data-lucide="file-text" class="w-4 h-4"></i> Download Bukti (Laporan)
                </button>
                <button onclick="showView('home')" class="px-6 py-3 border border-slate-200 text-slate-600 rounded-xl font-bold hover:bg-slate-50">
                    Kembali ke Beranda
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-16">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-12 text-sm">
            <div>
                <div class="flex items-center gap-2 mb-4 text-white">
                    <i data-lucide="bus-front"></i> <span class="font-black text-xl">GRANAT MAS TRANS</span>
                </div>
                <p class="leading-relaxed mb-4">Penyedia jasa sewa bus pariwisata terpercaya di Kabupaten Magelang. Mengutamakan keselamatan dan kenyamanan penumpang.</p>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white"><i data-lucide="facebook"></i></a>
                    <a href="#" class="hover:text-white"><i data-lucide="instagram"></i></a>
                    <a href="#" class="hover:text-white"><i data-lucide="message-circle"></i></a>
                </div>
            </div>
            <div>
                <h5 class="text-white font-bold uppercase tracking-widest mb-6">Layanan</h5>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-red-500">Sewa Bus Pariwisata</a></li>
                    <li><a href="#" class="hover:text-red-500">Paket Ziarah Wali</a></li>
                    <li><a href="#" class="hover:text-red-500">Study Tour Sekolah</a></li>
                    <li><a href="#" class="hover:text-red-500">Antar Jemput Bandara</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white font-bold uppercase tracking-widest mb-6">Kontak</h5>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3"><i data-lucide="map-pin" class="shrink-0 text-red-600"></i> Kab. Magelang, Jawa Tengah</li>
                    <li class="flex items-center gap-3"><i data-lucide="phone" class="shrink-0 text-red-600"></i> +62 812-3456-7890</li>
                    <li class="flex items-center gap-3"><i data-lucide="mail" class="shrink-0 text-red-600"></i> info@granatmas.com</li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-12 pt-8 border-t border-slate-800 text-xs">
            &copy; 2024 PT Granat Mas Trans. All rights reserved.
        </div>
    </footer>

    <script>
        lucide.createIcons();

        // Data State
        let bookingData = {
            route: '',
            unitName: '',
            unitPrice: 0,
            paymentRatio: 0.3 // Default DP 30%
        };

        function showView(viewId) {
            document.querySelectorAll('.page-view').forEach(el => el.classList.add('hidden'));
            document.getElementById('view-' + viewId).classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function handleSearch(e) {
            e.preventDefault();
            const start = document.getElementById('start-loc').value;
            const end = document.getElementById('end-loc').value;
            bookingData.route = `${start} ➔ ${end}`;
            
            document.getElementById('search-context').innerText = `Menampilkan armada untuk rute: ${bookingData.route}`;
            showView('results');
        }

        function selectBus(name, price) {
            bookingData.unitName = name;
            bookingData.unitPrice = price;
            
            // Populate Payment Page
            document.getElementById('pay-unit').innerText = name;
            document.getElementById('pay-route').innerText = bookingData.route;
            document.getElementById('pay-price-text').innerText = formatRupiah(price);
            
            // Trigger calculation for default DP
            updateTotal(0.3);
            
            showView('payment');
        }

        function updateTotal(ratio) {
            bookingData.paymentRatio = ratio;
            const total = bookingData.unitPrice * ratio;
            document.getElementById('total-payment-display').innerText = formatRupiah(total);
        }

        function handlePayment() {
             // 1. Ambil data dari form penyewa
            const buyerName = document.getElementById('buyer-name').value;
            const buyerWA = document.getElementById('buyer-wa').value;
            const buyerNote = document.getElementById('buyer-note').value;
            const payType = document.querySelector('input[name="payment_type"]:checked').value;
            const totalPay = bookingData.unitPrice * bookingData.paymentRatio;

            if(!buyerName || !buyerWA) return alert("Mohon isi Nama dan WhatsApp!");

            // 2. Siapkan data untuk dikirim ke PHP
            const formData = new FormData();
            formData.append('penjemputan', document.getElementById('start-loc').value);
            formData.append('tujuan', document.getElementById('end-loc').value);
            formData.append('unit', bookingData.unitName);
            formData.append('nama', buyerName);
            formData.append('wa', buyerWA);
            formData.append('catatan', buyerNote);
            formData.append('metode', payType);
            formData.append('total', totalPay);

            // 3. Kirim ke simpan_pesanan.php menggunakan Fetch
            fetch('api/simpan_pesanan.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Jika berhasil, tampilkan halaman sukses seperti biasa
                document.getElementById('inv-unit').innerText = bookingData.unitName;
                document.getElementById('inv-route').innerText = bookingData.route;
                const type = bookingData.paymentRatio === 1 ? '(LUNAS)' : '(DP 30%)';
                document.getElementById('inv-price').innerText = formatRupiah(totalPay) + ' ' + type;
        
                showView('success');
            })
        .catch(error => console.error('Error:', error));
    }

        function formatRupiah(number) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(number);
        }

        function downloadPDF() {
            const element = document.getElementById('invoice-content');
            html2pdf(element);
        }
    </script>
</body>
</html>