@extends('layouts.app')

@section('content')
    <h1>Commande n°{{ $order->id }}</h1>
    <hr>

    <ul class="list-group">
        <li class="list-group-item">Produit : {{ $product->name }}</li>
        <li class="list-group-item">Quantité : {{ $order->quantity }}</li>
        <li class="list-group-item">Lieu de stockage : {{ $departure->name }}</li>
        <li class="list-group-item">Status : {{ $order->status }}</li>
        <li class="list-group-item">Destinataire : {{ $receiver->name }}</li>
        <li class="list-group-item">Lieu de réception : {{ $arrival->name }}</li>
        <li class="list-group-item">Arrivée désirée : {{ $order->arrival_time }}</li>
    </ul>
{{--    <div class="mt-4">--}}
{{--        @include('products._btn-edit-delete')--}}
{{--    </div>--}}
@endsection
