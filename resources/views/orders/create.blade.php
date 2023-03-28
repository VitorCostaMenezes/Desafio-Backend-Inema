@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container mb-0">
  <h1 class="my-0">Gerar Pedidos</h1>
</div>
<div id="event-create-container" class="col-md-12 mt-0">

  <form action="/save_order" method="POST" enctype="multipart/form-data">
    @csrf
    @if(count($products) > 0)

    <div class="form-group col-md-4 offset-md-1">
      <label for="title">Cliente:</label>
      <select id="client_id" name="client_id" class="form-control" required>
          <option value="" >Selecione o Cliente</option>
       
          @if(count($clients) > 0)
               @foreach($clients as $client)
                  <option value="{{$client->id}}">{{$client->name}}</option>
               @endforeach  
         @endif
      </select>
  </div>

  <div class="col-md-10 offset-md-1 dashboard-events-container">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
            <tr>
                <th class="table-first-id" scope="col">Selecione</th>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Quant. Disponivel</th>
                <th scope="col">Preço un.</th>
                <th class="table-image">Imagem</th>
                <th class="table-first" scope="col">Adicionar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
              @if($product->amount > 0 )
                  <tr>
                      <td>
                        <input type="checkbox" id="product{{$product->id}}" onclick='alteracheckbox("product{{$product->id}}")'   name="product_id[]" value="{{$product->id}}" >
                      </td>
                          <td class="celula-order">{{$product->name}}</td>
                          <td class="">{{$product->amount}}</td>
                          <td>
                            {{number_format(substr_replace($product->valor, '.', 12, 0),2,",",".")}}
                          </td>
                      <td>
                        <input disabled type="number"  class="check" id="amount-product{{$product->id}}" min=1 max="{{$product->amount}}" name="amount[]" value="1" >
                      </td>
                      <td class="table-image">
                        <abbr title="Clique para visualizar.">
                            <a href="/img/products/{{ $product->image }}" >
                                <img src="/img/products/{{ $product->image }}" class="img-fluid" alt="{{$product->name}}">
                            </a>
                        </abbr>
                    </td>
                  </tr>
              @endif
            @endforeach    
        </tbody>
     </table>
    </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary mt-4" value="Gerar Pedido">
  </div>

  @else
    <p class="mt-5">Não existem produtos cadastrados para gerar um pedido. <a class="btn btn-button btn-sm btn-primary ml-2" href="/new_product">Adicionar Produtos</a></p>
  @endif

  </form>

</div>

@endsection

