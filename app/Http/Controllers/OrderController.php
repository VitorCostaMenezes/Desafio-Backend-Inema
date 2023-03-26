<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Client;
use App\Models\Product;
use App\Models\Order;
use App\Models\Relation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    public function create(Request $request) {

        $orders = new Order;
        // $order_products = new Order_Product;

        $valor_total = 0;

        DB::beginTransaction();

            $orders->client_id = $request->client_id;
            $product_ids = $request->product_id;
            $quantidade = $request->amount;

            foreach(array_combine($product_ids, $quantidade ) as $p_id => $q){
                $product_temp = Product::findOrFail($p_id);
                $valor_total +=  $product_temp->valor * $q;
                $amount = ($product_temp->amount) - $q;

                Product::where('id', $p_id)
                    ->update(['amount' => $amount]);
                };

            $orders->valor = $valor_total;
            $orders->save();


            foreach(array_combine($product_ids, $quantidade ) as $p_id => $q){

                Relation::insert(['order_id' => $orders->id,
                                        'product_id'=> $p_id,
                                        'amount' => $q]);
            }

        DB::commit();

        return redirect('/')->with('msg', 'Cliente cadastrado com sucesso!');

    }



    // public function index(){

    //     $clients = Client::all();
    //     // $clients = Client::with('adresses')->get();
    //     // $clients = Client::with('adresses')->all();

    //     // $event = Event::findOrFail($id);
    //     foreach ($clients as $client) {

    //         $adress_cliente = Adress::findOrFail($client->id);
    //         $client->adress = $adress_cliente;
    //         // $client->rua = $adress_cliente->rua;
    //         // $client->bairro = $adress_cliente->rua;
    //         // $client->cidade= $adress_cliente->cidade;
    //         // $client->numero = $adress_cliente->numero;
    //         // $client->estado = $adress_cliente->estado;
    //     }


    //     return view('clients.show', ['clients' => $clients]);
    // }


    public function countOrders(){

    }


    public function show(){

        $clients = Client::all();

        $products = Product::all();

        $orders = Order::all();


        return view('orders.show', ['clients' => $clients, 'products' => $products, 'orders' => $orders]);
    }

}
