@extends('layouts.app')


@section('content')
    <div class="container mt-4 d-flex justify-content-center align-items-center">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="card m-3 shadow" style="width: 25rem;">
            <div class="wrapper_img p-3">
                @if ($dish->image)
                    <img src="{{ $dish->image }}" class="card-img-top h-100 w-100" alt="{{ $dish->name }}">
                @else
                @endif
            </div>
            <div class="card-body text-center">
                <h4 class="card-title">{{ $dish->name }}</h4>
                <p class="card-text mb-2">{{ $dish->description }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Ingredienti: </strong>{{ $dish->ingredients }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Prezzo: </strong>{{ $dish->price }}€</p>



            </div>
            <a href="{{ route('admin.dishes.index') }}" class="btn btn-primary mb-4" style="margin: auto">
                Torna ai piatti
            </a>
        </div>






    </div>
@endsection
