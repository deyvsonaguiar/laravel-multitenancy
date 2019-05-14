@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listagem de Categorias</div>
                    <div class="card-body">
                        <a href="{{ route('app.categories.edit', ['category' => $category->id]) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('app.categories.destroy', ['category' => $category->id]) }}" class="btn btn-danger"
                        onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}"
                        >Excluir</a>

                        {{Form::open(['route' => ['app.categories.destroy',$category->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
                        {{Form::close()}}
                        <br/><br/>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{$category->id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nome</th>
                                <td>{{$category->name}}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection