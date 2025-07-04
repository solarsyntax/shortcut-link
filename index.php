<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SolarSyntax | Shortcuts</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/tailwind-config.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Sora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="bg-light text-text font-sans transition duration-500 relative overflow-hidden">
    <!-- Background Wave -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden -z-10">
        <svg viewBox="0 0 1440 320" class="w-full h-48">
            <path fill="#dbeafe" fill-opacity="1"
                d="M0,160L30,170.7C60,181,120,203,180,208C240,213,300,203,360,192C420,181,480,171,540,165.3C600,160,660,160,720,181.3C780,203,840,245,900,250.7C960,256,1020,224,1080,197.3C1140,171,1200,149,1260,154.7C1320,160,1380,192,1410,208L1440,224L1440,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="flex flex-col lg:flex-row min-h-screen">
        <!-- Sidebar -->
        <aside class="w-full lg:w-64 bg-white border-b lg:border-b-0 lg:border-r border-soft/40 p-6 space-y-4">
            <div class="text-2xl font-display font-bold">☀️ SolarSyntax</div>
            <nav class="space-y-2">
                <a href="#" class="block px-4 py-2 rounded-lg text-sm font-medium text-primary bg-soft">🏠 Home</a>
                <a href="#barang" class="block px-4 py-2 rounded-lg text-sm font-medium text-muted hover:bg-soft">📦 Barang</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Clock -->
            <div class="fixed top-4 right-4 z-50 bg-white/60 px-4 py-2 rounded-full text-sm text-black shadow-md">
                <span id="clock">00:00:00</span>
                <span class="ml-2 text-muted">Malang, Jawa Timur</span>
            </div>

            <!-- Header -->
            <header class="text-center py-14 px-4">
                <img src="https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/4b021e0984334189a6e6e5a84d9807e3~tplv-tiktokx-cropcenter:1080:1080.jpeg?dr=14579&refresh_token=74fcdf80&x-expires=1751367600&x-signature=W0T7ZNVHIPAilpOU%2BANUYTo93Ng%3D&t=4d5b0474&ps=13740610&shp=a5d48078&shcp=81f88b70&idc=my" alt="profile" class="w-20 h-20 rounded-full mx-auto border-4 border-white shadow-md">
                <h1 class="mt-6 text-4xl sm:text-5xl font-display font-bold tracking-tight">SolarSyntax Shortcuts</h1>
                <p class="mt-2 text-muted text-sm">Kumpulan tautan penting saya dalam satu halaman</p>
            </header>

            <!-- Shortcut Cards -->
            <main class="relative isolate grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 sm:px-6 pb-20 max-w-6xl mx-auto">
                <!-- YouTube -->
                <div class="rounded-2xl p-6 bg-gradient-to-br from-purple-100 via-white to-pink-100 text-gray-800 shadow-lg ring-1 ring-white/50 backdrop-blur-md hover:scale-105 hover:shadow-xl transition duration-300">
                    <h2 class="text-lg font-semibold">🎥 YouTube</h2>
                    <p class="text-sm mt-1 mb-3">Konten video edukasi & project saya.</p>
                    <a href="https://youtube.com" target="_blank" class="inline-block text-xs font-medium px-3 py-1 rounded-full bg-purple-200 text-purple-900 hover:bg-purple-300 transition">Lihat Channel →</a>
                </div>

                <!-- Instagram -->
                <div class="rounded-2xl p-6 bg-gradient-to-br from-yellow-100 via-white to-orange-100 text-gray-800 shadow-lg ring-1 ring-white/50 backdrop-blur-md hover:scale-105 hover:shadow-xl transition duration-300">
                    <h2 class="text-lg font-semibold">📸 Instagram</h2>
                    <p class="text-sm mt-1 mb-3">Foto behind the scenes & keseharian saya.</p>
                    <a href="https://instagram.com" target="_blank" class="inline-block text-xs font-medium px-3 py-1 rounded-full bg-yellow-200 text-yellow-900 hover:bg-yellow-300 transition">Lihat Profil →</a>
                </div>

                <!-- GitHub -->
                <div class="rounded-2xl p-6 bg-gradient-to-br from-indigo-100 via-white to-blue-100 text-gray-800 shadow-lg ring-1 ring-white/50 backdrop-blur-md hover:scale-105 hover:shadow-xl transition duration-300">
                    <h2 class="text-lg font-semibold">💻 GitHub</h2>
                    <p class="text-sm mt-1 mb-3">Open source & eksperimen pribadi saya.</p>
                    <a href="https://github.com/solarsyntax" target="_blank" class="inline-block text-xs font-medium px-3 py-1 rounded-full bg-indigo-200 text-indigo-900 hover:bg-indigo-300 transition">Lihat Repo →</a>
                </div>

                <!-- Email -->
                <div class="rounded-2xl p-6 bg-gradient-to-br from-pink-100 via-white to-red-100 text-gray-800 shadow-lg ring-1 ring-white/50 backdrop-blur-md hover:scale-105 hover:shadow-xl transition duration-300">
                    <h2 class="text-lg font-semibold">✉️ Email</h2>
                    <p class="text-sm mt-1 mb-3">Tertarik kerja sama atau ngobrol santai?</p>
                    <a href="mailto:kamu@email.com" class="inline-block text-xs font-medium px-3 py-1 rounded-full bg-pink-200 text-pink-900 hover:bg-pink-300 transition">Kirim Email →</a>
                </div>

                <!-- TikTok -->
                <div class="rounded-2xl p-6 bg-gradient-to-br from-green-100 via-white to-emerald-100 text-gray-800 shadow-lg ring-1 ring-white/50 backdrop-blur-md hover:scale-105 hover:shadow-xl transition duration-300">
                    <h2 class="text-lg font-semibold">🎵 TikTok</h2>
                    <p class="text-sm mt-1 mb-3">Cuplikan video singkat dan tutorial cepat.</p>
                    <a href="https://www.tiktok.com/@solar.syntax" target="_blank" class="inline-block text-xs font-medium px-3 py-1 rounded-full bg-green-200 text-green-900 hover:bg-green-300 transition">Lihat TikTok →</a>
                </div>
            </main>

            <!-- Barang -->
            <section id="barang" class="px-4 sm:px-6 pb-20 max-w-6xl mx-auto">
                <h2 class="text-2xl font-display font-bold mb-6">📦 Barang</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-md p-4 border border-soft">
                        <a href="assets/img/keycaps/keycaps retro.jpeg" target="_blank">
                            <img src="assets/img/keycaps/keycaps retro.jpeg" alt="Keycaps Retro" class="w-full h-40 object-cover rounded-md mb-3 hover:opacity-90 transition">
                        </a>
                        <h3 class="text-lg font-semibold text-primary">Keycaps Retro YongQiu</h3>
                        <p class="text-sm text-muted mb-2">Keycaps retro dari YongQiu dengan desain colorful klasik dan nuansa nostalgia, cocok untuk pecinta vintage setup.</p>
                        <a href="https://s.shopee.co.id/4L7zm59COz" target="_blank" class="text-xs font-medium text-white bg-primary px-3 py-1 rounded-full hover:bg-secondary transition">🔗 Link Pembelian di Shopee</a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>

</html>