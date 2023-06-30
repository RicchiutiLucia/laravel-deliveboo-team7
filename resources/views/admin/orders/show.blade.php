@extends('layouts.app')


@section('content')
    <div class="container mt-4 d-flex justify-content-center align-items-center">
        <div class="card m-3 shadow" style="width: 25rem;">
            <div class="card-body text-center">
                <p class="card-text  mb-2 mr-2"><strong>Cliente</strong>{{ $orders->name }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Telefono</strong>{{ $orders->phone }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Email</strong>{{ $orders->email }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Indirizzo</strong>{{ $orders->address }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Prezzo: </strong>{{ $orders->total_price }}€</p>
            </div>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-primary mb-4" style="margin: auto">
                Torna all'ordini
            </a>
        </div>

        <div class="card m-3 shadow" style="width: 25rem;">
            <div class="card-body text-center">
                <p class="card-text  mb-2 mr-2"><strong>Riepilogo:</strong>
                    @foreach ($orders_name as $name)
                        <p>nome : {{ $name->name }} </p>
                        <p>quantità : {{ $name->quantity }} </p>
                    @endforeach
                </p>
            </div>
        </div>

    </div>
@endsection
