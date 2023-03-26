<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{

    public function create() {
        return view('products.create');
    }


    public function store(Request $request) {

        
        $products = new Product;

        $products->name = $request->name;
        $products->amount = $request->amount;
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



    // public function create(Request $request) {

    //     DB::beginTransaction();

    //         $client = Client::create($request->all());
    //         $client->adress()->create($request->all());

    //     DB::commit();

    //     return redirect('/')->with('msg', 'Cliente cadastrado com sucesso!');

    // }


    public function index(){

        $products= Product::all();
        return view('products.show', ['products' => $products]);
    }
    //
}
