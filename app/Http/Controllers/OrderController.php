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
        //retorna os dados do cliete e produtos para preencher parte do formulário de pedidos
        $clients = Client::all();
        $products = Product::all();
        return view('orders.create', ['clients' => $clients, 'products' => $products]);
    }

    public function store(Request $request) {

        $orders = new Order;
        $valor_total = 0;

        DB::beginTransaction();
            //recupera os arquivos da requisção para realizar um novo pedido
            $orders->client_id = $request->client_id;
            $product_ids = $request->product_id;
            $quantidade = $request->amount;

            //verifica os produos e quantidade para gerar o valor total do pedido 
            foreach(array_combine($product_ids, $quantidade ) as $p_id => $q){
                $product_temp = Product::findOrFail($p_id);
                $valor_total +=  $product_temp->valor * $q;
                $amount = ($product_temp->amount) - $q;

                //verificação de quantidade ma geração do pedido
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
                //salvando as relações do pedido
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
            //Se houver pesquisa na página de listagem dos pedidos 
            //Exibe os dados do pedido com base na pesquisa do nome
            $client = Client::where([['name', 'like', '%'.$search.'%']])->get();

            $orders = Order::where([
                ['client_id', $client[0]->id]
            ])->get();

        } else {
        //se não houver neuma pesquisa é retornado todas as linhas inseridas

            $orders = Order::all();
        }        
    
        return view('orders.show',['orders' => $orders, 'search' => $search]);
    }


    public function order($id) {
        // verifica se existe um cliente com o mesmo no banco e repassa para listagem de detalhes do pedido
        $order = Order::findOrFail($id);
        return view('orders.order', ['order' => $order ]);
    }
    
}
