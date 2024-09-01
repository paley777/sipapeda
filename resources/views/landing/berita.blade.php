@extends('layouts.landing')

@section('title', 'Berita | SIPAPEDA')

@section('content')
    <section class="bg-gray-100 py-10 px-4 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Berita</h2>
            <p class="text-lg text-gray-800 mt-2 mb-4">Telusuri Berita Terkini di Sini.</p>
        </div>
        <div class="overflow-x-auto">
            <table id="beritaTable" class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            No</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Berita</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($newses as $news)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $loop->iteration }}</td>
                            <td>
                                <a href="/berita/{{ $news->slug }}"
                                    class="bg-gray-100 p-6  hover:bg-gray-200 transition-all duration-100 transform  flex flex-row items-center">

                                    <!-- Thumbnail di sebelah kiri -->
                                    <div class="mr-6">
                                        <img src="{{ asset('images/carousel1.jpg') }}" alt="{{ $news->judul }}"
                                            class="w-70 h-40 object-cover rounded-lg">
                                    </div>

                                    <!-- Konten di sebelah kanan -->
                                    <div class="flex flex-col">
                                        <h3 class="text-lg font-semibold mb-2 text-blue-700 underline">{{ $news->judul }}
                                        </h3>
                                        <p class="text-sm italic text-gray-500 mb-2">
                                            Dirilis pada: {{ $news->created_at->translatedFormat('d M Y H:i:s') }} WIB |
                                            {{ $news->created_at->diffForHumans() }}
                                        </p>
                                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($news->konten), 250) }}</p>
                                        <div class="text-sm text-gray-500">
                                            Oleh: <span
                                                class="bg-green-100 text-green-800 font-semibold px-2 py-1 rounded-full">{{ $news->kreator }}</span>
                                        </div>

                                        <span class="text-sm font-medium underline mt-2">Baca Selengkapnya</span>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#beritaTable').DataTable();
        });
    </script>
@endsection
