<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lancing Project - PT Hanifa Bahagia Sentosa</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#16a34a",
                        "primary-container": "#00873a",
                        "on-primary": "#ffffff",
                        "secondary": "#f59e0b",
                        "secondary-container": "#fea619",
                        "surface": "#f8f9ff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#3e4a3d",
                        "surface-container-low": "#eff4ff",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#bdcaba",
                        "background": "#f8f9ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Plus Jakarta Sans"],
                        "label": ["Plus Jakarta Sans"]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .asymmetric-grid { display: grid; grid-template-columns: 60% 40%; height: 560px; gap: 16px; }
        .mini-grid { display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 16px; }
        .glass-nav { backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
    </style>
</head>
<body class="bg-surface text-on-surface selection:bg-primary/20">
<!-- Header / TopNavBar (Identical to Landing) -->
<header class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-xl shadow-sm">
<div class="flex justify-between items-center max-w-7xl mx-auto px-6 py-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">landscape</span>
<span class="text-xl font-bold tracking-tighter text-emerald-900">Hanifa Bahagia Sentosa</span>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-slate-600 hover:text-emerald-800 transition-all duration-300" href="#">Beranda</a>
<a class="text-slate-600 hover:text-emerald-800 transition-all duration-300" href="#">Tentang Kami</a>
<a class="text-primary font-semibold border-b-2 border-primary pb-1" href="#">Proyek Kami</a>
<a class="text-slate-600 hover:text-emerald-800 transition-all duration-300" href="#">Kontak</a>
</nav>
<button class="bg-primary text-on-primary px-6 py-2.5 rounded-full font-semibold scale-95 active:scale-90 transition-transform flex items-center gap-2">
<span class="material-symbols-outlined text-sm">chat</span>
            WhatsApp Kami
        </button>
</div>
</header>
<main class="pt-28 pb-24">
<!-- Breadcrumb & Gallery -->
<section class="max-w-7xl mx-auto px-6 mb-16">
<nav class="mb-8">
<a class="text-on-surface-variant text-sm flex items-center gap-2 hover:text-primary transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-sm">arrow_back</span>
                Kembali ke Proyek Kami / Lancing
            </a>
</nav>
<div class="asymmetric-grid relative group">
<!-- Left: Large Panoramic -->
<div class="h-full overflow-hidden rounded-3xl shadow-md">
<img class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000" data-alt="cinematic wide panoramic view of lush green rolling hills in Lombok overlooking a turquoise blue ocean horizon during golden hour sunset" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzVX3PoCMNWZkdF_YFkv_Wv7f2xlmxIFt9ukckVCcz80wTA2bnXypoekxAM7I5DZb-zUFJYqvmndUYP9Hbc4ZF8v2wEth67QtBIBxVAoHhOQZSVHWutQ45kYTlmYQOEWE9t4Kgpk7sIwWrlgBXc7sr75XaMMz4nAUhVtSTXkEcy84JOEsxx1ftHGhPAoRDxWYZfR4RaeP4FSuRUwN-Sz03DMso4ZpRyi7GHEQaZnBS4PGsiYPQ-BouvqChDx4h0EDGl8My2TUs8c0"/>
</div>
<!-- Right: 2x2 Grid -->
<div class="mini-grid h-full">
<div class="rounded-3xl overflow-hidden h-full shadow-md">
<img class="w-full h-full object-cover hover:scale-110 transition-transform duration-700" data-alt="paved asphalt access road winding through a lush tropical landscape with coconut palm trees and bright clear sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9Nx7VgdpjQwxrMUxkao6sSGAJ-DpyyEPOECekYMHYMAKoGpnWxLts2ZhnXtIeG2wiwFuXKz8FQGwp9rlhwXiWVowL76CDVGkB9JNYDj1Gx2tuJ-aNDF51UUDyMEk6-0XAALb0R00-hfpjvm1R77eoCQOTcrLS3g_SxLXuK6BHzAgsV0kgJSv5Y7K9f_bOFQNkSlvPK3_uatldwXvfOkY2BSt2AJ8H0gwtm13G2cPOGR_fNEJpUx7iHKf6C-tSzvi9YQ1tWvaRl1o"/>
</div>
<div class="rounded-3xl overflow-hidden h-full shadow-md">
<img class="w-full h-full object-cover hover:scale-110 transition-transform duration-700" data-alt="close up of a marked rectangular plot of land in a green field with white boundary stakes under soft daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwVECiHCq3-Q67t0mJcy9YRrl125ORK8LNNUF4GwW2E8a1vc0Vm3gWT26t4qYghPm158JwwqsE-I48XkZyIFwQf1a8mSqfDOYQIgkISGUAJotpvisVUCV7RgOK8lkZGnlGkLGF_0-qPhkTeBkzB3uGdrcg-wLJ9TJnWm3grAyRmTHrLUivGf8q2DYhbm5Ib5r5k3Fl0WVhSa9KbghrxAAmXpEpyipap2wq1mSGNdhJPzDy4V8sDLkA97hXKM7rmpQIH_UKmTNaT_A"/>
</div>
<div class="rounded-3xl overflow-hidden h-full shadow-md">
<img class="w-full h-full object-cover hover:scale-110 transition-transform duration-700" data-alt="authentic traditional houses in a quiet village neighborhood surrounded by tropical greenery and rolling hills" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmzhYXxoezA59rvKoCxazu_n_IfoXtC80-q7J_iOqmJR80esVJXntBAe9HwpAKxDb2_TualjZ77a9Q2Qu0nKitg9_h4S56cEieNf_QBB8YHEsFcDDQnIULnPSHIjkF15zw6DErMrW71olnhiu47r_0msuxX-Gmc-DOwx3jmOuzPR8UHcHlJYtVn5D5GAwO2K7Nnw1EkIdfIsPFLNkF_2e-VxaqmeM6ooWmRxaQZI_BjlkKPY_VWnIu6d8NlM8H8RaifJLtlgVSjdI"/>
</div>
<div class="rounded-3xl overflow-hidden h-full shadow-md">
<img class="w-full h-full object-cover hover:scale-110 transition-transform duration-700" data-alt="dramatic orange and purple sunset sky viewed from a grassy field on a hilltop in South Lombok" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2wmad8eKUSjEh4ujClyxoDSi_OQgAs_YLELOQrDq3L9yzd2ooNMqkxtm8lvflkAQ452d2_eez2HSBDW_vKszjNd_ylpMTrTDG0gGQ5-d8jNb1EFD3NsxM2Hom1ljZCUnGtV0-bfZOA-Yx6_DEprmulw9Ehr8DvolsZmvJVSwAFAZJG1JXu2YZXZUr2p182ui5-jHvQFifNfRjxStoP3I4FVoG5EAdxkPMCruMU5SPM67yDaV42lkJ-uy76T4iDNLJZZXN2br1Jgo"/>
</div>
</div>
<!-- Float Button -->
<button class="absolute bottom-8 right-8 bg-white/90 backdrop-blur-md px-8 py-4 rounded-2xl text-on-surface font-bold shadow-2xl flex items-center gap-3 hover:bg-white transition-all transform hover:-translate-y-1">
<span class="material-symbols-outlined text-primary">grid_view</span>
                Lihat Semua Foto (12)
            </button>
</div>
</section>
<!-- Main Content Grid -->
<section class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16">
<!-- Left Column: Content -->
<div class="lg:col-span-8 space-y-12">
<div>
<span class="text-primary font-bold text-xs tracking-[0.2em] font-label uppercase mb-4 block">KAVLING TANAH • LOMBOK TENGAH</span>
<h1 class="text-5xl font-extrabold text-on-surface tracking-tight mb-6">Lancing Coastal View</h1>
<div class="flex flex-wrap gap-3">
<span class="px-5 py-2 bg-primary/10 text-primary rounded-full text-sm font-bold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> Aktif
                    </span>
<span class="px-5 py-2 bg-secondary/10 text-secondary rounded-full text-sm font-bold">Pesisir Lombok Tengah</span>
<span class="px-5 py-2 bg-slate-100 text-slate-600 rounded-full text-sm font-bold">Mulai 100 m²</span>
</div>
</div>
<div class="prose prose-slate prose-lg max-w-none text-on-surface-variant leading-relaxed">
<h2 class="text-2xl font-bold text-on-surface mb-6 border-l-4 border-primary pl-6">Tentang Lokasi Ini</h2>
<div class="space-y-6">
<p>Proyek Lancing menawarkan kesempatan eksklusif untuk memiliki aset tanah kavling di lokasi yang sedang berkembang pesat. Terletak di perbukitan hijau yang landai, setiap unit dirancang untuk memberikan pemandangan alam yang asri serta sirkulasi udara yang menyegarkan khas pesisir selatan Lombok.</p>
<p>Aksesibilitas menjadi keunggulan utama, di mana lokasi ini terhubung langsung dengan jalur utama Praya-Kuta yang mulus. Infrastruktur jalan di sekitar kawasan telah terbangun dengan baik, memudahkan mobilitas bagi para pemilik lahan maupun calon investor yang mencari potensi capital gain tinggi.</p>
<p>Hanya berjarak 12-15 menit dari KEK Mandalika, Lancing berada di zona strategis yang mendukung gaya hidup modern namun tetap tenang. Dekat dengan berbagai sirkuit internasional dan pantai-pantai ikonik, menjadikannya pilihan investasi properti yang sangat menjanjikan di masa depan.</p>
</div>
</div>
<!-- Kondisi Area -->
<div class="bg-surface-container-low rounded-3xl p-10 space-y-8 border border-slate-100">
<h2 class="text-2xl font-bold text-on-surface">Spesifikasi Kawasan</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
<div class="flex items-start gap-5">
<div class="bg-white p-3.5 rounded-2xl shadow-sm text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">terrain</span>
</div>
<div>
<p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">Topografi</p>
<p class="font-bold text-lg text-on-surface">Berbukit Landai</p>
</div>
</div>
<div class="flex items-start gap-5">
<div class="bg-white p-3.5 rounded-2xl shadow-sm text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">forest</span>
</div>
<div>
<p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">Vegetasi</p>
<p class="font-bold text-lg text-on-surface">Semak Tropis</p>
</div>
</div>
<div class="flex items-start gap-5">
<div class="bg-white p-3.5 rounded-2xl shadow-sm text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">road</span>
</div>
<div>
<p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">Akses Jalan</p>
<p class="font-bold text-lg text-on-surface">Aspal 6m</p>
</div>
</div>
<div class="flex items-start gap-5">
<div class="bg-white p-3.5 rounded-2xl shadow-sm text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">holiday_village</span>
</div>
<div>
<p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">Lingkungan</p>
<p class="font-bold text-lg text-on-surface">Permukiman</p>
</div>
</div>
</div>
</div>
<!-- Jarak Lokasi Penting -->
<div>
<h2 class="text-2xl font-bold text-on-surface mb-8">Konektivitas &amp; Jarak</h2>
<div class="space-y-6">
<div class="flex items-center justify-between group p-4 hover:bg-slate-50 rounded-2xl transition-colors">
<span class="text-on-surface-variant font-medium group-hover:text-primary transition-colors">KEK Mandalika (Sirkuit)</span>
<div class="flex-grow mx-6 border-b border-dotted border-outline-variant opacity-30"></div>
<span class="font-bold text-on-surface">7 km (12 Menit)</span>
</div>
<div class="flex items-center justify-between group p-4 hover:bg-slate-50 rounded-2xl transition-colors">
<span class="text-on-surface-variant font-medium group-hover:text-primary transition-colors">Pantai Kuta Mandalika</span>
<div class="flex-grow mx-6 border-b border-dotted border-outline-variant opacity-30"></div>
<span class="font-bold text-on-surface">9 km (15 Menit)</span>
</div>
<div class="flex items-center justify-between group p-4 hover:bg-slate-50 rounded-2xl transition-colors">
<span class="text-on-surface-variant font-medium group-hover:text-primary transition-colors">Bandara Internasional Lombok (BIL)</span>
<div class="flex-grow mx-6 border-b border-dotted border-outline-variant opacity-30"></div>
<span class="font-bold text-on-surface">22 km (30 Menit)</span>
</div>
<div class="flex items-center justify-between group p-4 hover:bg-slate-50 rounded-2xl transition-colors">
<span class="text-on-surface-variant font-medium group-hover:text-primary transition-colors">RSUD Praya</span>
<div class="flex-grow mx-6 border-b border-dotted border-outline-variant opacity-30"></div>
<span class="font-bold text-on-surface">18 km (25 Menit)</span>
</div>
</div>
</div>
<!-- Dokumentasi Area -->
<div>
<h2 class="text-2xl font-bold text-on-surface mb-8">Galeri Lapangan</h2>
<div class="flex overflow-x-auto gap-6 no-scrollbar pb-6 -mx-2 px-2">
<div class="min-w-[220px] flex-shrink-0 group">
<div class="h-40 rounded-2xl overflow-hidden mb-4 shadow-sm">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="close-up of wide asphalt road access" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxZiaIv5HsbV-Nj-5WLN4lim97E6w_3zcstv873gNzyVAV-qapdn7waUSX4C3lhPhbxm8WQJWCnuLjq_Zc351BoYbuE6_CxB_xR82tplB_5YOrt89ysUcg66a9jAW6CZcQKFb3yjYb7c6_Y9QCnJcLvdYG7dTk9WyLJBbHSAnPv1OeC78czmJykV6H9CqunDpcQk0Ulcyc6-1GFokR_kc2xF00FsQSTUp9_qHebxEr7kTKPzk94vkDi_y3lkt5Kb1liDEX6lE6eag"/>
</div>
<p class="text-sm font-bold text-center text-on-surface-variant">Akses Jalan Utama</p>
</div>
<div class="min-w-[220px] flex-shrink-0 group">
<div class="h-40 rounded-2xl overflow-hidden mb-4 shadow-sm">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="plot boundary marked with white concrete stakes" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCP99iHUeHE_hAQotBvYcDtcs_NVx3nw4Kku6RtPPlC468I8KQt0F296HzOtvNqeyNFhsfW5-LYLZNTG4fuCS3JYmhEiUFzS6KXs3GKhgyPy8xOE3YV7U0ShaNqxACD9VBG6vm4dm49ko6Ex3kgcrdc2oumpI59fFHuXmLisITbf-apck_ykFLSeIfHeJ5ioLrJLG2E9ywMSuqQYvvQco4foRFzjyDNaTgFVcoB2aXokS6rPtLPil2u4pFcZXKAzExpignrpZpfV8g"/>
</div>
<p class="text-sm font-bold text-center text-on-surface-variant">Batas Lahan</p>
</div>
<div class="min-w-[220px] flex-shrink-0 group">
<div class="h-40 rounded-2xl overflow-hidden mb-4 shadow-sm">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="lush green hillside tiered terrain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDM8NJFeyToFmqtcFjwuYDtWlp_daqInmOwbFwdFCP_iEgyHCc5FvHsaXHnEswlRfcilNFdrzJ6h-FQk9npie5Hl7pfg3cduisrVchAnETSFXA6TiZ_OUtGRlrR4mxKnvRE78QynEqNA4j4e78DGMOvvtaSjmTnEouMgVETNtCMS84Gx0OyUF469AbxOwN5dv9G23bY-ilFsKgLBu0wym2wKA5KW1s5vRvZlVFF8m2Vb8a4pDm7FHUSFjuftv0rv6CFkTjnYxcgClo"/>
</div>
<p class="text-sm font-bold text-center text-on-surface-variant">Kontur Bukit</p>
</div>
<div class="min-w-[220px] flex-shrink-0 group">
<div class="h-40 rounded-2xl overflow-hidden mb-4 shadow-sm">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="view of ocean waves from elevated landscape" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAn-QUIhgc4Xa9953Btxv9HnAJIlNgAGbGRa6ewCsxiT3zhvoIaOvHNaU1Bo2YzAcIkMRFkrIPyyHw5oZWdn9uDUMX4ObCdeCkzVHK_HySK1ANWTswHs6yIc2Cw45i-KxEOovgLOlXHAvdIEIITYDI-CiJbdfJLnKXVkaUFfpXalalXeaRwRwsCLtaDyM2lXQxP6v94kUPkhK08lMXxrG2PPulYRVdqrdmLKQuwOH63uOf_6k_7LGAgfD4ImyMQLcv69vf4pYjImDc"/>
</div>
<p class="text-sm font-bold text-center text-on-surface-variant">View Laut Selatan</p>
</div>
</div>
</div>
</div>
<!-- Right Column: Sticky Card -->
<div class="lg:col-span-4 relative">
<div class="sticky top-28 bg-white rounded-[32px] shadow-2xl shadow-emerald-900/10 p-10 border border-slate-100">
<h3 class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-2">Pricelist Unit</h3>
<p class="text-4xl font-extrabold text-primary mb-8">Rp 175.000.000</p>
<div class="grid grid-cols-2 gap-4 mb-8">
<div class="bg-slate-50 p-4 rounded-2xl text-center">
<p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Total Unit</p>
<p class="text-lg font-bold">18 Unit</p>
</div>
<div class="bg-green-50 p-4 rounded-2xl text-center">
<p class="text-[10px] uppercase font-bold text-green-600 mb-1">Tersedia</p>
<p class="text-lg font-bold text-green-700">11 Unit</p>
</div>
<div class="bg-slate-50 p-4 rounded-2xl text-center">
<p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Luas Lahan</p>
<p class="text-lg font-bold">100m²+</p>
</div>
<div class="bg-slate-50 p-4 rounded-2xl text-center">
<p class="text-[10px] uppercase font-bold text-slate-400 mb-1">Sertifikat</p>
<p class="text-lg font-bold text-on-surface">SHM</p>
</div>
</div>
<div class="flex items-center gap-3 mb-10 px-2 justify-center">
<span class="relative flex h-3 w-3">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
</span>
<p class="text-sm font-bold text-on-surface">Unit Terbatas! 11 kavling tersisa</p>
</div>
<div class="space-y-4">
<button class="w-full bg-primary hover:bg-primary-container text-on-primary py-4.5 rounded-2xl font-bold flex items-center justify-center gap-3 transition-all transform active:scale-95 shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">chat</span>
                        WhatsApp Marketing
                    </button>
<button class="w-full bg-transparent border-2 border-slate-200 text-on-surface py-4.5 rounded-2xl font-bold flex items-center justify-center gap-3 hover:bg-slate-50 transition-all">
<span class="material-symbols-outlined text-xl">download_for_offline</span>
                        Unduh Brosur (PDF)
                    </button>
</div>
<p class="text-[11px] text-center text-slate-400 mt-6 font-medium">Lancing Project • Digital Sanctuary Development</p>
</div>
</div>
</section>
<!-- Mini Map -->
<section class="max-w-7xl mx-auto px-6 mt-28">
<h2 class="text-3xl font-bold text-on-surface mb-10 text-center">Akses &amp; Lokasi Kawasan</h2>
<div class="rounded-[40px] overflow-hidden shadow-2xl h-[500px] mb-12 bg-slate-100 relative border-8 border-white">
<!-- Map Mockup -->
<div class="w-full h-full bg-slate-200">
<img class="w-full h-full object-cover grayscale opacity-40" data-location="South Lombok, Indonesia" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfbsJBnl5_t_UcgTF-Xs_XBqPzzAmTdQkE3PFBjQUdJSbXZpZ0SujBdEfy1JWz40gZvMeNodaZrrqjuanmjaFWYqOBgpbu2p3A3zUKw7QjlHSJGMfBFj68dcj75rdwN9CdJhgl6M-o7Vp7MxVsY1WbQ1sIpw9tJqx_HZ3c4wMwMQ-ny6ckzxMhecv7Q4c_-L2QHfJkX56tOJOfFdDiMLq0pQzkFwQxBvXixs1c0ywHkzwzyr8YwLhuSxUhwkkz7Bs3OLoOeC7nom0"/>
<!-- Marker Overlay -->
<div class="absolute inset-0 flex items-center justify-center">
<div class="relative">
<div class="absolute inset-0 bg-primary/20 rounded-full animate-ping scale-150"></div>
<span class="material-symbols-outlined text-primary text-6xl relative z-10" style="font-variation-settings: 'FILL' 1;">location_on</span>
<div class="absolute top-full left-1/2 -translate-x-1/2 bg-white px-5 py-2 rounded-xl shadow-2xl text-sm font-extrabold whitespace-nowrap mt-2 border border-slate-100">
                            Lancing Project Area
                        </div>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="bg-white p-8 rounded-[32px] border border-slate-100 hover:shadow-xl transition-all duration-300 group">
<div class="w-12 h-12 bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 text-secondary group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">flight_takeoff</span>
</div>
<h4 class="font-bold text-lg mb-4">Dari Bandara (BIL)</h4>
<p class="text-sm text-on-surface-variant leading-relaxed">Melalui bypass BIL - Mandalika lalu ambil jalan utama Praya - Kuta. Estimasi 30 menit perjalanan yang mulus.</p>
</div>
<div class="bg-white p-8 rounded-[32px] border border-slate-100 hover:shadow-xl transition-all duration-300 group">
<div class="w-12 h-12 bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 text-secondary group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">beach_access</span>
</div>
<h4 class="font-bold text-lg mb-4">Dari Kuta Mandalika</h4>
<p class="text-sm text-on-surface-variant leading-relaxed">Hanya 15 menit melalui jalan aspal baru ke arah utara mengikuti petunjuk jalan utama pariwisata.</p>
</div>
<div class="bg-white p-8 rounded-[32px] border border-slate-100 hover:shadow-xl transition-all duration-300 group">
<div class="w-12 h-12 bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 text-secondary group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">location_city</span>
</div>
<h4 class="font-bold text-lg mb-4">Dari Pusat Kota Praya</h4>
<p class="text-sm text-on-surface-variant leading-relaxed">Melalui jalur raya selatan yang menghubungkan pusat kota dengan kawasan ekonomi khusus Mandalika.</p>
</div>
</div>
</section>
<!-- Other Projects -->
<section class="max-w-7xl mx-auto px-6 mt-32">
<div class="flex justify-between items-end mb-12">
<div>
<span class="text-primary font-bold tracking-[0.2em] text-sm uppercase mb-3 block">Rekomendasi</span>
<h2 class="text-4xl font-extrabold text-on-surface">Proyek Pilihan Lainnya</h2>
</div>
<a class="text-primary font-bold flex items-center gap-2 hover:gap-4 transition-all pb-2" href="#">Lihat Semua <span class="material-symbols-outlined">arrow_forward</span></a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
<!-- Card 1 -->
<div class="group bg-white rounded-[32px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-slate-100">
<div class="h-72 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" data-alt="luxury villa development on a cliffside" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkb5Yd8ehVobhOp7WFCNdDojnHGiQsMfmf9pKbWB0Dm0i1atq-_v0jbrLvD6rubpYMYtIK6lJs_CZpLbsHpA4dnkDWXw3onTxARTX2f9Y_IaLqlHy11tmTlnC53LQvim_R823fGq0K98KsAjy3ifwRVTGpOnBnrtE6UTTMqSxJLNMmSwMLCNQXrup9z6MR9ePOoyZXoYNNCFb-KJ_lOBc_dfW1uHaii6mzanuyVqF4SO5fcq0LBpqdsqm3z2fYJ3tzJTr-rZsAIx4"/>
<div class="absolute top-6 left-6">
<span class="bg-primary text-white text-[10px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest">Premium Selection</span>
</div>
</div>
<div class="p-10">
<span class="text-primary font-bold text-[10px] tracking-[0.2em] uppercase">PRABU HILLS</span>
<h3 class="text-3xl font-extrabold mt-2 mb-4">Prabu Dream Land</h3>
<p class="text-on-surface-variant text-base leading-relaxed mb-8 line-clamp-2">Nikmati kemewahan hunian di atas bukit dengan view langsung ke Samudra Hindia. Lokasi paling prestisius.</p>
<a class="inline-flex items-center gap-2 text-primary font-extrabold hover:gap-4 transition-all" href="#">
                        Pelajari Detail Proyek
                        <span class="material-symbols-outlined">arrow_right_alt</span>
</a>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-white rounded-[32px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-slate-100">
<div class="h-72 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" data-alt="flat land development near a beach" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdUbkXlLTKlXVlr5x6ntxK6izSUpiXKAOVPKUkAvRt-NGolqzIjzo8OqExgU2qtWczMxmhPUgG42vlOGgzMgoiCaJTkVYBTlcrLZhF4QJCDekB3jxMg7na3XuvVpG5vRr0U12FmynjdI-pqH5zkfyzfyyWY4cMk3oEGJ6E5whqSDROksF6-0Eae38bhfvPMQnwB_FgIWNFSQAV4ndoFaXwAn8s_MBPbSREKoAQDMnSL2hfny8jSvSgIRlXzUwv5-qHuR5D77JvSQI"/>
<div class="absolute top-6 left-6">
<span class="bg-secondary text-white text-[10px] font-bold px-4 py-1.5 rounded-full uppercase tracking-widest">Investment Opportunity</span>
</div>
</div>
<div class="p-10">
<span class="text-primary font-bold text-[10px] tracking-[0.2em] uppercase">MANDALIKA DISTRICT</span>
<h3 class="text-3xl font-extrabold mt-2 mb-4">Mandalika Central</h3>
<p class="text-on-surface-variant text-base leading-relaxed mb-8 line-clamp-2">Investasi terbaik di jantung kawasan ekonomi khusus. Berjarak langkah kaki dari sirkuit internasional.</p>
<a class="inline-flex items-center gap-2 text-primary font-extrabold hover:gap-4 transition-all" href="#">
                        Pelajari Detail Proyek
                        <span class="material-symbols-outlined">arrow_right_alt</span>
</a>
</div>
</div>
</div>
</section>
</main>
<!-- Footer (Identical to Landing) -->
<footer class="bg-emerald-950 text-white py-20 px-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-16 max-w-7xl mx-auto">
<div class="space-y-8">
<div class="text-3xl font-black tracking-tighter text-white">Hanifa Bahagia Sentosa</div>
<p class="text-emerald-200/60 leading-relaxed max-w-sm">
                The Digital Sanctuary for your property investments. Creating sustainable and high-value communities in the heart of Lombok.
            </p>
<div class="flex gap-4">
<div class="w-12 h-12 rounded-2xl border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all cursor-pointer group">
<span class="material-symbols-outlined text-emerald-200/60 group-hover:text-white transition-colors">public</span>
</div>
<div class="w-12 h-12 rounded-2xl border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all cursor-pointer group">
<span class="material-symbols-outlined text-emerald-200/60 group-hover:text-white transition-colors">mail</span>
</div>
<div class="w-12 h-12 rounded-2xl border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all cursor-pointer group">
<span class="material-symbols-outlined text-emerald-200/60 group-hover:text-white transition-colors">share</span>
</div>
</div>
</div>
<div class="space-y-8">
<h4 class="font-bold text-emerald-500 uppercase tracking-[0.2em] text-sm">Navigasi</h4>
<ul class="space-y-4">
<li><a class="text-emerald-200/60 hover:text-white transition-colors flex items-center gap-2 group" href="#"><span class="w-0 group-hover:w-4 h-0.5 bg-primary transition-all"></span> Beranda</a></li>
<li><a class="text-emerald-200/60 hover:text-white transition-colors flex items-center gap-2 group" href="#"><span class="w-0 group-hover:w-4 h-0.5 bg-primary transition-all"></span> Tentang Kami</a></li>
<li><a class="text-emerald-200/60 hover:text-white transition-colors flex items-center gap-2 group" href="#"><span class="w-0 group-hover:w-4 h-0.5 bg-primary transition-all"></span> Proyek Kami</a></li>
<li><a class="text-emerald-200/60 hover:text-white transition-colors flex items-center gap-2 group" href="#"><span class="w-0 group-hover:w-4 h-0.5 bg-primary transition-all"></span> Galeri Proyek</a></li>
</ul>
</div>
<div class="space-y-8">
<h4 class="font-bold text-emerald-500 uppercase tracking-[0.2em] text-sm">Bantuan &amp; Legal</h4>
<ul class="space-y-4">
<li><a class="text-emerald-200/60 hover:text-white transition-colors" href="#">Kebijakan Privasi</a></li>
<li><a class="text-emerald-200/60 hover:text-white transition-colors" href="#">Syarat &amp; Ketentuan</a></li>
<li><a class="text-emerald-200/60 hover:text-white transition-colors" href="#">Pusat Bantuan</a></li>
<li class="pt-6">
<p class="text-[10px] text-emerald-200/40 uppercase font-black tracking-widest mb-2">Lokasi Kantor Utama</p>
<p class="text-sm text-emerald-200/60 leading-relaxed">Jl. Raya Praya - Kuta, Lombok Tengah, NTB, Indonesia 83573</p>
</li>
</ul>
</div>
</div>
<div class="max-w-7xl mx-auto mt-24 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-emerald-200/40 text-xs">
<p>© 2024 PT Hanifa Bahagia Sentosa. The Digital Sanctuary.</p>
<div class="flex gap-12 font-medium">
<span class="hover:text-emerald-200 transition-colors cursor-default">Designed with Precision</span>
<span class="hover:text-emerald-200 transition-colors cursor-default">Security Verified</span>
</div>
</div>
</footer>
<!-- WhatsApp FAB -->
<a class="fixed bottom-10 right-10 z-[60] w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center shadow-2xl hover:scale-110 active:scale-95 transition-all group" href="#">
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">chat</span>
<span class="absolute right-full mr-6 bg-white text-on-surface px-5 py-3 rounded-2xl text-sm font-bold shadow-2xl opacity-0 group-hover:opacity-100 transition-all transform translate-x-4 group-hover:translate-x-0 whitespace-nowrap pointer-events-none border border-slate-100">Hubungi Marketing Sekarang</span>
</a>
</body></html>