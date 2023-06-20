@extends('layouts.app')


@section('content')
    <table class="table w-90 m-auto">
        <thead>
            <tr>
                <th scope="col">Nome cliente</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Cell.</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>

                    <td>{{ $order->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at }}</td>


                    <td class="d-flex flex-nowrap">
                        <a class="btn btn-primary" href="{{ /* route('admin.orders.show', $order->id) */ }}">VEDI</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
