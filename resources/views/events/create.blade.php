@extends('layouts.main')

@section('title', 'Adicionar Cliente')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Adicionar Cliente</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div> --}}
    <h5 class="mb-2 mt-4">Informações pessoais</h5>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente...">
    </div>
    <div class="form-group">
        <label for="emmail">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email do cliente...">
      </div>
      <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="phone" class="form-control" id="telefone" name="telefone" placeholder="Ex: 00 999880-7766">
      </div>
    <h3>ndereço:</h3>

      <div class="form-group">
        <label for="nome">Rua:</label>
        <input type="text" class="form-control" id="rua" name="rua" placeholder="Ex: Rua Fulano de tal...">
      </div>
      <div class="form-group">
        <label for="nome">Nº:</label>
        <input type="number" class="form-control" id="rnumero" name="numero" placeholder="Ex: Rua Fulano de tal...">
      </div>
    <div class="form-group">
      <label for="bairro">Bairro:</label>
      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Ex: Rua Fulano de tal...">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Local do evento">
    </div>
    <div class="form-group">
        <label for="title">Estado:</label>
        <select id="estado" name="estado" class="form-control">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>

    {{-- <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
      </div> --}}
    {{-- <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Open Food"> Open food
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div> --}}
    <input type="submit" class="btn btn-primary mt-4" value="Adicionar Cliente">
  </form>
</div>

@endsection