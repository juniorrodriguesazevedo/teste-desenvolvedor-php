<div class="row">
    <div class="col-md-12">
        {!!Form::text('name', 'Nome do Cliente')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('email', 'Email')->type('email')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('cpf', 'CPF')!!}
    </div>
    <div class="col-md-12">
        {!!Form::submit('Salvar')!!}
    </div>
</div>