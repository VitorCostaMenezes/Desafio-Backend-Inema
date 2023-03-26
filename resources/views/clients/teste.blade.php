@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Clientes cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($clients) > 0)
    <div class="table-responsive">

    <table class="table center">
        <thead>
            <tr>
                <th class="table-first-id"  width="20px;" scope="col">#</th>
                <th class="table-first" scope="col">Nome</th>
                <th class="table-first" scope="col">Telefone</th>
                <th class="table-first" scope="col">Email</th>
                <th class="table-adress"  scope="col">Endereço</th>
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
                   
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>

    @else
    <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif
</div>


@endsection
