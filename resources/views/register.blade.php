@extends('layouts.root')

@section('title')
    T2P Test - Register
@endsection

@section('content')
    <form method="post" class="form-register">
        @csrf
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required />
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}" required />
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" required />
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <input type="submit" />
        <a href="/login">Login</a>
    </form>
@endsection

@section('style')
    <style>
        .form-register {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: auto;
        }
    </style>
@endsection
