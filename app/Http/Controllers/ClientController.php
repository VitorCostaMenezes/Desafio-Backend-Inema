<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;


use App\Models\Adress;
use App\Models\Client;

class ClientController extends Controller
{
    public function create(Request $request) {

        DB::beginTransaction();

            $client = Client::create($request->all());
            $client->adress()->create($request->all());

        DB::commit();

        return redirect('/')->with('msg', 'Cliente cadastrado com sucesso!');

    }



    public function index(){

        $clients = Client::all();
        return view('clients.show', ['clients' => $clients]);
    }

}
