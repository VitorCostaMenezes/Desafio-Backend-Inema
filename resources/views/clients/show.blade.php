@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Clientes cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($clients) > 0)
    <table class="table center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td>{{$client->name }}</td>
                    <td>{{$client->telefone }}</td>
                    <td>{{$client->email }}</td>
                    {{-- <td>{{$client->rua }}</td> --}}
                    <td>
                        <ul style="list-style: none;">
                            <li>{{$client->rua }},nº 
                                {{$client->numero }}, 
                                {{$client->bairro}}, 
                                {{$client->cidade }}-
                                {{$client->estado }} </li>
                        </ul>
                    </td>
                   
                </tr>
            @endforeach    
        </tbody>
    </table>
    @else
    <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif
</div>


@endsection
