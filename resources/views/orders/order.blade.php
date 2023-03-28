@extends('layouts.main')

@section('title', 'Detalhes do Pedido')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1 >Detalhes do Pedido</h1>
</div>
<div class="col-md-10 offset-md-1 px-5">

<h4>Número do Pedido:</h4>
<p class="ml-3">
<span class="font-weight-bold"> Nº: </span><span class="text-secondary font-italic ">{{$order->id}}</span><br>
</p>

<h4>Nome do Cliente:</h4>
<p class="ml-3">
    <span class="text-secondary font-italic">{{$order->client->name}}</span>  <br>
</p>

<h4>Endereço:</h4>
<p class="ml-3">
    <span class="font-weight-bold"> Rua: </span><span class="text-secondary font-italic ">{{$order->client->adress->rua }}</span><br>
    <span class="font-weight-bold"> Nº: </span> <span class="text-secondary"> {{$order->client->adress->numero }}</span><br>
    <span class="font-weight-bold"> Bairro: </span><span class="text-secondary">{{$order->client->adress->bairro}}</span><br>
    <span class="font-weight-bold"> Cidade: </span><span class="text-secondary">{{$order->client->adress->cidade }}</span><br>
    <span class="font-weight-bold"> Estado: </span><span class="text-secondary">{{$order->client->adress->estado }}</span>
</p>

<h4>Data de Emissão:</h4>
<p class="ml-3">
    <span class="text-secondary font-italic ">{{ $order->date->format('d-m-Y') }}</span>  <br>
</p>

<h4>Valor Total:</h4>
<p class="ml-3">
<span class="font-weight-bold"> Nº: </span><span class="text-secondary font-italic ">R$ {{number_format(substr_replace($order->valor, '.', 12, 0),2,",",".")}}</span><br>
</p>

<h4>Produtos:</h4>

    <table class="table table-hover ml-3 mt-4 mb-5">
        <thead>
          <tr>
            <th class="table-first-id" >#</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th class="table-quant">Quant.</th>
            <th class="table-quant">Valor Unitário</th>
            <th class="table-image">Imagem</th>
          </tr>
        </thead>
        <tbody>
  
            @foreach($order->relations as $relation)
                <tr>
                    <td  class="table-first-id celula-order" >{{ $loop->index + 1 }}</td>
                    <td class="celula-order">{{$relation->product->name}}</td>
                    <td class="celula-order">{{$relation->product->description}}</td>
                    <td class="">{{$relation->amount}} un.</td>
                    <td class="">R${{number_format(substr_replace($relation->product->valor, '.', 12, 0),2,",",".")}} </td>
                    <td class="table-image">
                        <abbr title="Clique para visualizar.">
                            <a href="/img/products/{{ $relation->product->image }}" >
                                <img src="/img/products/{{ $relation->product->image }}" class="img-fluid" alt="{{$relation->product->name}}">
                            </a>
                        </abbr>
                    </td>
                </tr>
            @endforeach    
        </tbody>
      </table>
      
</div>


@endsection
