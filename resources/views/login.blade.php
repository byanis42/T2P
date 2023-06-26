{{-- @extends('layouts.root')

@section('title')
    T2P Test - Login
@endsection

@section('content')
    <form method="post" class="form-register">
        @csrf
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}" required />
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" required />
        <input type="submit" />
        <a href="/register">Register</a>
    </form>
@endsection --}}

{{-- @section('style')
    <style>
        .form-register {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: auto;
        }
    </style>
@endsection --}}





{{--
@extends('layouts.root')

@section('title')
    T2P Test - Login
@endsection

@section('content')
    <div class="container bg-red-500">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center my-5">
                    <div class="card-header">Login TIM LA SALOPE</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="{{ route('register') }}" class="btn btn-link">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


@extends('layouts.root')

@section('title')
    T2P Test - Login
@endsection

@section('content')
    <div class="flex justify-center items-center h-screen bg-t2p-blue">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-sm w-full">
            <h2 class="text-3xl font-bold text-center mb-4">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="email" name="email" value="{{ old('email') }}" required autofocus>
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
                    <input type="checkbox" id="remember" name="remember" class="form-checkbox">
                    <label for="remember" class="ml-2">Remember me</label>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">Login</button>

                <div class="text-center mt-4">
                    <a href="{{ route('register') }}" class="text-blue-500">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection
