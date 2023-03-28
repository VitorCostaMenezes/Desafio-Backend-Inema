@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
  <h1>Pedidos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
 
  <table class="table table-hover ml-3 mt-4 mb-5">
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

@endsection



