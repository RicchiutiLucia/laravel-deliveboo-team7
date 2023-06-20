@extends('layouts.app')

@section('content')




@section('content')
    <section id="" class="container-fluid">
        <form action="{{ route('admin.dishes.update', ['dish' => $dish->slug]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex">
                <div class="p-3 ">
                    <div class=" py-3 align-items-center">
                        <h1>Nome: {{ $dish->name }}</h1>
                    </div>
                    <div class="col-12">
                        <div class="col">
                            <div class="pb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $dish->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="pb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price" value="{{ old('price', $dish->price) }}">
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
                                <img class="img-thumbnail my-img-thumb" src="{{ $dish->image }}" alt="" />
                                <input type="file" class="form-control @error('image') is-invalid @enderror "
                                    id="image" name="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <a class="btn btn-primary back" href="{{ route('admin.dishes.index') }}">Torna ai tuoi piatti</a>
                        <button type="submit" class="btn btn-primary mx-3">Salva</button>

                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection