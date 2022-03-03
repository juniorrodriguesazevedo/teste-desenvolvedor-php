<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Models\Product;
use App\Models\Purchase;
use App\Http\Controllers\Controller;
use App\Http\Requests\Purchase\PurchaseStoreRequest;
use App\Http\Requests\Purchase\PurchaseUpdateRequest;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::with('client', 'product')->orderBy('date')->paginate(20);

        return view('purchases.index', ['purchases' => $purchases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::orderBy('name')->get();
        $products = Product::orderBy('name')->get();

        return view('purchases.create', [
            'clients' => $clients,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PurchaseStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurchaseStoreRequest $request)
    {
        $data = $request->validated();

        $purchase = Purchase::create($data);

        return redirect()->route('purchases.show', ['purchase' => $purchase->id])
            ->withStatus('Pedido cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        $purchase = $purchase->load('client', 'product');

        return view('purchases.show', ['purchase' => $purchase]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        $clients = Client::orderBy('name')->get();
        $products = Product::orderBy('name')->get();

        return view('purchases.edit', [
            'products' => $products,
            'purchase' => $purchase,
            'clients' => $clients
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PurchaseUpdateRequest  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(PurchaseUpdateRequest $request, Purchase $purchase)
    {
        $data = $request->validated();

        $purchase->update($data);

        return redirect()->route('purchases.show', ['purchase' => $purchase->id])
            ->withStatus('Pedido atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        try {
            $purchase->delete();
            return redirect()->route('purchases.index')
                ->withStatus('Pedido deletado com sucesso!');
        } catch (\Exception $e) {
            return back()->withError('Registro vinculado á outra tabela, somente poderá ser excluído se retirar o vinculo.');
        }
    }
}
