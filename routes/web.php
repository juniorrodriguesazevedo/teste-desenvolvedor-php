<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PurchaseController;

Route::get('/', function () {
    return redirect()->route('clients.index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::resources([
        'clients' => ClientController::class,
        'products' => ProductController::class,
        'purchases' => PurchaseController::class
    ]);
});
