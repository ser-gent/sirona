@extends('layouts.app')

@section('content')
    <h1>Home - {{ Auth::user()->working_code }}</h1>
@endsection
