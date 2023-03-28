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

    public function create(){
        $clients = Client::all();
        $products = Product::all();
        return view('orders.create', ['clients' => $clients, 'products' => $products]);
    }

    public function store(Request $request) {

        $orders = new Order;
        $valor_total = 0;

        DB::beginTransaction();

            $orders->client_id = $request->client_id;
            $product_ids = $request->product_id;
            $quantidade = $request->amount;

            foreach(array_combine($product_ids, $quantidade ) as $p_id => $q){
                $product_temp = Product::findOrFail($p_id);
                $valor_total +=  $product_temp->valor * $q;
                $amount = ($product_temp->amount) - $q;

                if($q < 1){
                    return redirect('/new_order')->with('msg-danger', 'Não foi possivel gerar o pedido. 
                                                                    A quantidade mínima de um produto selecionado não pode ser menor que 1.');
                }elseif($product_temp->amount < $q){
                    return redirect('/new_order')->with('msg-danger', 'Não foi possivel gerar o pedido. 
                                                                A quantidade maxima do produto: "'.$product_temp->name.'", foi excedida!');
                }else{
                    Product::where('id', $p_id)
                    ->update(['amount' => $amount]);
                };

                }

            $orders->valor = $valor_total;
            $orders->save();

            foreach(array_combine($product_ids, $quantidade ) as $p_id => $q){
                Relation::insert(['order_id' => $orders->id,
                                        'product_id'=> $p_id,
                                        'amount' => $q]);
                    }

        DB::commit();

        return redirect('/new_order')->with('msg', 'Pedido gerado com sucesso!');
    }


    public function show() {

        $search = request('search');

        if($search) {

            $client = Client::where([['name', 'like', '%'.$search.'%']])->get();

            $orders = Order::where([
                ['client_id', $client[0]->id]
            ])->get();

        } else {
            $orders = Order::all();
        }        
    
        return view('orders.show',['orders' => $orders, 'search' => $search]);
    }


    public function order($id) {
        $order = Order::findOrFail($id);
        return view('orders.order', ['order' => $order ]);
    }
    
}
