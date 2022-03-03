@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Visualizando Cliente</h4>
                </div>

                <div class="col-4 text-right">
                    <a href="{{ route('clients.index') }}" class="btn btn-sm btn-primary">Voltar</a>
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
                            {{ $client->name }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>Email: </strong></p>
                        <p class="card-text">
                            {{ $client->email }}
                        </p>
                    </div>
                </div>
                <div class="card m-2 shadow-sm">
                    <div class="card-body">
                        <p><strong>CPF: </strong></p>
                        <p class="card-text">
                            {{ $client->cpf }}
                        </p>
                    </div>
                </div>
            </div>
            <div>
                {!!Form::open()->method('delete')->route('clients.destroy', ['client' => $client->id])!!}
                    {!!Form::submit("Deletar", "danger")!!}
                {!!Form::close()!!}
            </div>

        </div>
    </div>
@endsection