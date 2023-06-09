@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Clientes Cadastrados</h1>
    {{-- <div id="search-container" class="col-md-12"> --}}  
       
    {{-- </div> --}}

</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($clients) > 0)
    <div class="table-responsive">
        {{-- <div class="row">
            <div class="col-12"> --}}
        <h5>Busque um Cliente</h5>
        <form action="/list_clients" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            <input type="submit" class="btn btn-button btn-block btn-primary mt-2"  value="Atualizar">
        </form>
            {{-- </div>
        </div> --}}

        <table class="table table-hover  mt-4 mb-5">
        <thead>
            <tr>
                <th class="table-first-id celula-client"  width="20px;" scope="col">#</th>
                <th class="table-first celula-client" scope="col">Nome</th>
                <th class="table-first celula-client" scope="col">Telefone</th>
                <th class=" celula-client" scope="col">Email</th>
                <th class=" celula-client"  scope="col">Endereço</th>
                <th class="table-date celula-client"   scope="col">Data:</th>
                <th class="table-alter celula-client"   scope="col">Alterar:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td class="table-first-id celula-client" scope="row">{{ $loop->index + 1 }}</td>
                    <td class=" celula-client">{{$client->name }}</td>
                    <td class="table-first celula-client">{{$client->telefone }}</td>
                    <td class=" celula-client">{{$client->email }}</td>
                    {{-- <td>{{$client->rua }}</td> --}}
                    <td class="celula-client">
                        {{$client->adress->rua }},nº 
                        {{$client->adress->numero }}, 
                        {{$client->adress->bairro}}, 
                        {{$client->adress->cidade }}-
                        {{$client->adress->estado }} 
                    </td>
                    <td class="" >{{ $client->date->format('d-m-Y') }}</td>

                    <td class="table-alter ">
                        <a class="btn btn.sm btn-block btn-primary " 
                            href="/client/edit/{{$client->id}}">
                            <ion-icon name="create-outline"></ion-icon>Editar
                        </a>
                    </td>

                   
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>

    @else
    <p>Você não tem clientes cadastrados:<a class="btn btn-button btn-sm btn-primary ml-2"href="/new_client">Adicionar Clientes</a></p>
    @endif
</div>


@endsection
