@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Editar Produto</h4>
                </div>

                <div class="col-4 text-right">
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Voltar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            {!!Form::open()->fill($product)->method('put')->route('products.update', ['product' => $product->id])!!}
                @include('products._form')
            {!!Form::close()!!}
        </div>
    </div>
@endsection