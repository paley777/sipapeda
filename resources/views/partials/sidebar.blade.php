<aside class="w-64 bg-blue-600 text-white flex flex-col">
    <div class="p-4 text-center">
        <img src="{{ asset('images/logo.png') }}" alt="SIPAPEDA Logo" class="mx-auto mb-2" style="max-height: 50px;">
        <!-- Logo added here -->
        <h1 class="text-2xl font-bold">SIPAPEDA V1.0</h1>
    </div>
    <nav class="flex-grow">
        <ul>
            <li class="p-4 hover:bg-blue-700 {{ request()->is('dashboard') ? 'bg-blue-700' : '' }}">
                <a href="/dashboard" class="flex items-center">
                    <i class="fi fi-rr-home mr-3"></i>Dashboard
                </a>
            </li>
            <li class="p-4 hover:bg-blue-700">
                <span class="font-bold">Manajemen Data</span>
                <ul class="ml-4 mt-2">
                    <li class="p-2 hover:bg-blue-600 {{ request()->is('dashboard/perda') ? 'bg-blue-700' : '' }}">
                        <a href="/dashboard/perda" class="flex items-center">
                            <i class="fi fi-rr-table mr-3"></i>
                            Peraturan Daerah
                        </a>
                    </li>
                    <li class="p-2 hover:bg-blue-600 {{ request()->is('dashboard/pergub') ? 'bg-blue-700' : '' }}">
                        <a href="/dashboard/pergub" class="flex items-center">
                            <i class="fi fi-rr-table mr-3"></i>
                            Peraturan Gubernur
                        </a>
                    </li>
                    <li class="p-2 hover:bg-blue-600 {{ request()->is('dashboard/pelanggar') ? 'bg-blue-700' : '' }}">
                        <a href="/dashboard/pelanggar" class="flex items-center">
                            <i class="fi fi-rr-table mr-3"></i>
                            Pelanggar Perda
                        </a>
                    </li>
                    <li class="p-2 hover:bg-blue-600 {{ request()->is('dashboard/pelaporan') ? 'bg-blue-700' : '' }}">
                        <a href="/dashboard/pelaporan" class="flex items-center">
                            <i class="fi fi-rr-table mr-3"></i>
                            Pelaporan
                        </a>
                    </li>
                </ul>
            </li>
            <li class="p-4 hover:bg-blue-700 {{ request()->is('manajemen-berita') ? 'bg-blue-700' : '' }}">
                <a href="/manajemen-berita" class="flex items-center">
                    <i class="fi fi-rr-newspaper mr-3"></i>
                    Manajemen Berita
                </a>
            </li>
            <li class="p-4 hover:bg-blue-700 {{ request()->is('dashboard/struktur') ? 'bg-blue-700' : '' }}">
                <a href="/dashboard/struktur" class="flex items-center">
                    <i class="fi fi-rr-department-structure mr-3"></i>
                    Manajemen Struktur Organisasi
                </a>
            </li>
            <li class="p-4 hover:bg-blue-700 {{ request()->is('profil') ? 'bg-blue-700' : '' }}">
                <a href="/profil-anda" class="flex items-center">
                    <i class="fi fi-rr-circle-user mr-3"></i>
                    Profil Anda
                </a>
            </li>
        </ul>
    </nav>
    <div class="p-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                <i class="fi fi-rr-sign-out-alt mr-3"></i>Logout
            </button>
        </form>
    </div>
</aside>
