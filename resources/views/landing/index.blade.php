@extends('layouts.landing')

@section('title', 'Beranda | SIPAPEDA')

@section('content')
    <div class="relative w-full overflow-hidden">
        <!-- Teks di Tengah Carousel -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white z-10 pointer-events-none">
            <h1 class="text-4xl font-bold">Selamat Datang di SIPAPEDA</h1>
            <p class="text-lg mt-2">Sistem Informasi Penegakan Peraturan Daerah</p>
        </div>

        <!-- Slides -->
        <div class="carousel-inner flex transition-transform duration-500 ease-in-out" style="transform: translateX(0);">
            <div class="carousel-item w-full flex-shrink-0">
                <img src="https://via.placeholder.com/1200x600?text=Slide+1" class="w-full object-cover" style="height: 490px"
                    alt="Slide 1">
            </div>
            <div class="carousel-item w-full flex-shrink-0">
                <img src="https://via.placeholder.com/1200x600?text=Slide+2" class="w-full object-cover"
                    style="height: 490px" alt="Slide 2">
            </div>
            <div class="carousel-item w-full flex-shrink-0">
                <img src="https://via.placeholder.com/1200x600?text=Slide+3" class="w-full object-cover"
                    style="height: 490px" alt="Slide 3">
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
    <section class="bg-white py-16 px-4 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Jelajahi Fitur Utama SIPAPEDA</h2>
            <p class="text-lg text-gray-800 mt-2">Klik menu di bawah ini</p>
        </div>
        <div class="container mx-auto mt-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Header Card -->
                    <div class="bg-blue-600 p-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm0 10c2.485 0 4.5-2.015 4.5-4.5S14.485 9 12 9s-4.5 2.015-4.5 4.5S9.515 18 12 18zM10 3h4v2h-4V3zM4.27 4.27l1.41 1.41-1.41 1.41L2.86 5.68l1.41-1.41zM18.32 4.27l1.41 1.41-1.41 1.41-1.41-1.41 1.41-1.41zM12 21h0M10 21v1m4-1v1m-8-4.22v-.78l1.06 1.06L7.22 18H6zm11.78 0l-.94-.94 1.06-1.06v.78z" />
                            </svg>
                            <h3 class="text-white text-lg font-semibold ml-3">Fitur Utama</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Jelajahi Fitur SIPAPEDA</h2>
                        <p class="text-gray-700 mb-4">Sistem Informasi Penegakan Peraturan Daerah (SIPAPEDA) menyediakan
                            fitur-fitur
                            unggulan yang memudahkan pengelolaan dan penegakan peraturan daerah. Temukan lebih banyak fitur
                            yang
                            dapat membantu Anda dalam tata kelola yang lebih baik.</p>
                    </div>
                    <!-- Footer Card -->
                    <div class="bg-gray-100 p-4">
                        <a href="#"
                            class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Pelajari
                            Selengkapnya</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-blue-600 p-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm0 10c2.485 0 4.5-2.015 4.5-4.5S14.485 9 12 9s-4.5 2.015-4.5 4.5S9.515 18 12 18zM10 3h4v2h-4V3zM4.27 4.27l1.41 1.41-1.41 1.41L2.86 5.68l1.41-1.41zM18.32 4.27l1.41 1.41-1.41 1.41-1.41-1.41 1.41-1.41zM12 21h0M10 21v1m4-1v1m-8-4.22v-.78l1.06 1.06L7.22 18H6zm11.78 0l-.94-.94 1.06-1.06v.78z" />
                            </svg>
                            <h3 class="text-white text-lg font-semibold ml-3">Fitur Utama</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Jelajahi Fitur SIPAPEDA</h2>
                        <p class="text-gray-700 mb-4">Sistem Informasi Penegakan Peraturan Daerah (SIPAPEDA) menyediakan
                            fitur-fitur
                            unggulan yang memudahkan pengelolaan dan penegakan peraturan daerah. Temukan lebih banyak fitur
                            yang
                            dapat membantu Anda dalam tata kelola yang lebih baik.</p>
                    </div>
                    <div class="bg-gray-100 p-4">
                        <a href="#"
                            class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Pelajari
                            Selengkapnya</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-blue-600 p-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm0 10c2.485 0 4.5-2.015 4.5-4.5S14.485 9 12 9s-4.5 2.015-4.5 4.5S9.515 18 12 18zM10 3h4v2h-4V3zM4.27 4.27l1.41 1.41-1.41 1.41L2.86 5.68l1.41-1.41zM18.32 4.27l1.41 1.41-1.41 1.41-1.41-1.41 1.41-1.41z" />
                            </svg>
                            <h3 class="text-white text-lg font-semibold ml-3">Fitur Utama</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Jelajahi Fitur SIPAPEDA</h2>
                        <p class="text-gray-700 mb-4">Sistem Informasi Penegakan Peraturan Daerah (SIPAPEDA) menyediakan
                            fitur-fitur
                            unggulan yang memudahkan pengelolaan dan penegakan peraturan daerah. Temukan lebih banyak fitur
                            yang
                            dapat membantu Anda dalam tata kelola yang lebih baik.</p>
                    </div>
                    <div class="bg-gray-100 p-4">
                        <a href="#"
                            class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Pelajari
                            Selengkapnya</a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-blue-600 p-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.105 0-2 .895-2 2s.895 2 2 2 2-.895 2-2-.895-2-2-2zm0 10c2.485 0 4.5-2.015 4.5-4.5S14.485 9 12 9s-4.5 2.015-4.5 4.5S9.515 18 12 18zM10 3h4v2h-4V3zM4.27 4.27l1.41 1.41-1.41 1.41L2.86 5.68l1.41-1.41zM18.32 4.27l1.41 1.41-1.41 1.41-1.41-1.41 1.41-1.41z" />
                            </svg>
                            <h3 class="text-white text-lg font-semibold ml-3">Fitur Utama</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Jelajahi Fitur SIPAPEDA</h2>
                        <p class="text-gray-700 mb-4">Sistem Informasi Penegakan Peraturan Daerah (SIPAPEDA) menyediakan
                            fitur-fitur
                            unggulan yang memudahkan pengelolaan dan penegakan peraturan daerah. Temukan lebih banyak fitur
                            yang
                            dapat membantu Anda dalam tata kelola yang lebih baik.</p>
                    </div>
                    <div class="bg-gray-100 p-4">
                        <a href="#"
                            class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-300">Pelajari
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
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
