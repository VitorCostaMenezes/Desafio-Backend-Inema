<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adress;
use App\Models\Client;



class EventController extends Controller
{
    // public function create() {
    //     return view('events.create');
    // }

    public function create(Request $request) {

        $adress = new Adress;

        $adress->rua = $request->rua;
        $adress->numero = $request->numero;
        $adress->bairro = $request->bairro;
        $adress->cidade = $request->cidade;
        $adress->estado = $request->estado;
        
        $adress->save();

        $clients = new Client;

        $clients->name = $request->nome;
        $clients->email = $request->email;
        $clients->telefone = $request->telefone;
        $clients->adress_id = $adress->id;
   
        $clients->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }
}
