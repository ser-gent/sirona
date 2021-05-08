@extends('layouts.app')

@section('content')
    <h1 class="d-inline">Commandes</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Statut</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>En cours</td>
                    <td><a href="{{ route('order.show', $order->id) }}">En savoir plus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
