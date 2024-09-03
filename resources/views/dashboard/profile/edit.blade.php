@extends('layouts.dashboard')

@section('title', 'Dashboard | SIPAPEDA')

@section('content')
    <div class="flex-grow p-6">
        @include('partials.breadcrumb')
        @include('partials.flash-message')

        <main>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-semibold text-gray-900">Profil Saya</h3>
                    <h3 class="text-1xl  text-gray-900">Ubah Kata Sandi</h3>
                </div>
                <form method="POST" action="{{ route('profile.save') }}"
                    class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
                    @csrf
                    <div class="mb-4">
                        <label for="current_password" class="block text-gray-700 font-bold mb-2">Current Password</label>
                        <input type="password"
                            class="form-control block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            id="current_password" name="current_password" required>
                        @error('current_password')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="new_password" class="block text-gray-700 font-bold mb-2">New Password</label>
                        <input type="password"
                            class="form-control block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            id="new_password" name="new_password" required>
                        @error('new_password')
                            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="new_password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm New
                            Password</label>
                        <input type="password"
                            class="form-control block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                            id="new_password_confirmation" name="new_password_confirmation" required>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update
                        Password</button>
                </form>

            </div>

        </main>
    </div>
@endsection
