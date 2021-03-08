@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <hr>

    <ul class="list-group">
        <li class="list-group-item">Dimensions : {{ $product->length }} x {{ $product->width }} x {{ $product->height }} cm</li>
        <li class="list-group-item">Poids : {{ $product->weight }} grammes</li>
        <li class="list-group-item">En stock : {{ $product->stock }}</li>
    </ul>
    <div class="mt-4">
        @include('products._btn-edit-delete')
    </div>
@endsection
