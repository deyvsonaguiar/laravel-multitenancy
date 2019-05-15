@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ver Produto</div>
                    <div class="card-body">
                        <a href="{{ route('app.products.edit', ['product' => $product->id]) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('app.products.destroy', ['product' => $product->id]) }}" class="btn btn-danger"
                        onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}"
                        >Excluir</a>

                        {{Form::open(['route' => ['app.products.destroy',$product->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
                        {{Form::close()}}
                        <br/><br/>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nome</th>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Descrição</th>
                                <td>{{$product->description}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Preço</th>
                                <td>{{$product->price}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Categoria</th>
                                <td>{{$product->category->name}}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
