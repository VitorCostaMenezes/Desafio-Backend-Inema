<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;


use App\Models\Adress;
use App\Models\Client;

class ClientController extends Controller
{

    public function create() {
        return view('clients.create');
    }


    public function store(Request $request) {

        DB::beginTransaction();

            $client = Client::create($request->all());
            $client->adress()->create($request->all());

        DB::commit();

        return redirect('/list_clients')->with('msg', 'Cliente cadastrado com sucesso!');

    }



    // public function show(){

    //     $clients = Client::all();
    //     return view('clients.show', ['clients' => $clients]);
    // }


    public function show() {

        $search = request('search');

        if($search) {

            $clients = Client::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $clients = Client::all();
        }        
    
        return view('clients.show',['clients' => $clients, 'search' => $search]);

    }



    public function edit($id) {
        $client = Client::findOrFail($id);

        return view('clients.edit', ['client' => $client]);

    }



    public function update(Request $request) {

        // $dataForm = $request->all();
        $dataForm = $request->except(['_token', '_method']);


        

        DB::beginTransaction();


        $client = Client::find($request->id); // busca o cliente
        if ($client) // verifica se serviço foi encontrado
        {
            $client->update($dataForm); // update sdo cliente
            $client->adress->update($dataForm); // update cliente da relação
        }



            // $client = Client::findOrFail($request->id)->update($data);

            // $client->adress()->update($data);

        DB::commit();
        
        return redirect('/list_clients')->with('msg', 'Cliente editado com sucesso!');

    }


}
