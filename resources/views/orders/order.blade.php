@extends('layouts.main')

@section('title', 'Dasboard')

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
  
          {{-- @foreach($orders as $order) --}}


            @foreach($order->relations as $relation)
                <tr>
                    <td  class="table-first-id" >{{ $loop->index + 1 }}</td>


                    <td>{{$relation->product->name}}</td>
                    <td>{{$relation->product->description}}</td>
                    <td>{{$relation->amount}} un.</td>
                    <td>R${{number_format(substr_replace($relation->product->valor, '.', 12, 0),2,",",".")}} </td>
                    
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
      
    {{-- @if(count($clients) > 0)
    <div class="table-responsive">

    <table class="table center">
        <thead>
            <tr>
                <th class="table-first-id"  width="20px;" scope="col">#</th>
                <th class="table-first" scope="col">Nome</th>
                <th class="table-first" scope="col">Telefone</th>
                <th class="table-first" scope="col">Email</th>
                <th class="table-adress"  scope="col">Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td class="table-first-id" scope="row">{{ $loop->index + 1 }}</td>
                    <td class="table-first">{{$client->name }}</td>
                    <td class="table-first">{{$client->telefone }}</td>
                    <td class="table-first">{{$client->email }}</td>
                    <td >
                        {{$client->adress->rua }},nº 
                        {{$client->adress->numero }}, 
                        {{$client->adress->bairro}}, 
                        {{$client->adress->cidade }}-
                        {{$client->adress->estado }} 
                    </td>
                   
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>

    @else
    <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif --}}
</div>


@endsection
