@extends('layouts.app')

@section('content')

<div class="container-fluid  d-flex justify-content-center py-5">
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<form method="POST" action="{{ route('admin.dishes.store') }}" enctype="multipart/form-data" class="my-dish-form col-md-6">

    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nome del piatto</label>
        <input type="text" class="form-control my-dish-name @error('name') is-invalid @enderror " id="name"
            name="name" value="{{ old('name') }}">
        <div class="d-none text-danger" id="requiredDishName">Nome Obbligatorio*</div>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control my-dish-price @error('price') is-invalid @enderror " id="price"
            name="price" min='0' max='99.99' step='0.01'  value="{{ old('price') }}">
        <div class="d-none text-danger" id="requiredDishPrice">Prezzo Obbligatorio*</div>
        <div class="d-none text-danger" id="DishPricePositive">Il prezzo non può essere negativo*</div>
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="ingredients" class="form-label">Ingredienti del piatto</label>
        <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients"> {{ old('ingredients') }}</textarea>
        @error('ingredients')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione del piatto</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Immagine del piatto</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror " id="image" name="image"  value="{{ old('image') }}">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="visible" id="visible" value="1" checked>
        <label class="form-check-label" for="visible">
            Visibile
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="visible" id="visible" value="0">
        <label class="form-check-label" for="visible">
            Non visibile
        </label>
    </div>
    <button type="submit" class="btn btn-primary my-dish-submit">Salva</button>

</form>


   

        @endsection


</div>

   


</div>
   