@extends('layouts.app')

@section('title', 'Picture Page')

@section('content')
    <h1>Picture Page</h1>
    <div class="container">
        <div class="row">
            <!-- Example pictures -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/dog.jpeg') }}" class="card-img-top" alt="Picture">
                    <div class="card-body">
                        <p class="card-text">Dog picture here</p>
                    </div>
                </div>
            </div>
            <!-- Repeat for more pictures -->
        </div>
    </div>
@endsection
