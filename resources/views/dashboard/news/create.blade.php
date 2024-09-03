@extends('layouts.dashboard')

@section('title', 'Dashboard | SIPAPEDA')

@section('content')
    <div class="flex-grow p-6">
        @include('partials.breadcrumb')
        @include('partials.flash-message')
        <main>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-semibold text-gray-900">Manajemen Berita</h3>
                </div>
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="mb-4">
                        <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                        <input type="text" name="judul" id="judul"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="kreator" class="block text-gray-700 text-sm font-bold mb-2">Kreator</label>
                        <input type="text" name="kreator" id="kreator"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="konten" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
                        <textarea name="konten" id="konten" rows="4"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="thumbnail" class="block text-gray-700 text-sm font-bold mb-2">Thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail" accept="image/*"
                            class="block w-full text-sm text-gray-700 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#konten'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
