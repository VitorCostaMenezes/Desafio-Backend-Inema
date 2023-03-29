@extends('layouts.main')

@section('title', 'Editando: ' . $product->name)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $product->name}}</h1>
  <h3 class="text-danger">Esta funcionalidade está apresentando inconsistência.</h3>

  <form action="/estoque/update/{{ $product->id }}" method="POST" enctype="multipart/form-data" class="mt-4">
    @csrf
    @method('PUT')

    <div class="form-group  ml-3 mt-4 w-50">
      <label for="amount">Quantidade disponivel atualmente:</label>
      <input type="number"  class="form-control " min="1" id="amount" name="amount" placeholder="Nome do cliente..." required value="{{ $product->amount }}">
    </div>
  
    <div class="form-group ml-3">
        <input type="submit" class="btn btn-primary  mt-2" value="Atualizar Estoque">
    </div>




















  </form>
</div>

@endsection