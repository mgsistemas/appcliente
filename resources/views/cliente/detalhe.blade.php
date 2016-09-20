@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 ">
            <div class="panel panel-info">

                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index' )}}">Clientes</a></li>                    
                    <li class="active">Detalhe</li>                    
                </ol>


                <div class="panel-body">
                    <p><b>Cliente : </b>{{ $cliente->nome }}</p>
                    <p><b>E-mail : </b>{{ $cliente->email }}</p>
                    <p><b>Endereço : </b>{{ $cliente->endereco }}</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cliente->telefones as $telefone)
                            <tr>
                                <th scope="row">{{ $telefone->id }} </th>
                                <td>{{ $telefone->titulo }}</td>
                                <td>{{ $telefone->telefone }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{route('telefone.editar',$telefone->id)}}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('telefone.deletar',$telefone->id)}}' : window.location.href='{{route('cliente.detalhe',$telefone->cliente->id)}}' )">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p>
                        <a class="btn btn-info" href="{{ route('telefone.adicionar',$cliente->id) }}">Adicionar Telefone</a>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
