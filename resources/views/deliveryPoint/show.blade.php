@extends('layouts.app')

@section('content')
    <h1>{{ $point->name }}</h1>
    <hr>

    <ul class="list-group">
        <li class="list-group-item">Coordonées : {{ $point->latitude }} - {{ $point->longitude }}</li>
        <li class="list-group-item">Etage : {{ $point->floor }}</li>
        @if($point->have_charging_station == 1)
            <li class="list-group-item">Présence d'une station de recharge</li>
        @else
            <li class="list-group-item">Pas de station de recharge</li>
        @endif
    </ul>

@endsection
