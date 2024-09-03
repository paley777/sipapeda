<nav class="text-gray-700 body-font mb-6" aria-label="Breadcrumb">
    <ol class="flex leading-none">
        <li>
            <a href="/dashboard"
                class="{{ request()->is('dashboard') ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }} py-1 px-3 rounded-full hover:bg-indigo-700 transition-colors duration-150 ease-in-out mr-1">
                /dashboard
            </a>

            <a href="/dashboard/perda"
                class="{{ request()->is('dashboard/perda') ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }} py-1 px-3 rounded-full hover:bg-indigo-700 transition-colors duration-150 ease-in-out mr-1">
                /perda
            </a>
            <a href="/dashboard/pergub"
                class="{{ request()->is('dashboard/pergub') ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }} py-1 px-3 rounded-full hover:bg-indigo-700 transition-colors duration-150 ease-in-out mr-1">
                /pergub
            </a>
            <a href="/dashboard/pelanggar"
                class="{{ request()->is('dashboard/pelanggar') ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }} py-1 px-3 rounded-full hover:bg-indigo-700 transition-colors duration-150 ease-in-out mr-1">
                /pelanggar
            </a>
            <a href="/dashboard/pelaporan"
                class="{{ request()->is('dashboard/pelaporan') ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }} py-1 px-3 rounded-full hover:bg-indigo-700 transition-colors duration-150 ease-in-out mr-1">
                /pelaporan
            </a>
            <a href="/dashboard/struktur"
                class="{{ request()->is('dashboard/struktur') ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }} py-1 px-3 rounded-full hover:bg-indigo-700 transition-colors duration-150 ease-in-out mr-1">
                /struktur
            </a>
        </li>
    </ol>
</nav>
