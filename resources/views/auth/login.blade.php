@extends('layouts.app')

@section('content')
    <div class="w-50 p-4 border border-light rounded-3 bg-light mx-auto">
        <h1>Login</h1>
        <hr>
        <form method="POST" action="{{ route('login') }}">
            @csrf
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
            <button type="submit" class="btn btn-success">Se connecter</button>
        </form>
    </div>
@endsection
