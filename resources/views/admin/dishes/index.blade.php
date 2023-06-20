@extends('layouts.app')
@section('content')
    <div id="plate_index" class="row justify-content-center pb-5">
        <h1 class=" text-center p-3 my-5 shadow">
            LA TUA LISTA PIATTI
        </h1>


        @if ($dishes->count() > 0)
            @foreach ($dishes as $dish)
                <div class="card m-3 shadow" style="width: 20rem;">
                    <div class="wrapper_img p-3">
                        @if ($dish->image)
                            <img src="{{ $dish->image }}" class="card-img-top h-100 w-100" alt="{{ $dish->name }}">
                        @else
                            Ciccio bello
                        @endif
                    </div>
                    <div class="card-body d-flex flex-wrap">
                        <h4 class="card-title col-12">{{ $dish->name }}</h4>
                        <p class="card-text mb-2 col-12">{{ $dish->description }}</p>
                        <div class="col-12">
                            <p class="card-text d-inline-block mb-2 mr-2">Prezzo: {{ $dish->price }}€</p>
                            <p class="card-text d-inline-block">
                                @if ($dish->visible)
                                    <p class="badge badge-success text-white mb-3">Visibile</p>
                                @else
                                    <p class="badge badge-danger text-white mb-3">Non Visibile</p>
                                @endif
                            </p>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="">
                                <a href="{{ route('admin.dishes.show', $dish->slug) }}"class="btn btn-primary">Dettagli</a>

                            </div>
                            <div class="mx-2">
                                <a href="{{ route('admin.dishes.edit', $dish->slug) }}" class="btn btn-warning">Modifica</a>

                            </div>


                            <form class="form_delete_post my-2"
                                action="{{ route('admin.dishes.destroy', ['dish' => $dish->slug]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h4>Non hai ancora aggiunto nessun piatto.</h4>
        @endif
    </div>
@endsection

<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Confermi di voler eliminare l'elemento selezionato?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Conferma eliminazione</button>
            </div>
        </div>
    </div>
</div>
