@extends('layouts.app')

@section('content')
    <h1>Edition de {{ $product->name }}</h1>
    <hr>
    <form action="{{ route('product.update') }}" method="POST" class="row">
        @csrf
        <div class="col-12">
            <label for="name" class="form-label">Désignation</label>
            <input type="text" id="name" class="form-control" name="name" value="{{ $product->name }}">
        </div>

        <div class="col-md-4 mt-2">
            <label for="length" class="form-label">Longueur (en cm)</label>
            <input type="text" class="form-control" id="length" name="length" value="{{ $product->length }}">
        </div>
        <div class="col-md-4 mt-2">
            <label for="width" class="form-label">Largeur (en cm)</label>
            <input type="text" class="form-control" id="width" name="width" value="{{ $product->width }}">
        </div>
        <div class="col-md-4 mt-2">
            <label for="height" class="form-label">Hauteur (en cm)</label>
            <input type="text" class="form-control" id="height" name="height" value="{{ $product->height }}">
        </div>

        <div class="col-md-4 mt-2">
            <label for="weight" class="form-label">Poids (en g)</label>
            <input type="text" class="form-control" id="weight" name="weight" value="{{ $product->weight }}">
        </div>
        <div class="col-md-4 mt-2">
            <label for="stock" class="form-label">Unité en stock</label>
            <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
        </div>
        <div class="col-md-4 mt-2">
            <label for="location" class="form-label">Lieu de stockage du stock</label>
            <select class="form-select" id="location" name="location" value="{{ $product->location }}">
                @foreach($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-success">Ajouter</button>
        </div>

    </form>
@endsection
