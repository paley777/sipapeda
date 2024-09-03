@extends('layouts.dashboard')

@section('title', 'Edit News')

@section('content')
    <div class="flex-grow p-6">
        <h1 class="text-xl font-semibold">Edit News</h1>
        <form action="{{ route('berita.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="block text-sm font-bold text-gray-700">Title</label>
                <input type="text" name="judul" id="judul" value="{{ $news->judul }}"
                    class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="kreator" class="block text-sm font-bold text-gray-700">Kreator</label>
                <input type="text" name="kreator" id="kreator" value="{{ $news->kreator }}"
                    class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="konten" class="block text-sm font-bold text-gray-700">Content</label>
                <textarea name="konten" id="konten" rows="4" class="w-full px-3 py-2 border rounded">{{ $news->konten }}</textarea>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        ClassicEditor
                            .create(document.querySelector('#konten'))
                            .catch(error => {
                                console.error(error);
                            });
                    });
                </script>
            </div>
            <div class="mb-4">
                <label for="thumbnail" class="block text-sm font-bold text-gray-700">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="w-full">
                @if ($news->thumbnail)
                    <img src="{{ url('news_files/' . $news->thumbnail) }}" alt="Thumbnail"
                        class="mt-2 w-32 h-32 object-cover">
                @endif
            </div>
            <div class="mb-4">
                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Update</button>
            </div>
        </form>
    </div>
@endsection
