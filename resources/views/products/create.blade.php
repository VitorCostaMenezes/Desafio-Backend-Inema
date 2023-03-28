@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Adicionar Produtos</h1>
  <form action="/save_product" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nome do produto..." required>
    </div>

    <div class="form-group">
      <label for="image">Imagem do Produto:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div>

    <div class="form-group">
      <label for="nome">Quantidade:</label>
      <input type="number" class="form-control" id="amount" name="amount" placeholder="Quantidade do produto disponivel..." required>
    </div>

    <div class="form-group">
      <label for="nome">Valor:</label>
      <input type="number" step="0.01" class="form-control" id="valor" name="valor" min="0.01" 
              placeholder=" Digite o valor do produto sem os centavos. Ex: 1000 / 341 / 9999" required>
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