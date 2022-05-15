@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="p-5 bg-primary text-white text-center gradient">
        <h1>FoundLove</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="centrar">

            <a href="{{ route('login.index') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register.index') }}" class="btn btn-primary">Sign Up</a>

    </div>

@endsection
