@extends('layouts.app')

@section('content')
    <h1 class="d-inline">Produits en stock</h1><a href="{{ route('product.create') }}" class="d-inline ms-4 btn btn-primary">Ajouter</a>
    <hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Noms</th>
                <th scope="col">Stock</th>
                <th scope="col">Dimensions (Lxlxh)</th>
                <th scope="col">Poids</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td><a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></td>
                    <td>{{ $product->stock }}</td>
                    <td class="fst-italic">{{ $product->length }} x {{ $product->width }} x {{ $product->height }} cm</td>
                    <td>{{ $product->weight}} g</td>
                    <td>
                        @include('products._btn-edit-delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
