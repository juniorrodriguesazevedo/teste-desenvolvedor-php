<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        $data = Client::orderBy('name')->get();

        return response()->json(['data' => $data], 200);
    }
}
