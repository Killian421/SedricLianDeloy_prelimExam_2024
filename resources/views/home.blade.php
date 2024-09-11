@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Home Page</h1>
    <nav class="nav">
        <a class="nav-link" href="{{ route('items') }}">Items Page</a>
        <a class="nav-link" href="{{ route('pictures') }}">Pictures Page</a>
    </nav>
@endsection
