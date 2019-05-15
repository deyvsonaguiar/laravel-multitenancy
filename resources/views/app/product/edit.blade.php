@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Produto</div>
                    <div class="card-body">
                        @include('form._form_errors')
                        {{ Form::model($product, ['route' => ['app.products.update', $product->id], 'method' => 'PUT']) }}
                            @include('app.product._form')
                            <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
