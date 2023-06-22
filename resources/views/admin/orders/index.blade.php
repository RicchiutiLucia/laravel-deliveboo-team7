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

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
