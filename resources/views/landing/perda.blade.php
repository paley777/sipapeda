@extends('layouts.landing')

@section('title', 'Peraturan Daerah | SIPAPEDA')

@section('content')
    <section class="bg-gray-100 py-10 px-4 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Daftar Peraturan Daerah</h2>
            <p class="text-lg text-gray-800 mt-2 mb-4">Telusuri Daftar Peraturan Daerah Provinsi Bengkulu di sini.</p>
        </div>
        <div class="overflow-x-auto">
            <table id="perdaTable" class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            No</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Produk Hukum</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Sanksi</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Leading Sector</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Unduh Berkas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perdas as $perda)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $perda->produk_hukum }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $perda->sanksi }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $perda->ls }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"><a
                                    href="{{ url('perda_files/' . $perda->file) }}" target="_blank"
                                    class="text-indigo-600 hover:text-indigo-900">Download</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#perdaTable').DataTable();
        });
    </script>
@endsection
