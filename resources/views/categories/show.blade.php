@extends('layout')

@section('content')

    @if($message = Session::get('success'))
        <div class="alert alert-success my-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container-fluid text-start my-5">
        <h2> ID: {{ $category->id }}</h2>
        <h2> Nome: {{ $category->name }}</h2>
    </div>

@endsection
