@extends('layouts.landing')

@section('title', 'Beranda | SIPAPEDA')

@section('content')
    <div class="relative w-full overflow-hidden">
        <!-- Teks di Tengah Carousel -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white z-10 pointer-events-none">
            <h1 class="text-2xl md:text-4xl font-bold">Selamat Datang di SIPAPEDA</h1>
            <p class="text-md md:text-lg mt-2">Sistem Informasi Penegakan Peraturan Daerah</p>
        </div>
        <!-- Slides -->
        <div class="carousel-inner flex transition-transform duration-500 ease-in-out" style="transform: translateX(0);">
            <div class="carousel-item w-full flex-shrink-0">
                <img src="{{ asset('images/carousel1.jpg') }}" class="w-full h-[250px] md:h-[490px] object-cover"
                    alt="Slide 1">
            </div>
            <div class="carousel-item w-full flex-shrink-0">
                <img src="{{ asset('images/carousel1.jpg') }}" class="w-full h-[250px] md:h-[490px] object-cover"
                    alt="Slide 2">
            </div>
            <div class="carousel-item w-full flex-shrink-0">
                <img src="{{ asset('images/carousel1.jpg') }}" class="w-full h-[250px] md:h-[490px] object-cover"
                    alt="Slide 3">
            </div>
        </div>
        <!-- Controls -->
        <button
            class="absolute top-1/2 left-0 transform -translate-y-1/2 px-4 py-2 text-white bg-black bg-opacity-50 hover:bg-opacity-75 z-20"
            onclick="prevSlide()">&#10094;</button>
        <button
            class="absolute top-1/2 right-0 transform -translate-y-1/2 px-4 py-2 text-white bg-black bg-opacity-50 hover:bg-opacity-75 z-20"
            onclick="nextSlide()">&#10095;</button>
    </div>
    <section class="bg-gray-100 py-10 px-4 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Berita Terbaru</h2>
            <p class="text-lg text-gray-800 mt-2">Berita dan informasi terkini tentang penegakan peraturan daerah</p>
        </div>
        <div class="container mx-auto mt-8">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 {{ count($latestNews) >= 4 ? 'lg:grid-cols-4' : 'lg:grid-cols-' . count($latestNews) }} gap-3 justify-items-center">
                @foreach ($latestNews as $news)
                    <a href="/berita/{{ $news->slug }}"
                        class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 relative group"
                        style="height: 250px;">
                        <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-300 group-hover:brightness-50"
                            style="background-image: url('{{ url('news_files/' . $news->thumbnail) }}'); transition: filter 0.5s ease;">
                        </div>
                        <div class="relative z-10 p-4 h-full flex flex-col justify-end">
                            <span
                                class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-semibold py-1 px-2 rounded-lg">{{ $news->created_at->diffForHumans() }}</span>
                            <h3 class="text-xl font-bold text-white mb-2">{{ $news->judul }}</h3>
                            <p class="text-white">{{ $news->created_at->translatedFormat('l, d F Y') }}</p>
                            <span
                                class="block absolute bottom-0 left-0 w-full h-2 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-16 px-4 md:px-12 shadow-lg">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Jelajahi Fitur Utama SIPAPEDA</h2>
            <p class="text-lg text-gray-800 mt-2">Klik menu di bawah ini</p>
            <!-- Grid Menu (4 items in a row) -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mx-auto">
                <a href="/perda"
                    class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-6 rounded-lg shadow-lg hover:from-blue-600 hover:to-indigo-600 transition-all duration-300 transform hover:scale-105 flex flex-col items-center">
                    <div class="mb-0">
                        <!-- Replace with actual icon -->
                        <i class="fi fi-sr-book-bookmark" style="font-size: 3em;"></i>

                    </div>
                    <h3 class="text-lg font-semibold mb-2">Daftar Perda</h3>
                    <p class="text-center mb-4">Telusuri daftar peraturan daerah terbaru dan yang berlaku.
                    </p>
                    <span class="text-sm font-medium underline">Lihat Selengkapnya</span>
                </a>
                <a href="/pergub"
                    class="bg-gradient-to-r from-green-500 to-teal-500 text-white p-6 rounded-lg shadow-lg hover:from-green-600 hover:to-teal-600 transition-all duration-300 transform hover:scale-105 flex flex-col items-center">
                    <div class="mb-0">
                        <!-- Replace with actual icon -->
                        <i class="fi fi-sr-book-bookmark" style="font-size: 3em;"></i>

                    </div>
                    <h3 class="text-lg font-semibold mb-2">Daftar Pergub</h3>
                    <p class="text-center mb-4">Jelajahi daftar peraturan gubernur yang terbaru dan berlaku.</p>
                    <span class="text-sm font-medium underline">Lihat Selengkapnya</span>
                </a>
                <a href="/berita"
                    class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-6 rounded-lg shadow-lg hover:from-purple-600 hover:to-pink-600 transition-all duration-300 transform hover:scale-105 flex flex-col items-center">
                    <div class="mb-0">
                        <!-- Replace with actual icon -->
                        <i class="fi fi-sr-newspaper" style="font-size: 3em;"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Berita</h3>
                    <p class="text-center mb-4">Dapatkan berita terbaru dan update dari SATPOL PP Provinsi Bengkulu.
                    </p>
                    <span class="text-sm font-medium underline">Baca Selengkapnya</span>
                </a>
                <a href="/pelaporan"
                    class="bg-gradient-to-r from-red-500 to-orange-500 text-white p-6 rounded-lg shadow-lg hover:from-red-600 hover:to-orange-600 transition-all duration-300 transform hover:scale-105 flex flex-col items-center">
                    <div class="mb-0">
                        <!-- Replace with actual icon -->
                        <i class="fi fi-sr-memo-circle-check" style="font-size: 3em;"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Pelaporan</h3>
                    <p class="text-center mb-4">Jelajahi pelanggaran secara mudah dan
                        cepat.</p>
                    <span class="text-sm font-medium underline">Lihat Selengkapnya</span>
                </a>
            </div>


            <!-- Hero Section for "Tentang Kami" -->
            <a href="/tentang"
                class="block mt-16 bg-blue-500 text-white rounded-lg overflow-hidden relative group shadow-lg"
                style="height: 300px;">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 ease-in-out group-hover:scale-110"
                    style="background-image: url('{{ asset('images/carousel1.jpg') }}');">
                </div>
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                <div class="relative z-10 p-10 h-full flex flex-col justify-center">
                    <h3 class="text-4xl font-bold mb-4 relative inline-block">Tentang Kami</h3>
                    <p class="text-lg relative">Pelajari lebih lanjut tentang misi, visi, dan nilai-nilai kami di SIPAPEDA.
                        Kami
                        berkomitmen untuk meningkatkan pelayanan publik melalui informasi yang transparan dan mudah diakses.
                    </p>
                </div>
            </a>

        </div>
    </section>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;
        let slideInterval;

        function updateSlidePosition() {
            const carouselInner = document.querySelector('.carousel-inner');
            carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlidePosition();
            resetSlideInterval();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlidePosition();
            resetSlideInterval();
        }

        function resetSlideInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Auto-slide every 5 seconds
        slideInterval = setInterval(nextSlide, 5000);
    </script>
@endsection
