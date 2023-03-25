<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Client;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request) {

       

        $clients = new Client;

        $clients->name = $request->nome;
        $clients->email = $request->email;
        $clients->telefone = $request->telefone;
   
        $clients->save();


        $adress = new Adress;

        $adress->rua = $request->rua;
        $adress->numero = $request->numero;
        $adress->bairro = $request->bairro;
        $adress->cidade = $request->cidade;
        $adress->estado = $request->estado;
        $adress->client_id = $clients->id;

        
        $adress->save();

        return redirect('/')->with('msg', 'Cliente cadastrado com sucesso!');

    }



    public function index(){

        $clients = Client::all();
        // $clients = Client::with('adresses')->get();
        // $clients = Client::with('adresses')->all();

        // $event = Event::findOrFail($id);
        foreach ($clients as $client) {

            $adress_cliente = Adress::findOrFail($client->id);
            $client->adress = $adress_cliente;
            // $client->rua = $adress_cliente->rua;
            // $client->bairro = $adress_cliente->rua;
            // $client->cidade= $adress_cliente->cidade;
            // $client->numero = $adress_cliente->numero;
            // $client->estado = $adress_cliente->estado;
        }


        return view('clients.show', ['clients' => $clients]);
    }


    public function countOrders(){

    }


    public function show(){

        $clients = Client::all();

        $products = Product::all();

        $orders = Order::all();


        return view('orders.show', ['clients' => $clients, 'products' => $products, 'orders' => $orders]);
    }

}
