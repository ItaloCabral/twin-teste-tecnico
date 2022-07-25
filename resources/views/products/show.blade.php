@extends('layout')

@section('content')

    @if($message = Session::get('success'))
        <div class="alert alert-success my-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container-fluid text-start my-5">
        <h2> ID: {{ $product->id }}</h2>
        <h2> Nome: {{ $product->name }}</h2>
        <h2> Categoria: {{ $product->category->name }}</h2>
        <h2> Preço: R$ {{ $product->price }}</h2>
    </div>

@endsection
