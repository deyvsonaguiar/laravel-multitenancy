@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listagem de Categorias</div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>
                                    <a href="{{ route('app.categories.create')}}" class="btn btn-primary">
                                    Criar novo
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                            <a href="{{ route('app.categories.show', ['category' => $category->id])}}">
                            <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('app.categories.edit', ['category' => $category->id])}}">
                            <i class="far fa-edit"></i>
                            </a>
                            </td>
                        </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
