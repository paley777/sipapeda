@extends('layouts.dashboard')

@section('title', 'Dashboard | SIPAPEDA')

@section('content')
    <div class="flex-grow p-6">
        <nav class="text-gray-700 body-font mb-6" aria-label="Breadcrumb">
            <ol class="flex leading-none">
                <li>
                    <a href="/dashboard"
                        class="bg-indigo-600 text-white py-1 px-3 rounded-full hover:bg-indigo-700 transition-colors duration-150 ease-in-out">
                        /Dashboard
                    </a>
                </li>
            </ol>
        </nav>

        <main>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-4 text-gray-900">Selamat Datang di SIPAPEDA Dashboard,
                    {{ Auth::user()->name }}!
                </h3>
                <p class="text-gray-700 mb-6">This is your dashboard where you can manage the SIPAPEDA website.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Example Card 1 -->
                    <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h4 class="text-xl font-bold mb-2">Feature 1</h4>
                        <p>Manage your feature 1 settings here.</p>
                    </div>
                    <!-- Example Card 2 -->
                    <div class="bg-green-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h4 class="text-xl font-bold mb-2">Feature 2</h4>
                        <p>Manage your feature 2 settings here.</p>
                    </div>
                    <!-- Example Card 3 -->
                    <div class="bg-purple-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <h4 class="text-xl font-bold mb-2">Feature 3</h4>
                        <p>Manage your feature 3 settings here.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
