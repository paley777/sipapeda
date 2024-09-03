<div x-show="$store.modal.openModal" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" x-cloak class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title"
    role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <div
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-6">
            <div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Tambah Data Peraturan
                        Daerah</h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">Isi form berikut untuk menambahkan data baru.</p>
                    </div>
                </div>
                <form method="POST" action="/dashboard/perda" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">Produk Hukum</label>
                        <input type="text" name="produk_hukum" required
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">Sanksi</label>
                        <input type="text" name="sanksi"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">Leading Sector (LS)</label>
                        <input type="text" name="ls"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">File (optional - PDF, DOC, DOCX only)</label>
                        <input type="file" name="file" accept=".pdf, .doc, .docx"
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                        <p class="mt-1 text-sm text-gray-600">Allowed file types: PDF, DOC, DOCX.</p>
                    </div>
                    <div class="mt-5 sm:mt-6">
                        <button type="submit"
                            class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:text-sm">
                            Save
                        </button>
                        <button @click="$store.modal.openModal = false" type="button"
                            class="absolute top-0 right-0 mr-2 mt-2 rounded-md text-gray-400 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div x-show="$store.modal.editModal" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" class="fixed inset-0 z-30 overflow-y-auto" aria-labelledby="modal-title"
    role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <div
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-6">
            <form method="POST" x-ref="editForm" :action="'/dashboard/perda/' + $store.modal.editPerda.id"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Edit Data Peraturan Daerah</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500">Update the form below to modify the existing data.</p>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Produk Hukum</label>
                    <input type="text" name="produk_hukum" x-model="$store.modal.editPerda.produk_hukum" required
                        class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Sanksi</label>
                    <input type="text" name="sanksi" x-model="$store.modal.editPerda.sanksi"
                        class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">Leading Sector (LS)</label>
                    <input type="text" name="ls" x-model="$store.modal.editPerda.ls"
                        class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">File (optional - PDF, DOC, DOCX only)</label>
                    <input type="file" name="file" accept=".pdf, .doc, .docx"
                        class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    <p class="mt-1 text-sm text-gray-600">Allowed file types: PDF, DOC, DOCX.</p>
                </div>
                <div class="mt-5 sm:mt-6">
                    <button type="submit"
                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:text-sm">
                        Save
                    </button>
                    <button @click="$store.modal.editModal = false" type="button"
                        class="absolute top-0 right-0 mr-2 mt-2 rounded-md text-gray-400 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Import Modal -->
<div x-show="$store.modal.openImportModal" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" x-cloak class="fixed inset-0 z-40 overflow-y-auto"
    aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <div
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Import Data dari Excel
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">Pilih file Excel untuk mengimpor data.</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('perda.import') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">File Excel</label>
                        <input type="file" name="file" accept=".xls,.xlsx" required
                            class="mt-1 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                        <p class="mt-1 text-sm text-gray-600">File types allowed: .xls, .xlsx.</p>
                    </div>
                    <div class="mt-5 sm:mt-6">
                        <button type="submit"
                            class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm">
                            Import
                        </button>
                        <button @click="$store.modal.openImportModal = false" type="button"
                            class="absolute top-0 right-0 mr-2 mt-2 rounded-md text-gray-400 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
