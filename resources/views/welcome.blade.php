@extends('layouts.main')

@section('title', 'Gestão de Pedidos')

@section('content')


<div class="container ">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="display-3 text-secondary text-center">Gestão de Pedidos</h1>
        </div>
    </div>
    
    <div class="row text-secondary mt-4">
        <div class="col-sm-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class=" display-4 text-secondary">Clientes</h5>
              <p class="card-text">Adicione ou clientes à sua base de dados ou confira seus dados.</p>
              <a href="/new_client" class="btn btn-block btn-primary">Adicionar</a>
              <a href="/list_clients" class="btn btn-block btn-primary">Listar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 mb-5">
          <div class="card">
            <div class="card-body">
              <h5 class="display-4 text-secondary">Produtos</h5>
              <p class="card-text">Adicione ou produtos à sua base de dados ou confira seus detalhes.</p>
              <a href="/new_product" class="btn btn-block btn-primary">Adicionar</a>
              <a href="/list_products" class="btn btn-block btn-primary">Listar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 ">
            <div class="card">
              <div class="card-body">
                <h5 class="display-4 text-secondary">Pedidos</h5>
                <p class="card-text">Gere novos pedidos e confira uma listagem com pedidos gerados.</p>
                <a href="new_order" class="btn btn-block btn-primary">Adicionar</a>
                <a href="/list_orders" class="btn btn-block btn-primary">Listar</a>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection