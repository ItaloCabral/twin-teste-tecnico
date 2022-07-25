@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Categorias</h2>
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
        </tr>
        </thead>
        <tbody>
        @if($categories->total() == 0)
            <tr>
                <td colspan="4" class="text-center">Nenhuma categoria registrada</td>
            </tr>
        @endif
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">
                            <i class="fa fa-pencil"></i>
                        </a>
                    <form action="{{ route('categories.destroy', $category->id) }}" class="d-inline" method="POST">
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

    {{ $categories->links() }}

@endsection
