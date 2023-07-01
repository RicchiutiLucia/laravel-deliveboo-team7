@extends('layouts.app')


@section('content')
    <div class="container mt-4 d-flex justify-content-center align-items-center">
        <div class="card m-3 shadow ms_card" style="width: 25rem;">
            <div class="card-body text-left">
                <h4 class="card-text  mb-2 mr-2 py-2"><strong>Dati Cliente : </strong></h4>
                <p class="card-text  mb-2 mr-2"><strong>Cliente : </strong>{{ $orders->name }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Telefono : </strong>{{ $orders->phone }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Email : </strong>{{ $orders->email }}</p>
                <p class="card-text  mb-2 mr-2"><strong>Indirizzo : </strong>{{ $orders->address }}</p>

                <h4 class="card-text  mb-2 mr-2 py-2"><strong>Riepilogo Ordine : </strong></h4>
                @foreach ($orders_name as $name)
                    <p class="card-text  mb-2 mr-2">{{ $name->name }} <strong>X</strong>
                        {{ $name->quantity }}
                    </p>
                @endforeach
                <p class="card-text  mb-2 mr-2"><strong>Totale : </strong>{{ $orders->total_price }}€</p>
            </div>
        </div>

    </div>

    {{-- <div class="card m-3 shadow ms_card" style="width: 25rem;">
            <div class="card-body text-left">
        </div> --}}

    </div>
    <div class="text-center">
        <a href="{{ route('admin.orders.index') }}" class="btn btn-primary mb-4 " style="margin: auto">
            Torna all'ordini
        </a>

    </div>
@endsection
