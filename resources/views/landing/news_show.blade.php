@extends('layouts.landing')

@section('title', 'Detail Berita | SIPAPEDA')

@section('content')
    <section class="py-10 px-4 md:px-12 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-gray-800">{{ $news->judul }}</h2>
            <p class="text-sm italic text-gray-500 mb-2">
                Dirilis pada: {{ $news->created_at->translatedFormat('d M Y H:i:s') }} WIB |
                {{ $news->created_at->diffForHumans() }} | Oleh: <span
                    class="bg-green-100 text-green-800 font-semibold px-2 py-1 rounded-full">{{ $news->kreator }}</span>
            </p>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ url('news_files/' . $news->thumbnail) }}" alt="{{ $news->judul }}"
                    class="w-full h-auto object-cover rounded-lg mb-6">
                <div class="text-gray-700 text-lg">
                    {!! $news->konten !!}
                </div>
            </div>
            <a href="/berita" class="text-blue-700 hover:underline mt-4 block">Back to News List</a>
        </div>
    </section>
@endsection
