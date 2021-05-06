@extends('layouts.app')

@section('content')
    <h1>{{ $point->name }}</h1>
    <hr>

    <ul class="list-group">
        <li class="list-group-item">Coordonées : {{ $point->latitude }} - {{ $point->longitude }}</li>
        <li class="list-group-item">Etage : {{ $point->floor }}</li>
    </ul>

@endsection
