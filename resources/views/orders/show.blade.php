@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')

<div id="event-create-container" class="col-md-12 3">
  <h1>Gerar Pedidos</h1>

 

  <form action="/save_order" method="POST" enctype="multipart/form-data">
    @csrf
   
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
    @if(count($products) > 0)
    <div class="table-responsive">

    <table class="table ">
        <thead>
            <tr>
                <th class="table-first-id" scope="col">Selecione</th>
                {{-- <th scope="col">Selecione</th> --}}
                <th scope="col">Nome</th>
                {{-- <th scope="col">Descrição</th> --}}
                <th scope="col">Quantidade Disponivel</th>
                <th scope="col">Preço</th>
                <th class="table-first" scope="col">Adicionar</th>
                {{-- <th class="table-first" scope="col">R$</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    {{-- <td  class="table-first-id" >{{ $loop->index + 1 }}</td> --}}
                    <td>
                      <input type="checkbox" id="product{{$product->id}}" onclick='alteracheckbox("product{{$product->id}}")'   name="product_id[]" value="{{$product->id}}" >
                      {{-- <input type="checkbox" id="{{$product->id}}" onclick='alteracheckbox2("#p_sgq_2")'  onclick='marcardesmarcar({{$product->id}})' name="product_id[]" value="{{$product->id}}" > --}}

                    </td>



                        <td>{{$product->name}}</td>
                        {{-- <input type="hidden" name="product_id[]"  value="{{$product->id}}"> --}}
                        {{-- <td>{{$product->name}}</td> --}}
                        {{-- <td>{{$product->description}}</td> --}}
                        {{-- <td>{{$product->amount}}</td> --}}



                        <td>{{$product->amount}}</td>
                        {{-- <td>
                          <input disabled type="text" id="quantidade" value="{{$product->amount}}">
                        </td> --}}
                        {{-- <td>
                          <input type="text" class="preco-produto" name="preco[]"  value="{{$product->valor}}">

                        </td> --}}
                        <td>{{ $product->valor}}</td>
                        {{-- <input type="hidden" name="valor[]"  value="{{$product->valor}}"> --}}

                        {{-- <td  class="table-first">
                            <img src="/img/products/{{ $product->image }}" class="img-fluid" alt="{{ $product->nome }}">
                        </td> --}}
                    {{-- <td>{{$client->rua }}</td> --}}

                    <td>
                      <input disabled type="number"  class="check" id="amount-product{{$product->id}}" min=1 max="{{$product->amount}}" name="amount[]" value="1" >
                      
                    </td>

                    <td>
                        <P id="#total"></P>
                    </td>


                </tr>
            @endforeach    
        </tbody>
    </table>
</div>

<div id="total"></div>
@else
<p>Você ainda não tem produtos cadatsrados, <a href="/products/create">Adcionar Produtos</a></p>
@endif


    



    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary mt-4" value="Gerar Pedido">
    </div>

  </form>

</div>

@endsection



 {{-- @if(count($clients) > 0)
   nº do pedido: {{count($orders) }}
    @endif
    <br/>

  @if(count($clients) > 0)


        @foreach($clients as $client)

        {{$loop->index + 1 }}<br/>
            {{$client->name }}<br>
            {{$client->telefone }}<br>
            {{$client->email }}<br>
        @endforeach   

  @endif

  @if(count($orders) == 0)
teste
@endif --}}
  

  {{-- @if(count($products) > 0)

  @foreach($products as $product)
        {{ $loop->index + 1 }}<br>

          {{$product->name}}<br>
          {{$product->description}}<br>
          {{$product->amount}}<br>
          {{ $product->valor}}<br>
            {{ $product->image }}" 
            
    @endforeach  

@endif --}}
