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
                    <div>
                        <a href="{{ route('berita.create') }}"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-3 rounded-full mr-1">Tambah
                            Berita</a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table id="newsTable" class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    No</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Thumbnail</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Judul</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Kreator</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Konten</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newses as $index => $news)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $index + 1 }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"><img
                                            src="{{ url('news_files/' . $news->thumbnail) }}" alt="Thumbnail"
                                            class="w-16 h-16 rounded"></td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $news->judul }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $news->kreator }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {!! Str::limit($news->konten, 100) !!}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <a href="{{ route('berita.edit', $news->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                                        <form action="{{ route('berita.destroy', $news->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?');" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <script>
        $(document).ready(function() {
            $('#newsTable').DataTable();
        });
    </script>
@endsection
