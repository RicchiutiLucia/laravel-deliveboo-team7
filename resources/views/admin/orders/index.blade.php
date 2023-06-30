@extends('layouts.app')


@section('content')
    <table class="table w-90 m-auto">
        <thead>
            <tr>
                <th scope="col">Nome<span class="d-none d-lg-inline"> cliente</span></th>
                <th scope="col">Indirizzo</th>
                <th scope="col" class="d-none d-md-table-cell">Email</th>
                <th scope="col" class="d-none d-md-table-cell">Cell.</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>

                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td class="d-none d-md-table-cell">{{ $order->email }}</td>
                    <td class="d-none d-md-table-cell">{{ $order->phone }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td><a href="{{ route('admin.orders.show', ['order' => $order->id]) }}"
                            class="btn btn-primary">Dettagli</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
