<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $data = Purchase::with('client', 'product')->orderBy('date')->get();

        return response()->json(['data' => $data], 200);
    }
}
