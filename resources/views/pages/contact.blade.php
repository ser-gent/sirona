@extends('layouts.app')

@section('content')
    <div class=" p-4 border border-light rounded-3 bg-light mx-auto">
        <h1>Contact</h1>
        <hr>
        <form>
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Adresse mail</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Votre message</label>
                <textarea class="form-control" id="content" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Envoyer mon message</button>
        </form>
    </div>
@endsection
