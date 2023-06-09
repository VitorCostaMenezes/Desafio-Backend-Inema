@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Produtos Cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($products) > 0)
    <div class="table-responsive">
        <h5>Busque um Produto</h5>
        <form action="/list_products" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            <input type="submit" class="btn btn-button btn-block btn-primary mt-2"  value="Atualizar">
        </form>

    <table class="table table-hover  mt-4 mb-5">
        <thead>
            <tr>
                <th class="table-first-id" scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Disponivel</th>
                <th scope="col">Preço</th>
                <th class="table-first" scope="col">Imagem do Produto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td  class="table-first-id celula-product" >{{ $loop->index + 1 }}</td>

                        <td class="celula-product">{{$product->name}}</td>
                        <td class="celula-product">{{$product->description}}</td>

                        @if($product->amount > 0)
                            <td class="" >{{$product->amount}} un.  </td>
                        @else
                            <td class="text-danger ">Sem estoque!<br>
                                <a class="btn btn.sm btn-danger mt-2" 
                                    href="/estoque/edit/{{$product->id}}">
                                    <ion-icon name="create-outline"></ion-icon>Atualizar
                                </a>
                             </td>
                        @endif
                    <td class="">R$ {{number_format(substr_replace($product->valor, '.', 12, 0),2,",",".")}}</td>
                    <td class="table-first ">
                        <abbr title="Clique para visualizar.">
                            <a href="/img/products/{{ $product->image }}" >
                                <img src="/img/products/{{ $product->image }}" class="img-fluid" alt="{{$product->name}}">
                            </a>
                        </abbr>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>

    @else
        <p>Você não tem produtos cadastrados, <a class="btn btn-button btn-sm btn-primary ml-2" href="/new_product">Adicionar Produtos</a></p>
    @endif
</div>


@endsection
