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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 justify-items-center">
                <a href="#"
                    class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 relative group"
                    style="height: 250px;">
                    <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-300 group-hover:brightness-50"
                        style="background-image: url('{{ asset('images/carousel1.jpg') }}'); transition: filter 0.5s ease;">
                    </div>
                    <div class="relative z-10 p-4 h-full flex flex-col justify-end">
                        <span
                            class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-semibold py-1 px-2 rounded-lg">2
                            hours ago</span>
                        <h3 class="text-xl font-bold text-white mb-2">Satpol PP Provinsi Bengkulu Meluncurkan SIPAPEDA</h3>
                        <p class="text-white">Selasa, 27 Agustus 2024</p>
                        <span
                            class="block absolute bottom-0 left-0 w-full h-2 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                    </div>
                </a>

                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 relative group"
                    style="height: 250px;">
                    <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-300 group-hover:brightness-50"
                        style="background-image: url('{{ asset('images/carousel1.jpg') }}'); transition: filter 0.5s ease;">
                    </div>
                    <div class="relative z-10 p-4 h-full flex flex-col justify-end">
                        <span
                            class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-semibold py-1 px-2 rounded-lg">2
                            hours ago</span>
                        <h3 class="text-xl font-bold text-white mb-2">Satpol PP Provinsi Bengkulu Meluncurkan SIPAPEDA</h3>
                        <p class="text-white">Selasa, 27 Agustus 2024</p>
                        <span
                            class="block absolute bottom-0 left-0 w-full h-2 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                    </div>
                </div>
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 relative group"
                    style="height: 250px;">
                    <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-300 group-hover:brightness-50"
                        style="background-image: url('{{ asset('images/carousel1.jpg') }}'); transition: filter 0.5s ease;">
                    </div>
                    <div class="relative z-10 p-4 h-full flex flex-col justify-end">
                        <span
                            class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-semibold py-1 px-2 rounded-lg">2
                            hours ago</span>
                        <h3 class="text-xl font-bold text-white mb-2">Satpol PP Provinsi Bengkulu Meluncurkan SIPAPEDA</h3>
                        <p class="text-white">Selasa, 27 Agustus 2024</p>
                        <span
                            class="block absolute bottom-0 left-0 w-full h-2 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                    </div>
                </div>
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 relative group"
                    style="height: 250px;">
                    <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-300 group-hover:brightness-50"
                        style="background-image: url('{{ asset('images/carousel1.jpg') }}'); transition: filter 0.5s ease;">
                    </div>
                    <div class="relative z-10 p-4 h-full flex flex-col justify-end">
                        <span
                            class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-semibold py-1 px-2 rounded-lg">2
                            hours ago</span>
                        <h3 class="text-xl font-bold text-white mb-2">Satpol PP Provinsi Bengkulu Meluncurkan SIPAPEDA</h3>
                        <p class="text-white">Selasa, 27 Agustus 2024</p>
                        <span
                            class="block absolute bottom-0 left-0 w-full h-2 bg-red-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-left"></span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="bg-white py-16 px-4 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Jelajahi Fitur Utama SIPAPEDA</h2>
            <p class="text-lg text-gray-800 mt-2">Klik menu di bawah ini</p>

            <!-- Grid Menu (4 items in a row) -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mx-auto">
                <a href="#daftar-perda"
                    class="bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 transition-colors duration-300">Daftar
                    Perda</a>
                <a href="#daftar-pergub"
                    class="bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 transition-colors duration-300">Daftar
                    Pergub</a>
                <a href="#berita"
                    class="bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 transition-colors duration-300">Berita</a>
                <a href="#pelaporan"
                    class="bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 transition-colors duration-300">Pelaporan</a>
            </div>
            <!-- Hero Section for "Tentang Kami" -->
            <a href="#tentang-kami" class="block mt-16 bg-blue-500 text-white rounded-lg overflow-hidden relative group" style="height: 300px;">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 ease-in-out group-hover:scale-110"
                    style="background-image: url('{{ asset('images/carousel1.jpg') }}');">
                </div>
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                <div class="relative z-10 p-10 h-full flex flex-col justify-center">
                    <h3 class="text-4xl font-bold mb-4 relative inline-block">Tentang Kami</h3>
                    <p class="text-lg relative">Pelajari lebih lanjut tentang misi, visi, dan nilai-nilai kami di SIPAPEDA. Kami
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
