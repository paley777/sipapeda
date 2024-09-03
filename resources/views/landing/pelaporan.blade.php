@extends('layouts.landing')

@section('title', 'Pelaporan | SIPAPEDA')

@section('content')
    <section class="bg-gray-100 py-10 px-4 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Daftar Pelaporan</h2>
            <p class="text-lg text-gray-800 mt-2 mb-4">Telusuri Daftar Pelaporan dari SATPOL PP Provinsi Bengkulu di sini.
            </p>
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
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $pelaporan->keterangan }}
                            </td>
                            <td>
                                <button
                                    onclick="printPelaporanData({{ $pelaporan->id }}, '{{ $pelaporan->lembaga }}', '{{ $pelaporan->nama }}', '{{ $pelaporan->alamat }}', '{{ $pelaporan->keterangan }}')"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                    Cetak
                                </button>
                            </td>
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
    <script>
        function printPelaporanData(id, lembaga, nama, alamat, keterangan) {
            var printWindow = window.open('', '_blank');
            var printContents = `
            <html>
            <head>
                <title>Print Laporan</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 40px;
                    }
                    h1, h2, h3 {
                        text-align: center;
                        margin: 0;
                    }
                    .header {
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    .pelaporan-data {
                        margin-bottom: 40px;
                    }
                    .pelaporan-data p {
                        margin: 5px 0;
                    }
                </style>
            </head>
            <body>
                <div class="header">
                    <h1>SATPOL PP PROVINSI BENGKULU</h1>
                    <h2>Pelaporan</h2>
                </div>
                <div class="pelaporan-data">
                    <p><strong>ID:</strong> ${id}</p>
                    <p><strong>Lembaga:</strong> ${lembaga}</p>
                    <p><strong>Nama:</strong> ${nama}</p>
                    <p><strong>Alamat:</strong> ${alamat}</p>
                    <p><strong>Keterangan:</strong> ${keterangan}</p>
                </div>
            </body>
            </html>
            `;

            printWindow.document.write(printContents);
            printWindow.document.close(); // Necessary for some browsers to trigger the print window
            printWindow.focus(); // Focus on the new window before printing
            printWindow.print(); // Call the print dialog
            printWindow.close(); // Close the window after printing
        }
    </script>

@endsection
