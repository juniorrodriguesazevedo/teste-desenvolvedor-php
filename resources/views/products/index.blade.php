@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Produtos</h4>
                </div>

                <div class="col-4 text-right">
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('alerts.success')

            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col" style="width: 150px">Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>R${{ $product->price_formatted }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('products.show', $product->id) }}">Ver</a>
                                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="card-footer py-4">
            <nav class="d-flex justify-content-end" aria-label="...">
                {{ $products->links() }}
            </nav>
        </div>
    </div>
@endsection