<style>
    .active span {
        transform: scaleX(1);
    }
</style>
<nav class="sticky top-0 z-50 shadow-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700">
    <div class="container mx-auto px-4 md:px-12 py-3">
        <div class="flex justify-between items-center">
            <a href="/" class="flex items-center group">
                <img src="{{ asset('images/logo.png') }}" alt="SIPAPEDA Logo"
                    class="w-12 mr-2 transition-transform duration-300 ease-in-out group-hover:scale-110">
                <div class="flex flex-col leading-tight group">
                    <span class="text-2xl font-bold text-white relative inline-block">
                        SIPAPEDA
                        <span
                            class="absolute bottom-0 left-0 h-0.5 bg-gray-200 w-0 group-hover:w-32 transition-all duration-300 ease-in-out"></span>
                    </span>
                    <span class="text-sm text-white relative inline-block">
                        Sistem Informasi Penegakan Peraturan Daerah
                        <span
                            class="block absolute bottom-0 left-0 w-full h-0.5 bg-gray-200 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                    </span>
                </div>
            </a>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-white relative group {{ request()->is('/') ? 'active' : '' }}">
                    Beranda
                    <span
                        class="block absolute bottom-0 left-0 w-full h-0.5 bg-gray-200 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                </a>
                <a href="/perda" class="text-white relative group {{ request()->is('perda') ? 'active' : '' }}">
                    Daftar Perda
                    <span
                        class="block absolute bottom-0 left-0 w-full h-0.5 bg-gray-200 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                </a>
                <a href="/services" class="text-white relative group {{ request()->is('services') ? 'active' : '' }}">
                    Daftar Pergub
                    <span
                        class="block absolute bottom-0 left-0 w-full h-0.5 bg-gray-200 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                </a>
                <a href="/contact" class="text-white relative group {{ request()->is('contact') ? 'active' : '' }}">
                    Berita
                    <span
                        class="block absolute bottom-0 left-0 w-full h-0.5 bg-gray-200 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                </a>
                <a href="/pelaporan" class="text-white relative group {{ request()->is('pelaporan') ? 'active' : '' }}">
                    Pelaporan
                    <span
                        class="block absolute bottom-0 left-0 w-full h-0.5 bg-gray-200 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                </a>
                <a href="/about" class="text-white relative group {{ request()->is('about') ? 'active' : '' }}">
                    Tentang Kami
                    <span
                        class="block absolute bottom-0 left-0 w-full h-0.5 bg-gray-200 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                </a>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden mobile-menu md:hidden">
        <a href="/" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Beranda</a>
        <a href="/perda" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Daftar Perda</a>
        <a href="/services" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Daftar Pergub</a>
        <a href="/contact" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Berita</a>
        <a href="/contact" class="block py-2 px-4 text-sm text-white hover:bg-blue-600">Pelaporan</a>
    </div>
</nav>

<script>
    const btn = document.querySelector('button.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
