@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Visualizando Pedido</h4>
                </div>

                <div class="col-4 text-right">
                    <a href="{{ route('purchases.index') }}" class="btn btn-sm btn-primary">Voltar</a>
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
                            {{ $purchase->client->name }}
                        </p>
                    </div>
                </div>
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Produto: </strong></p>
                        <p class="card-text">
                            {{ $purchase->product->name }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Quantidade: </strong></p>
                        <p class="card-text">
                            {{ $purchase->the_amount }}
                        </p>
                    </div>
                </div>
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Valor Total: </strong></p>
                        <p class="card-text">
                            R${{ $purchase->value_total_formatted }}
                        </p>
                    </div>
                </div>
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Data: </strong></p>
                        <p class="card-text">
                            {{ $purchase->date_formatted }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Código de Barras: </strong></p>
                        <p class="card-text">
                            {{ $purchase->bar_code }}
                        </p>
                    </div>
                </div>
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Status: </strong></p>
                        <p class="card-text">
                            {{ $purchase->status }}
                        </p>
                    </div>
                </div>
            </div>

            <div>
                {!!Form::open()->method('delete')->route('purchases.destroy', ['purchase' => $purchase->id])!!}
                    {!!Form::submit("Deletar", "danger")!!}
                {!!Form::close()!!}
            </div>

        </div>
    </div>
@endsection