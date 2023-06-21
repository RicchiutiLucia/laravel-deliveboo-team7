@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data" class="p-4"
        id="create_restaurant_form">
        @csrf

        <div class="row bg-dark-light py-3">
            <h1>Create a new Resturant</h1>

            <div class="col-12 col-lg-6">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}">

                    </div>
                    <div class="d-none text-danger" id="requiredName">Nome Obbligatorio</div>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-lg-6">

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                            name="address" value="{{ old('address') }}">
                    </div>
                    <div class="d-none text-danger" id="requiredAddress">Indirizzo Obbligatorio</div>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-lg-6">

                <div class="mb-3">
                    <label for="vat_number" class="form-label">Vat Number</label>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control @error('vat_number') is-invalid @enderror" id="vat_number"
                            name="vat_number" value="{{ old('vat_number') }}">
                    </div>
                    <div class="d-none text-danger" id="requiredVat">Partita IVA Obbligatoria</div>
                    @error('vat_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-lg-6">

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            name="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="d-none text-danger" id="requiredPhone">Phone Number Obbligatorio</div>
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-lg-6">

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            id="description" name="description" value="{{ old('description') }}">

                    </div>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="mb-3 d-flex col-12 col-lg-6">
                <div class="w-50 d-flex">
                    <img id="uploadPreview" width="250" src="https://via.placeholder.com/300x200">
                    <label for="image" class="form-label align-self-end ps-1">Image</label>
                </div>
                <div class="w-50 align-self-end">
                    <input type="file" name="image" id="input_file_img"
                        class="form-control mt-3 @error('image') is-invalid @enderror" value="{{ old('image') }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12 ">
                <div class="d-none text-danger" id="requiredCategory">Seleziona almeno 1 categoria</div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <div class="d-flex gap-2">
                        @foreach ($categories as $category)
                            <input type="checkbox" class="my-category  @error('categories') is-invalid @enderror"
                                id="categories{{ $category->id }}" name="categories[]" value="{{ $category->id }}">
                            <label for="categories{{ $category->id }}"
                                class="form-check-label text-capitalize">{{ $category->name }}</label>
                        @endforeach
                    </div>
                    @error('categories')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary" id="restaurant_submit">Create</button>
                <button type="reset" id="reset_button" class="btn btn-secondary">Reset</button>
            </div>
        </div>
    </form>
@endsection
