@extends('layouts.app')

@section('content')
    <h1 class="d-inline">Points de livraison disponibles</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Etage</th>
                <th scope="col">Station de recharge</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deliveryPoints as $point)
                <tr>
                    <td>{{ $point->name }}</td>
                    <td>{{ $point->floor}}</td>
                    <td>{{ $point->have_charging_station }}</td>
                    <td><a href="{{ route('delivery.show', $point->id) }}">En savoir plus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {!! $deliveryPoints->links() !!}
    </div>

@endsection
