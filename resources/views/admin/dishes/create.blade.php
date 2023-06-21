@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.dishes.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome del piatto</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror " id="price" name="price">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ingredients" class="form-label">Ingredienti del piatto</label>
                    <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients"></textarea>
                    @error('ingredients')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione del piatto</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine del piatto</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror " id="image" name="image">
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


                <button type="submit" class="btn btn-primary">Salva</button>

            </form>

            @endsection


</div>
   