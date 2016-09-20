@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-info">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index' )}}">Clientes</a></li>                    
                    <li class="active">Editar</li>                    
                </ol>

                <div class="panel-body">

                    <form action="{{ route('cliente.atualizar',$cliente->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="_method" value="put"/>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do Cliente" value="{{ $cliente->nome }}" />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail do Cliente" value="{{ $cliente->email }}"/>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço do Cliente" value="{{ $cliente->endereco }}" />
                        </div>
                        <button class="btn btn-info">Atualizar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection