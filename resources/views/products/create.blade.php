@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Adicionar Produto</h2>
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
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" required id="name" name="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="number" class="form-control" required id="price" name="price" placeholder="">
                </div>
                <div class="form-group">
                    <label for="description">Categoria</label>
                    <select class="form-select" aria-label="Categorias disponiveis" required id="category_id" name="category_id">
                        <option value="">Selecione uma categoria</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block my-2">Enviar</button>
            </form>
        </div>
    </div>
@endsection
