@extends('layouts.dashboard')

@section('title', 'Dashboard | SIPAPEDA')

@section('content')
    <div class="flex-grow p-6" x-data="{ openModal: false, editModal: false }">
        @include('partials.breadcrumb')
        @include('partials.flash-message')
        <main>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-semibold text-gray-900">Manajemen Data Peraturan Gubernur</h3>
                    <div>
                        <button @click="$store.modal.openModal = true"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-3 rounded-full mr-1">
                            Tambah Data
                        </button>

                        <button @click="$store.modal.openImportModal = true"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded-full">
                            Import dari Excel
                        </button>
                    </div>
                </div>
                @include('partials.modals.pergub')
                <div class="overflow-x-auto">
                    <table id="pergubTable" class="min-w-full bg-white">
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
                                    Unduh Berkas</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pergubs as $pergub)
                                <tr data-id="{{ $pergub->id }}" data-produk_hukum="{{ $pergub->produk_hukum }}"
                                    data-sanksi="{{ $pergub->sanksi }}" data-file="{{ $pergub->file }}">
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $pergub->produk_hukum }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $pergub->sanksi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        @if ($pergub->file)
                                            <a href="{{ url('pergub_files/' . $pergub->file) }}" target="_blank"
                                                class="text-indigo-600 hover:text-indigo-900">Download</a>
                                        @else
                                            No file
                                        @endif
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 flex flex-col items-center space-y-2">
                                        <button onclick="openEditModal({{ json_encode($pergub) }})"
                                            class="edit-button bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded-full">
                                            Edit
                                        </button>
                                        <form action="{{ route('pergub.destroy', $pergub->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-full">
                                                Delete
                                            </button>
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
            $('#pergubTable').DataTable();

            $('#pergubTable').on('click', '.edit-button', function() {
                const rowData = $(this).closest('tr').data();
                openEditModal(rowData);
            });
        });
    </script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('modal', {
                openModal: false,
                editModal: false,
                openImportModal: false, // Properti untuk modal import
                editPerda: {},
                openEditModal(perda) {
                    this.editPerda = perda;
                    this.editModal = true;
                }
            });
        });
    </script>
    <script>
        function openEditModal(perdaData) {
            Alpine.store('modal').editPerda = perdaData;
            Alpine.store('modal').editModal = true;
        }
    </script>
@endsection
