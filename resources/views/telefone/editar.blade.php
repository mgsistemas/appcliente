@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-info">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index' )}}">Clientes</a></li>                    
                    <li><a href="{{ route('cliente.detalhe',$telefone->cliente->id)}}">Detalhe</a></li>                    
                    <li class="active">Editar</li>                    
                </ol>

                <div class="panel-body">
                    <p><b>Cliente : </b> {{$telefone->cliente->nome}}</p>

                    <form action="{{route('telefone.atualizar',$telefone->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="_method" value="put"/>
                        
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título do telefone" value="{{$telefone->titulo}}" />
                        </div>
                        <div class="form-group">
                            <label for="telefone">E-mail</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Telefone" value="{{$telefone->telefone}}" />
                        </div>
                        <button class="btn btn-info">Atualizar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection