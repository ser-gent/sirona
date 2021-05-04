@extends('layouts.app')

@section('content')
    <h1>Passer une commande</h1>
    <hr>
    <form action="{{ route('order.store') }}" method="POST" class="row">
        @csrf
        <div class="form-group col-md-3 mt-2">
            <label for="deliveryPoint">Point de livraison</label>
            <select id="deliveryPoint" class="form-control" name="deliveryPoint">
                @foreach($points as $point)
                    <option value="{{ $point->id }}">{{ $point->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3 mt-2">
            <label for="timeSelect">Heure</label>
            <input class="form-control" type="time" value="{{ date('H:i') }}" pattern="[0-9]{2}:[0-9]{2}" id="timeSelect" name="arrival_time">
        </div>


        <div class="form-group col-md-3 mt-2">
            <label for="contentDelivery">Contenu de la livraison</label>
            <select id="contentDelivery" class="form-control" name="product">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3 mt-2">
            <label for="quantity">Quantité</label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-success">Commander</button>
        </div>

    </form>
@endsection
