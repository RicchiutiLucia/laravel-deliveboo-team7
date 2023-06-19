@extends('layouts.app')


@section('content')
    <div class="container mt-4">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif


        <h1 class="my-4">{{ $dish->name }}</h1>
        <h3 class="my-4">{{ $dish->price }}</h3>
        <div><strong>Ingredienti:</strong>{{ $dish->ingredients }}</div>
        <div><strong>Descrizione: </strong>{{ $dish->description }}</div>
        @if($dish->image)
        <div class="text-center my-4">
            <img class="img-thumbnail " width="300" src="{{ asset('storage/' . $dish['image'])}}"/>
        </div>
        @endif


        <a href="{{ route('admin.dishes.index', $dish) }}" class="btn btn-primary">
            Torna ai piatti
        </a>
    </div>
@endsection

