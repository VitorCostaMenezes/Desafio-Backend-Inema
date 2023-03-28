@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Clientes cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">



    <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Endereço</th>
            <th>Produtos</th>
            <th>Quant.</th>
            <th>Data</th>
            <th>Valor</th>
            <th>Deatalhes</th>
  
          </tr>
        </thead>
        <tbody>
  
          {{-- @foreach($orders as $order) --}}
  a
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->client->name}}</td>
              {{-- <td>{{$order->client->adress->id}}</td> --}}
  
              <td >
                {{$order->client->adress->rua }}, nº 
                {{$order->client->adress->numero }}, <br>
                {{$order->client->adress->bairro}}, 
                {{$order->client->adress->cidade }}-
                {{$order->client->adress->estado }} 
            </td>
  
              <td>
  
                @foreach($order->relations as $relation)
  
                  {{$relation->product->name}}  <br>
                  {{-- \\ {{$relation->amount}}<br> --}}
  
                @endforeach    
  
  
              </td>
              <td>
  
                @foreach($order->relations as $relation)
  
                  {{$relation->amount}} un.<br>
  
                @endforeach    
  
  
              </td>
              
  
  
  
              {{-- <td>{{$order->valor }}</td> --}}
              <td>{{ $order->date->format('d-m-Y') }}</td>
  
              {{-- <td>{{ date( 'd/m/Y' , strtotime($order->date))}}</td> --}}
  
              {{-- <td>R$ {{$order->valor }}</td> --}}
              <td>
               R$ {{number_format(substr_replace($order->valor, '.', 12, 0),2,",",".")}}
  
  
              </td>
              <td>
                <a href="/order/{{$order->id}}">Abrir</a>
              </td>
  
            </tr>
  
          {{-- @endforeach     --}}
  
  
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
