<div class="row">
    <div class="col-md-6">
        {!!Form::select('client_id', 'Nome do Cliente')->options($clients->prepend('Selecione o cliente...', ''))!!}
    </div>
    <div class="col-md-6">
        {!!Form::select('product_id', 'Nome do Produto')->options($products->prepend('Selecione o produto...', ''))!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('the_amount', 'Quantidade')->type('number')!!}
    </div>
    <div class="col-md-6">
        {!!Form::date('date', 'Data')!!}
    </div>
    <div class="col-md-12">
        {!!Form::text('bar_code', 'Código de Barras')!!}
    </div>
    <div class="col-md-12">
        {!!Form::submit('Salvar')!!}
    </div>
</div>