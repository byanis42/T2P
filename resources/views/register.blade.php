@extends('layouts.root')

@section('title')
    T2P Test - Register
@endsection

@section('body_class')
    gradient-bg
@endsection

@section('content')
    <div id="threejs-background" class="fixed top-0 left-0 w-screen h-screen z-0"></div>
    <div class="relative flex items-center justify-center h-screen z-10">
        <div class="flex justify-center items-center bg-white rounded-lg shadow-lg max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl">
            <form class="p-8" method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="text-3xl font-bold text-center mb-4">Register</h2>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="password" name="password" required>
                    @error('password')
                        <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password:</label>
                    <input type="password" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="password_confirmation" name="password_confirmation" required>
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">Register</button>

                <div class="text-center mt-4">
                    <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
