@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nova Categoria</div>
                    <div class="card-body">
                        @include('form._form_errors')
                        {{ Form::open(['route' => 'app.categories.store']) }}
                            @include('app.category._form')
                            <button type="submit" class="btn btn-primary">Criar</button>
                    </div>
                    {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
