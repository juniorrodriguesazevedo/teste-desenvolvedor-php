## Teste GAFA
Teste para vaga de emprego.

### Bibliotecas usadas:
* [Laravel pt-BR Localization](https://github.com/lucascudo/laravel-pt-BR-localization)
* [Bootstrap 4 forms for Laravel 5/6/7/8](https://github.com/netojose/laravel-bootstrap-4-forms)

### Instalação: 
* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`. 
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Use o comando `php artisan migrate:fresh --seed` para fazer as migrações.
* Use o comando `php artisan serve` para rodar em seu servidor.
* Navegue para `http://localhost:8000`. O aplicativo será carregado automaticamente.

#### Observações:
Ao propagar o banco ele já vem com alguns dados cadastrados:

### Lista de todas as APIs:
Method   | Descrição | Rota
:--------- | :------ | :------
GET | Clientes | `localhost:8000/api/clients`
GET | Produtos | `localhost:8000/api/products`
GET | Pedidos | `localhost:8000/api/purchases`
