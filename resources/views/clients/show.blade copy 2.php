@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Clientes Cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($clients) > 0)
    <div class="table-responsive">

        <table class="table table-hover  mt-4 mb-5">
        <thead>
            <tr>
                <th class="table-first-id"  width="20px;" scope="col">#</th>
                <th class="table-first" scope="col">Nome</th>
                <th class="table-first" scope="col">Telefone</th>
                <th class="table-first" scope="col">Email</th>
                <th class="table-adress"  scope="col">Endereço</th>
                <th class="table-date"   scope="col">Cliente Desde:</th>
                <th class="table-alter"   scope="col">Alterar:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td class="table-first-id" scope="row">{{ $loop->index + 1 }}</td>
                    <td class="table-first">{{$client->name }}</td>
                    <td class="table-first">{{$client->telefone }}</td>
                    <td class="table-first">{{$client->email }}</td>
                    {{-- <td>{{$client->rua }}</td> --}}
                    <td >
                        {{$client->adress->rua }},nº 
                        {{$client->adress->numero }}, 
                        {{$client->adress->bairro}}, 
                        {{$client->adress->cidade }}-
                        {{$client->adress->estado }} 
                    </td>
                    <td >{{ $client->date->format('d-m-Y') }}</td>

                    <td class="table-alter">
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
