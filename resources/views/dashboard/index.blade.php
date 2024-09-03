@extends('layouts.dashboard')

@section('title', 'Dashboard | SIPAPEDA')

@section('content')
    <div class="flex-grow p-6">
        @include('partials.breadcrumb')
        @include('partials.flash-message')

        <main>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-4 text-gray-900">Selamat Datang di SIPAPEDA Dashboard,
                    {{ Auth::user()->name }}!
                </h3>
                <p class="text-gray-700 mb-6">This is your dashboard where you can manage the SIPAPEDA website.</p>
                <section class="bg-gray-200">
                    <div class="container mx-auto py-5 h-full">
                        <div class="flex justify-center items-center h-full">
                            <div class="w-full max-w-md">
                                <div class="bg-white rounded-lg shadow">
                                    <div class="p-4">
                                        <div class="flex flex-col">
                                            <h5 class="text-lg font-semibold mb-1">Valleryan Virgil Zuliuskandar</h5>
                                            <p class="text-sm text-gray-600 mb-2">Pengembang Sistem</p>
                                            <div class="flex justify-between bg-gray-100 rounded p-2 mb-2">
                                                <div class="mr-3">
                                                    <p class="text-xs text-gray-500 mb-1">NPM</p>
                                                    <p class="text-sm">G1A020021</p>
                                                </div>
                                                <div>
                                                    <p class="text-xs text-gray-500 mb-1">Program Studi</p>
                                                    <p class="text-sm">Informatika</p>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-xs text-gray-500 mb-1">Fakultas</p>
                                                    <p class="text-sm">Teknik</p>
                                                </div>
                                            </div>
                                            <div class="bg-gray-100 rounded p-2 mb-2">
                                                <p class="text-xs text-gray-500 mb-1">E-mail</p>
                                                <p class="text-sm">valleryan1212@gmail.com</p>
                                            </div>
                                            <div class="pt-1">
                                                <a href="https://www.linkedin.com/in/valleryan-virgil-zuliuskandar-50366a242/"
                                                    class="inline-block w-full text-center py-2 px-4 border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition-colors duration-200 rounded">LinkedIn</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
