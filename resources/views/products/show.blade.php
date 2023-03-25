@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Clientes cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($products) > 0)
    <div class="table-responsive">

    <table class="table ">
        <thead>
            <tr>
                <th class="table-first" scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade Disponivel</th>
                <th scope="col">Preço</th>
                <th class="table-first" scope="col">Imagem do Produto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td  class="table-first" >{{ $loop->index + 1 }}</td>

                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->amount}}</td>
                        <td>{{ $product->valor}}</td>
                        <td  class="table-first">
                            <img src="/img/products/{{ $product->image }}" class="img-fluid" alt="{{ $product->nome }}">
                        </td>
                    {{-- <td>{{$client->rua }}</td> --}}
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>

    @else
    <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif
</div>


@endsection
