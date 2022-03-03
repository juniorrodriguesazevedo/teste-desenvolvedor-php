@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Pedidos</h4>
                </div>

                <div class="col-4 text-right">
                    <a href="{{ route('purchases.create') }}" class="btn btn-sm btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('alerts.success')

            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Valor Total</th>
                    <th scope="col">Status</th>
                    <th scope="col" style="width: 150px">Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $purchase)
                        <tr>
                            <td>{{ $purchase->id }}</td>
                            <td>{{ $purchase->client->name }}</td>
                            <td>{{ $purchase->date_formatted }}</td>
                            <td>R${{ $purchase->value_total_formatted }}</td>
                            <td>{{ $purchase->status }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('purchases.show', $purchase->id) }}">Ver</a>
                                <a class="btn btn-primary" href="{{ route('purchases.edit', $purchase->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="card-footer py-4">
            <nav class="d-flex justify-content-end" aria-label="...">
                {{ $purchases->links() }}
            </nav>
        </div>
    </div>
@endsection