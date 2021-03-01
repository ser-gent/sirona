@extends('layouts.app')

@section('content')
    <h1>Robot</h1>
    <hr>
    @foreach($robots as $robot)
        <div class="border bg-light py-2 px-4 rounded-pill my-2">
            <h3 class="d-inline"><a href="#">Robot #{{ $robot->robot_code }}</a></h3>
            <p class="d-inline ms-4">Statut : {{ $robot->statut_code }}</p>
        </div>
    @endforeach
@endsection
