<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="home-container">
        <h1>Bienvenido, {{ Auth::user()->name }}</h1>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    </div>
@endsection
