@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>List of products</h2>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success my-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-stripped table-bordered table-hover table-condensed">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
        </tr>
        </thead>
        <tbody>
        @if($products->total() == 0)
            <tr>
                <td colspan="4" class="text-center">Nenhum produto encontrado</td>
            </tr>
        @endif
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>R$ {{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-warning">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

@endsection
