@extends('layouts.landing')

@section('title', 'Pelaporan | SIPAPEDA')

@section('content')
    <section class="bg-gray-100 py-10 px-4 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Daftar Pelaporan</h2>
            <p class="text-lg text-gray-800 mt-2 mb-4">Telusuri Daftar Pelaporan dari SATPOL PP Provinsi Bengkulu di sini.</p>
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
                            Lembaga</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Nama</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Alamat</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Keterangan</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Cetak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelaporans as $pelaporan)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $pelaporan->lembaga }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{ $pelaporan->nama }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $pelaporan->alamat }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $pelaporan->keterangan }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">Cetak</td>
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
