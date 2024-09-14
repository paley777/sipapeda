@extends('layouts.landing')

@section('title', $news->judul . ' | SIPAPEDA')

@section('content')
    <section class="py-10 px-4 md:px-12 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-gray-800">{{ $news->judul }}</h2>
            <p class="text-sm italic text-gray-500 mb-2">
                Dirilis pada: {{ $news->created_at->translatedFormat('d M Y H:i:s') }} WIB |
                {{ $news->created_at->diffForHumans() }} | Oleh: <span
                    class="bg-green-100 text-green-800 font-semibold px-2 py-1 rounded-full">{{ $news->kreator }}</span>
            </p>
            <div class="bg-white p-6 rounded-lg shadow-lg relative group">
                <!-- Thumbnail Image with Hover Effect -->
                <div class="relative">
                    <img id="thumbnail" src="{{ url('news_files/' . $news->thumbnail) }}" alt="{{ $news->judul }}"
                        class="w-full h-auto object-cover rounded-lg mb-6 max-h-[500px] cursor-pointer group-hover:opacity-75 transition duration-300 ease-in-out">
                    <!-- Overlay with Text -->
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out pointer-events-none">
                        <span class="text-white text-lg font-semibold">Klik untuk memperbesar</span>
                    </div>
                </div>
                <div class="text-gray-700 text-lg">
                    {!! $news->konten !!}
                </div>
            </div>
            <a href="/berita" class="text-blue-700 hover:underline mt-4 block">Back to News List</a>
        </div>
    </section>

    <!-- Modal Section -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center">
        <div class="relative">
            <!-- Close Button -->
            <button id="closeModal"
                class="absolute top-4 right-4 text-white text-5xl font-bold bg-black bg-opacity-50 rounded-full p-3 hover:bg-opacity-80 transition duration-300 ease-in-out">
                &times;
            </button>
            <!-- Modal Image -->
            <img id="modalImage" src="{{ url('news_files/' . $news->thumbnail) }}" alt="{{ $news->judul }}"
                class="max-w-full max-h-full w-auto h-auto object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // When the thumbnail image is clicked
            $('#thumbnail').on('click', function() {
                var imgSrc = $(this).attr('src'); // Get the source of the clicked thumbnail
                $('#modalImage').attr('src', imgSrc); // Set the modal image to the clicked image source
                $('#imageModal').removeClass('hidden'); // Show the modal by removing the 'hidden' class
            });

            // When the close button is clicked
            $('#closeModal').on('click', function() {
                $('#imageModal').addClass('hidden'); // Hide the modal by adding the 'hidden' class
            });

            // When clicking outside the modal content, close the modal
            $('#imageModal').on('click', function(event) {
                if (event.target === this) {
                    $('#imageModal').addClass('hidden'); // Hide the modal
                }
            });
        });
    </script>
@endsection
