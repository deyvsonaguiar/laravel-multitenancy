@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listagem de Produtos</div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>
                                    <a href="{{ route('app.products.create')}}" class="btn btn-primary">
                                    Criar novo
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Categoria</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        <a href="{{ route('app.products.show', ['product' => $product->id])}}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('app.products.edit', ['product' => $product->id])}}">
                                                <i class="far fa-edit"></i>
                                        </a>
                                    </div>


                                </div>
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
