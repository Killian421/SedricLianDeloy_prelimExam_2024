@extends('layouts.app')

@section('title', 'Item Page')

@section('content')
    <h1>Item Page</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/dog.jpeg') }}" class="card-img-top" alt="Item Image">
                    <div class="card-body">
                        <p class="card-text">Dog</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
