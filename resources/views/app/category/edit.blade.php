@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Categoria</div>
                    <div class="card-body">
                        @include('form._form_errors')
                        {{ Form::model($category,['route' => ['app.categories.update',$category->id], 'method' => 'PUT' ]) }}
                            @include('app.category._form')
                            <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
