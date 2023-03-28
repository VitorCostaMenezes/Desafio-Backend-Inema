@extends('layouts.main')

@section('title', 'Editando: ' . $client->name)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $client->name}}</h1>

  <form action="/clients/update/{{ $client->id }}" method="POST" enctype="multipart/form-data" class="mt-4">
    @csrf
    @method('PUT')

    <h5 class="mb-2 mt-4">Informações pessoais:</h5>
    <div class="form-group  ml-3 mt-4">
      <label for="name">Nome:</label>
      <input type="text" class="form-control ml-3" id="name" name="name" placeholder="Nome do cliente..." required value="{{ $client->name }}">
    </div>
    <div class="form-group ml-3">
        <label for="emmail">Email:</label>
        <input type="email" class="form-control ml-3" id="email" name="email" placeholder="Email do cliente..." required value="{{ $client->email }}">
      </div>
      <div class="form-group ml-3">
        <label for="telefone">Telefone:</label>
        <input type="phone" class="form-control ml-3" id="telefone" name="telefone" placeholder="Ex: 00 999880-7766" required value="{{ $client->telefone }}">
      </div>

      <h5 class="mb-2 mt-4">Endereço:</h5>

      <div class="form-group ml-3 mt-4">
        <label for="rua">Rua:</label>
        <input type="text" class="form-control ml-3" id="rua" name="rua" placeholder="Ex: Rua Fulano de tal..." required value="{{ $client->adress->rua }}" >
      </div>
      <div class="form-group ml-3">
        <label for="numero">Nº:</label>
        <input type="number" class="form-control ml-3" id="numero" name="numero" placeholder="Ex: Rua Fulano de tal..." required value="{{ $client->adress->numero }}">
      </div>
    <div class="form-group ml-3">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control ml-3" id="bairro" name="bairro" placeholder="Ex: Rua Fulano de tal..." required value="{{ $client->adress->bairro }}">
    </div>
    <div class="form-group ml-3">
      <label for="cidade">Cidade:</label>
      <input type="text" class="form-control ml-3" id="cidade" name="cidade" placeholder="Local do evento" required value="{{ $client->adress->cidade }}">
    </div>
    <div class="form-group ml-3">
        <label for="estado">Estado:</label>
        <select id="estado" name="estado" class="form-control ml-3">
            <option value="{{ $client->adress->estado }}">{{ $client->adress->estado }}</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select>
    </div>
    <div class="form-group ml-3">
        <input type="submit" class="btn btn-warning ml-3 mt-3" value="Atualizar Cliente">
    </div>
  </form>
</div>

@endsection