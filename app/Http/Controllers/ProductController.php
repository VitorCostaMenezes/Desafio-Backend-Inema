<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{

    public function create(Request $request) {

       

        $products = new Product;

        $products->name = $request->nome;
        $products->amount = $request->quantidade;
        $products->valor = $request->valor;
        $products->description = $request->description;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/products'), $imageName);

            $products->image = $imageName;

        }else {
            return redirect('/')->with('msg', 'Formato de imagem inválido!');

        }

        $products->save();


        return redirect('/')->with('msg', 'Produto cadastrado com sucesso!');

    }



    public function index(){

        $products= Product::all();
        // $clients = Client::with('adresses')->get();
        // $clients = Client::with('adresses')->all();

        // $event = Event::findOrFail($id);
        // foreach ($clients as $client) {

        //     $adress_cliente = Adress::findOrFail($client->id);
        //     $client->rua = $adress_cliente->rua;
        //     $client->bairro = $adress_cliente->rua;
        //     $client->cidade= $adress_cliente->cidade;
        //     $client->numero = $adress_cliente->numero;
        //     $client->estado = $adress_cliente->estado;

        // }


        return view('products.show', ['products' => $products]);
    }
    //
}
