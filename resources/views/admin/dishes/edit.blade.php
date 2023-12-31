@extends('layouts.app')


@section('content')
    <div class="d-flex container-fluid justify-content-center">

   

        <form action="{{ route('admin.dishes.update', ['dish' => $dish->slug]) }}" method="POST" enctype="multipart/form-data"
            class="my-dish-form col-md-6 ">

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.dishes.update', ['dish' => $dish->slug]) }}" method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div>
                <div class="p-3 ">
                    <div class=" py-3 align-items-center">
                        <h1>Nome: {{ $dish->name }}</h1>
                    </div>
                    <div class="col-12">
                        <div class="col">
                            <div class="pb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control my-dish-name @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $dish->name) }}">
                                <div class="d-none text-danger" id="requiredDishName">Nome Obbligatorio*</div>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="pb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number"
                                    class="form-control my-dish-price @error('price') is-invalid @enderror" id="price"
                                    name="price" value="{{ old('price', $dish->price) }}" min='0' max='99.99' step='0.01'>
                                    <div class="d-none text-danger" id="requiredDishPrice">Prezzo Obbligatorio*</div>
                                    <div class="d-none text-danger" id="DishPricePositive">Il prezzo non può essere negativo*</div>
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pb-3">
                                <label for="ingredients" class="form-label">Ingredients</label>
                                <textarea name="ingredients" id="ingredients" class="form-control @error('ingredients') is-invalid @enderror">{{ old('ingredients', $dish->ingredients) }}</textarea>
                                @error('ingredients')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $dish->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div>

                            <div class="pb-3">
                                <label for="image" class="form-label">Immagine del piatto</label>
                                @if ($dish->image)
                                    <div class="my-img-wrapper">
                                        <img class="img-thumbnail my-img-thumb" src="{{asset('storage/' . $dish->image)}}" alt="{{$dish->name}}"/>
                                    <a class="my-img-delete btn btn-danger" id="btn-delete">X</a>
                                    </div>
                                @endif
                                <input type="file" class="form-control @error('image') is-invalid @enderror "
                                    id="image" name="image">
                                    
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="visible" id="visible" value="1"
                                    checked>
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
                        </div>
                    </div>

                    <div class="d-flex">
                        <a class="btn btn-primary back" href="{{ route('admin.dishes.index') }}">Torna ai tuoi piatti</a>
                        <button type="submit" class="btn btn-primary mx-3 my-dish-submit">Salva</button>

                    </div>
                </div>
            </div>
        </form>

        <form id="form-delete" action="{{route('admin.dishes.deleteImage', ['slug' => $dish->slug])}}" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>

@endsection
