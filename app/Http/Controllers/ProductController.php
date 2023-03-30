<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;




class ProductController extends Controller
{

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {

        //verifica se o nome do produto ja exite no banco, caso não encontre nenhum reistro segue com o insert
        if (Product::where('name', $request->name)->count() == 0) {

            $products = new Product;

            $products->name = $request->name;
            $products->amount = $request->amount;
            $products->valor = $request->valor;
            $products->description = $request->description;
            //verifica se o arquivo de imagem é válido
            if($request->hasFile('image') && $request->file('image')->isValid()) {
    
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(public_path('img/products'), $imageName);
                $products->image = $imageName;
    
            }else {
                return redirect('/new_product')->with('msg-danger', 'Formato de imagem inválido, ou arquivo ausente!');
            }
    
                $products->save();
    
            return redirect('/list_products')->with('msg', 'Produto cadastrado com sucesso!');
        
        }else{
            return redirect('/list_clients')->with('msg-danger', 'Erro ao cadastrar o Produto. O nome utilizado já existe na base de dados!');

        }

    }


    public function show() {

        $search = request('search');
            //Se houver pesquisa na página de listagem dos produtos 
            //Exibe os  produtos com base na pesquisa do nome
        if($search) {
            $products = Product::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $products = Product::all();
        }        
        //se não houver neuma pesquisa é retornado todas as linhas inseridas
        return view('products.show',['products' => $products, 'search' => $search]);

    }


    public function edit($id) {
        // verifica se existe um produto com o mesmo no banco e repassa para o edit de produtos
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }


    public function update(Request $request) {

        $data = $request->all();

            if($request->amount > 0 ) {
                $product = Product::findOrFail($request->id)->update($data);
                return redirect('/list_products')->with('msg', 'Estoque atualizado com sucesso!');
            }else{
                return redirect('/list_products')->with('msg-danger', 'O estoque não foi atualizado!');
            }

    }
    
}
