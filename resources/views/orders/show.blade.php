@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Gerar Pedidos</h1>

  @if(count($clients) > 0)
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
@endif
  

  @if(count($products) > 0)

  @foreach($products as $product)
        {{ $loop->index + 1 }}<br>

          {{$product->name}}<br>
          {{$product->description}}<br>
          {{$product->amount}}<br>
          {{ $product->valor}}<br>
            {{ $product->image }}" 
            
    @endforeach  

@endif


  <form action="/save_product" method="POST" enctype="multipart/form-data">
    @csrf
   
    <h5 class="mb-2 mt-4">Informações pessoais:</h5>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente..." required>
    </div>

    <div class="form-group">
      <label for="image">Imagem do Produto:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div>

    <div class="form-group">
      <label for="nome">Quantidade:</label>
      <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade do produto disponivel..." required>
    </div>

    <div class="form-group">
      <label for="nome">Valor:</label>
      <input type="number" step="0.01" class="form-control" id="valor" name="valor" min="0.01" placeholder=" R$ Valor do produto..." required>
    </div>

    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea required name="description" id="description" class="form-control" placeholder="Descrição do produto..."></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Adicionar Produto">
    </div>

  </form>

</div>

@endsection