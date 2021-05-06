@extends('layouts.app')

@section('content')
    @env('local')
    <div class="w-50 p-4 border border-light rounded-3 bg-light mx-auto">
        <h1>Inscription</h1>
        <hr>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" id="lastname">
                @error('lastname')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstname">
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="working_code" class="form-label">Code hospitalier</label>
                <input type="text" class="form-control @error('working_code') is-invalid @enderror" name="working_code" id="working_code">

                @error('working_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirmation mot de passe</label>
                <input type="password" class="form-control @error('confirm-password') is-invalid @enderror" name="confirm-password" id="confirm-password">

                @error('confirm-password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <button type="submit" class="btn btn-success">Inscrire</button>
        </form>
    </div>
    @endenv
    @env('production')
        <div class="w-50 p-4 border border-light rounded-3 bg-light mx-auto">
            <p>Pas disponible</p>
        </div>
    @endenv
@endsection
