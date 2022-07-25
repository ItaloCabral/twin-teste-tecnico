@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Registrar Categoria</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro de input</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group d-flex gap-2">
                    <input type="text" class="form-control" required id="name" name="name" placeholder="Nome">
                    <button type="submit" class="btn btn-secondary btn-block">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
