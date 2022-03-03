@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Visualizando Produto</h4>
                </div>

                <div class="col-4 text-right">
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Voltar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('alerts.success')

            <div class="card-deck">
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Nome: </strong></p>
                        <p class="card-text">
                            {{ $product->name }}
                        </p>
                    </div>
                </div>
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Preço: </strong></p>
                        <p class="card-text">
                            R${{ $product->price_formatted }}
                        </p>
                    </div>
                </div>
            </div>

            <div>
                {!!Form::open()->method('delete')->route('products.destroy', ['product' => $product->id])!!}
                    {!!Form::submit("Deletar", "danger")!!}
                {!!Form::close()!!}
            </div>

        </div>
    </div>
@endsection