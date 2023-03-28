@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')


{{-- <main>
  <div class="container-fluid">
    <div class="row">
      @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
      @endif
      @yield('content')
    </div>
  </div>
</main> --}}


<div id="event-create-container" class="col-md-12 ">
  <h1>Gerar Pedidos</h1>

 

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
                {{-- <th scope="col">Selecione</th> --}}
                <th scope="col">Nome do Produto</th>
                {{-- <th scope="col">Descrição</th> --}}
                <th scope="col">Quant. Disponivel</th>
                <th scope="col">Preço un.</th>
                <th class="table-first" scope="col">Adicionar</th>
                {{-- <th class="table-first" scope="col">R$</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            @if($product->amount > 0 )
                <tr>
                    {{-- <td  class="table-first-id" >{{ $loop->index + 1 }}</td> --}}
                    <td>
                      <input type="checkbox" id="product{{$product->id}}" onclick='alteracheckbox("product{{$product->id}}")'   name="product_id[]" value="{{$product->id}}" >
                      {{-- <input type="checkbox" id="{{$product->id}}" onclick='alteracheckbox2("#p_sgq_2")'  onclick='marcardesmarcar({{$product->id}})' name="product_id[]" value="{{$product->id}}" > --}}

                    </td>



                        <td>{{$product->name}}</td>

                        <td>{{$product->amount}}</td>

                        <td>
                          {{number_format(substr_replace($product->valor, '.', 12, 0),2,",",".")}}
                        </td>

                    <td>
                      <input disabled type="number"  class="check" id="amount-product{{$product->id}}" min=1 max="{{$product->amount}}" name="amount[]" value="1" >
                      
                    </td>

                      </tr>
                      @endif
                  @endforeach    
              </tbody>
          </table>
      </div>

      <div id="total"></div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary mt-4" value="Gerar Pedido">
      </div>

      @else
        <p class="mt-5">Não existem produtos cadastrados para gerar um pedido. <a class="btn btn-button btn-sm btn-primary ml-2" href="/new_product">Adicionar Produtos</a></p>
      @endif

 

    



    
    
 

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
