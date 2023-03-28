@extends('layouts.main')

@section('title', 'Gerar Pedido')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
  <h1>Pedidos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
  @if(count($orders) > 0)
  <div class="table-responsive">
      <h5>Buscar pelo nome do cliente</h5>
      <form action="/list_orders" method="GET">
          <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
          <input type="submit" class="btn btn-button btn-block btn-primary mt-2"  value="Atualizar">
      </form>
 
    <table class="table table-hover  mt-4 mb-5">
      <thead>
        <tr>
          <th class="table-first-id">#</th>
          <th>Cliente</th>
          <th>Data</th>
          <th>Valor</th>
          <th class="table-alter">Detalhes</th>
        </tr>
      </thead>
      <tbody>

        @foreach($orders as $order)
          <tr>
            <td class="table-first-id">{{$order->id}}</td>
            <td>{{$order->client->name}}</td>
            <td>{{ $order->date->format('d-m-Y') }}</td>
            <td>
                R$ {{number_format(substr_replace($order->valor, '.', 12, 0),2,",",".")}}
            </td>
            <td class="table-alter">
              <a class="btn btn.sm  btn-primary " href="/order/{{$order->id}}"><ion-icon name="create-outline"></ion-icon>Abrir</a>
            </td>
          </tr>
        @endforeach    
      </tbody>
    </table>
</div>
@else
  <p>Você não tem pedidos gerados. <a class="btn btn-button btn-sm btn-primary ml-2" href="/new_order">Gerar Novo Pedido</a></p>
@endif

</div>

@endsection



