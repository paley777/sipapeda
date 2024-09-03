@extends('layouts.dashboard')

@section('title', 'Dashboard | SIPAPEDA')

@section('content')
    <div class="flex-grow p-6" x-data="{ openModal: false, editModal: false }">
        @include('partials.breadcrumb')
        @include('partials.flash-message')
        <main>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-semibold text-gray-900">Manajemen Struktur Organisasi</h3>
                    <div>
                        <button @click="$store.modal.openModal = true"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-3 rounded-full mr-1">
                            Tambah Data
                        </button>
                    </div>
                </div>
                @include('partials.modals.struktur')
                <div class="overflow-x-auto">
                    <table id="strukturTable" class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    No</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Jabatan</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Nama</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    NIP</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($strukturs as $struktur)
                                <tr data-id="{{ $struktur->id }}" data-jabatan="{{ $struktur->jabatan }}"
                                    data-nama="{{ $struktur->nama }}" data-nip="{{ $struktur->nip }}">
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $struktur->jabatan }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $struktur->nama }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $struktur->nip }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 flex flex-col items-center space-y-2">
                                        <button onclick="openEditModal({{ json_encode($struktur) }})"
                                            class="edit-button bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded-full">
                                            Edit
                                        </button>
                                        <form action="{{ route('struktur.destroy', $struktur->id) }}" method="POST"
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
            $('#strukturTable').DataTable();

            $('#strukturTable').on('click', '.edit-button', function() {
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
                editStruktur: {},
                openEditModal(struktur) {
                    this.editStruktur = struktur;
                    this.editModal = true;
                }
            });
        });
    </script>
    <script>
        function openEditModal(strukturData) {
            Alpine.store('modal').editStruktur = strukturData;
            Alpine.store('modal').editModal = true;
        }
    </script>
@endsection
